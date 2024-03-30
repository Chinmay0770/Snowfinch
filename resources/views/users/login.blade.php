<x-layout>
    <div class="row justify-content-center">
        <div class="col-md-5 bg-dark text-white p-3">
          <h6>Login Form</h6>
          <hr />
          <form method="POST" action="/users/authenticate">
            @csrf
          <input
            type="email"
            class="form-control"
            placeholder="Enter Email"
            name="email" value="{{old('email')}}"
          />
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror

          <input
            type="password"
            class="form-control"
            placeholder="Enter Password"name="password"
            value="{{old('password')}}" />
  
          @error('password')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
          
          <button type="submit" class="btn btn-success">Login</button>
        </form>
          <a href="/register">
            <button class="btn btn-info my-3">Sign up</button>
          </a>
        </div>
      </div>
</x-layout>