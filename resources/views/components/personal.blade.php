<div class="row">

        <div class="col-md-2">
          <label><span class="text-danger">*</span>First Name</label>
          <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}" required/>

          @error('first_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="col-md-2">
          <label><span class="text-danger">*</span>Last Name</label>
          <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}" required/>

          @error('last_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="col-md-2">
          <label><span class="text-danger">*</span>Contact</label>
          <input type="number" class="form-control" name="contact" value="{{old('contact')}}" required/>

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
          <input type="email" class="form-control" name="email" value="{{old('email')}}" required/>

          @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="col-md-4">
          <label><span class="text-danger">*</span>Education</label><br />
          <select class="form-select" name="education" value="{{old('education')}}" required>
            <option>Engineering</option>
            <option>Finance</option>
          </select>

          @error('education')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="col-md-4">
          <label><span class="text-danger">*</span>Aadhar No</label>
          <input type="number" class="form-control" name="aadhar_no" value="{{old('aadhar_no')}}" required />

          @error('aadhar_no')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="col-md-4">
          <label>PAN No.</label>
          <input type="text" class="form-control" name="pan_no" value="{{old('pan_no')}}" />

          @error('pan_no')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="col-md-4">
          <label>Use Avatar</label>
          <input type="file" class="form-control" name="avatar" />

          @error('avatar')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="col-md-4">
          <label><span class="text-danger">*</span>User Roles</label><br />
          <select class="form-select" name="user_role" value="{{old('user_role')}}" required>
            <option>Developer</option>
            <option>Admin</option>
          </select>

          @error('user_role')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="col-md-4">
          <label><span class="text-danger">*</span>User Status</label><br />
          <select class="form-select" name="user_status" value="{{old('user_status')}}" required>
            <option>Active</option>
          </select>

          @error('user_status')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
      </div>