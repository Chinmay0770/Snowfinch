<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Detail;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    public function index(){

        $users = User::join('details', 'users.id', '=', 'details.user_id')
                ->select('users.*', 'details.education', 'details.contact', 'details.user_role')
                ->get();
        
        return view('details.index', ['users' => $users]);
    }

    public function filter(Request $request){

        $users = User::join('details', 'users.id', '=', 'details.user_id')
                ->select('users.*', 'details.education', 'details.contact', 'details.user_role')
                ->where($request->filter, 'like','%'.$request->search.'%')
                ->get();

        
        return view('details.index', ['users' => $users]);
    }


    public function edit($id){
        
        $user_id = $id;
        $user = User::find($id);
        $details = Detail::find($id);

        return view('details.edit', ['user' => $user, 'details' => $details]);
    }

    public function update(Request $request, $id){

        $user = User::find($id);
        $form_fields = $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => ['required','email'],
            'password' => 'required|min:6',
            
        ]);

        // hash password
        $form_fields['password'] = bcrypt($form_fields['password']);

        $user->update($form_fields);
        
        
        // Details table
        $details = Detail::find($id);
        $form_fields_1 = $request->validate([
            'contact' => 'required|integer',
            'education' => 'required',
            'aadhar_no' => 'required|integer',
            'user_role' => 'required',
            'user_status' => 'required',
        ]);
        if($request->hasFile('avatar')) {
            $form_fields_1['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }
        

        $details->update($form_fields_1);

        // Address Table
        $form_fields_2['state'] = $request->state;
        $form_fields_2['district'] = $request->district;
        $form_fields_2['city'] = $request->city;
        $form_fields_2['pincode'] = $request->pincode;
        $form_fields_2['address'] = $request->address;
        $form_fields_2['type'] = 'Present';
        $form_fields_2['user_id'] = $id;
        

        $address = Address::find($id);

        if ($request->check === 'on'){
            $form_fields_2['type'] = 'Both';
            $address->update($form_fields_2);
        }
        else{
            $address->where('type','=','Present')->updateOrCreate($form_fields_2);

            $form_fields_3['state'] = $request->state_p;
            $form_fields_3['district'] = $request->district_p;
            $form_fields_3['city'] = $request->city_p;
            $form_fields_3['pincode'] = $request->pincode_p;
            $form_fields_3['address'] = $request->address_p;
            $form_fields_3['user_id'] = $id;
            $form_fields_3['type'] = 'Permanent';
            

            $address->where('type','=','Permanent')->updateOrCreate($form_fields_3);

            if($address->wasRecentlyCreated){
                // updateOrCreate performed create
                Address::where('user_id', $id)
                        ->where('type', 'Both')
                        ->delete();
                
             }
        }

        return redirect('/');
    }

    public function delete($id){
        $user = User::find($id);
        $details = Detail::find($id);
        $address = Address::find($id);
        if($user->user_role != 'Admin'){
            abort(403, 'Unauthorized Action');
        }
        $user->delete();
        return redirect('/');
    }
}
