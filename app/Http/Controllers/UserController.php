<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Detail;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function login(){
        return view('users.login');
    }

    public function register(){
        return view('users.register');
    }

    public function store(Request $request){
        $form_fields = $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => 'required|min:6',
            
        ]);

        // hash password
        $form_fields['password'] = bcrypt($form_fields['password']);

        $user = User::create($form_fields);
        
        // auth
        auth()->login($user);


        // Details table
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
        $form_fields_1['user_id'] = auth()->id();

        $details = Detail::create($form_fields_1);

        // Address Table
        $form_fields_2['state'] = $request->state;
        $form_fields_2['district'] = $request->district;
        $form_fields_2['city'] = $request->city;
        $form_fields_2['pincode'] = $request->pincode;
        $form_fields_2['address'] = $request->address;
        $form_fields_2['type'] = 'Present';
        $form_fields_2['user_id'] = auth()->id();

        if ($request->check === 'on'){
            $form_fields_2['type'] = 'Both';
            $address = Address::create($form_fields_2);
        }
        else{
            $address = Address::create($form_fields_2);

            $form_fields_3['state'] = $request->state_p;
            $form_fields_3['district'] = $request->district_p;
            $form_fields_3['city'] = $request->city_p;
            $form_fields_3['pincode'] = $request->pincode_p;
            $form_fields_3['address'] = $request->address_p;
            $form_fields_3['type'] = 'Permanent';
            $form_fields_3['user_id'] = auth()->id();

            $address1 = Address::create($form_fields_3);
        }

        return redirect('/');
    }


    public function authenticate(Request $request){
        $formfields = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formfields)){
            $request->session()->regenerate();

            return redirect('/')->with('message','Logged In');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    } 

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
