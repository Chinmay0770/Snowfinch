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
          <option value="MH">Pune</option>
          <option value="AP">Mumbai</option>
          <option value="AR">Satara</option>
          <option value="AS">Nagpur</option>
          <option value="BR">Akola</option>
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