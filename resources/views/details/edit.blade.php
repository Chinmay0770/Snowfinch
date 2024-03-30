<x-layout>
    <div class="row">
        <div class="col-6">
          <h6>
            Edit User
            
          </h6>
        </div>
      </div>

      <form method="POST" action="/edit/{{$user->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-md-2">
              <label><span class="text-danger">*</span>First Name</label>
              <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" required/>
    
              @error('first_name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-2">
              <label><span class="text-danger">*</span>Last Name</label>
              <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" required/>
    
              @error('last_name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-2">
              <label><span class="text-danger">*</span>Contact</label>
              <input type="number" class="form-control" name="contact" value="{{$details->contact}}" required/>
    
              @error('contact')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-2">
              <label><span class="text-danger">*</span>Password</label>
              <input type="password" class="form-control" name="password" value="{{old('password')}}" required/>
    
              @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-4">
              <label><span class="text-danger">*</span>Email</label>
              <input type="email" class="form-control" name="email" value="{{$user->email}}" required/>
    
              @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-4">
              <label><span class="text-danger">*</span>Education</label><br />
              <select class="form-select" name="education" value="{{$details->education}}" required>
                <option>Engineering</option>
                <option>Finance</option>
              </select>
    
              @error('education')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-4">
              <label><span class="text-danger">*</span>Aadhar No</label>
              <input type="number" class="form-control" name="aadhar_no" value="{{$details->aadhar_no}}" required />
    
              @error('aadhar_no')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-4">
              <label>PAN No.</label>
              <input type="text" class="form-control" name="pan_no" value="{{$details->pan_no}}" />
    
              @error('pan_no')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-4">
              <label>Use Avatar</label>
              <input type="file" class="form-control" name="avatar" />
              
              <img class="w-12 m-2"
            src="{{$details->avatar ? asset('storage/' . $details->avatar) : asset('/img/no-image.png')}}" alt="" />
    
              @error('avatar')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-4">
              <label><span class="text-danger">*</span>User Roles</label><br />
              <select class="form-select" name="user_role" value="{{$details->user_role}}" required>
                <option>Developer</option>
                <option>Admin</option>
              </select>
    
              @error('user_role')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
    
            <div class="col-md-4">
              <label><span class="text-danger">*</span>User Status</label><br />
              <select class="form-select" name="user_status" value="{{$details->user_status}}" required>
                <option>Active</option>
              </select>
    
              @error('user_status')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
          </div>


          {{-- Address --}}
          <div class="row">
            <div class="col-md-12">
              <h6 class="address_section bg-success p-2">Address Details</h6>
            </div>
        
            <div class="col-md-6 border-end">
              <div class="col-md-12 present_address_section">
                <h6 class="bg-warning p-1">Present Address</h6>
              </div>

              <div class="col-md-12">
                <label>State</label><br />
                <select class="form-select" name="state" value="{{old('state')}}">
                  <option value=''>Select State</option>
                  <option value="MH">Maharashtra</option>
                  <option value="AP">Andhra Pradesh</option>
                  <option value="AR">Arunachal Pradesh</option>
                  <option value="AS">Assam</option>
                  <option value="BR">Bihar</option>
                  <option value="CT">Chhattisgarh</option>
                  <option value="GA">Gujarat</option>
                  <option value="HR">Haryana</option>
                  <option value="HP">Himachal Pradesh</option>
                  <option value="JK">Jammu and Kashmir</option>
                </select>
              </div>
        
              <div class="col-md-12">
                <label>District</label><br />
                <select class="form-select" name="district" value="{{old('district')}}">
                  <option value="">Select District</option>
                  <option value="MH">Pune</option>
                  <option value="AP">Mumbai</option>
                  <option value="AR">Satara</option>
                  <option value="AS">Nagpur</option>
                  <option value="BR">Akola</option>
                </select>
              </div>
        
              <div class="col-md-12">
                <label>City/Taluka</label><br />
                <select class="form-select" name="city" value="{{old('city')}}">
                  <option value=''>Select City/Taluka</option>
                  <option value="Pune">Pune</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Satara">Satara</option>
                  <option value="Nagpur">Nagpur</option>
                  <option value="Akola">Akola</option>
                </select>
              </div>
        
              <div class="col-md-12">
                <label>Pin Code</label>
                <input type="number" class="form-control" name="pincode" value="{{old('pincode')}}" />
        
                @error('pincode')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
        
              <div class="col-md-12">
                <label>Address</label><br />
                <textarea class="form-control" name="address" value="{{old('address')}}"></textarea>
              </div>
            </div>
        
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4 permanent_address_section">
                  <h6 class="bg-info p-1">Permanent Address</h6>
                </div>
                <div
                  class="col-md-8 permanent_address_section"
                  style="float: left"
                >
                  <input type="checkbox" name="check"  /> Same as present address
                </div>
              </div>
        
              <div class="col-md-12">
                <label>State</label><br />
                <select class="form-select" name="state_p" value="{{old('state_p')}}">
                  <option value=''>Select State</option>
                  <option value="MH">Maharashtra</option>
                  <option value="AP">Andhra Pradesh</option>
                  <option value="AR">Arunachal Pradesh</option>
                  <option value="AS">Assam</option>
                  <option value="BR">Bihar</option>
                  <option value="CT">Chhattisgarh</option>
                  <option value="GA">Gujarat</option>
                  <option value="HR">Haryana</option>
                  <option value="HP">Himachal Pradesh</option>
                  <option value="JK">Jammu and Kashmir</option>
                </select>
              </div>
        
              <div class="col-md-12">
                <label>District</label><br />
                <select class="form-select" name="district_p" value="{{old('district_p')}}">
                  <option value="">Select District</option>
                  <option value="Pune">Pune</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Satara">Satara</option>
                  <option value="Nagpur">Nagpur</option>
                  <option value="Akola">Akola</option>
                </select>
              </div>
        
              <div class="col-md-12">
                <label>City/Taluka</label><br />
                <select class="form-select" name="city_p" value="{{old('city_p')}}">
                  <option value=''>Select City/Taluka</option>
                  <option value="Pune">Pune</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Satara">Satara</option>
                  <option value="Nagpur">Nagpur</option>
                  <option value="Akola">Akola</option>
                </select>
              </div>
        
              <div class="col-md-12">
                <label>Pin Code</label>
                <input type="number" class="form-control" name="pincode_p" value="{{old('pincode_p')}}" />
        
                @error('pincode_p')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
        
              <div class="col-md-12">
                <label>Address</label><br />
                <textarea class="form-control" name="address_p" value="{{old('address_p')}}"></textarea>
              </div>
            </div>
          </div>

          <div class="col-12 text-center mt-3">
            <button type = "submit" class="btn btn-success">Save</button>
        </div>
      </form>
      <div class="col-12 text-center mt-3">
        <a href="/">
        <button class="btn btn-info">Back</button>
        </a>
    </div>
</x-layout>