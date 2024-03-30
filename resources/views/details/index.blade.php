<x-layout>
    <div class="row m-3">
        <div class="col-6 ">
          <h6>
            User Details
          </h6>
        </div>
        <div class="col-3">
            <x-search />
        </div>
        <div class="col-3">
            <form method="POST" action="/logout" class="inline">
                @csrf
                <button type="submit" class="btn btn-danger"> Logout
                </button>
              </form>
        </div>
    </div>

    <hr>
    <div class="row">

        @foreach ($users as $user)
        <div class="col-md-6">
            <table>
                <tbody>
                    <tr>
                        <th>First Name:</th>
                        <td>{{ $user->first_name }}</td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td>{{ $user->last_name }}</td>
                    </tr>
                    <tr>
                        <th>Contact:</th>
                        <td>{{ $user->contact }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Education:</th>
                        <td>
                            {{ $user->education }}
                        </td>
                    </tr>
                    <tr>
                        <th>Role:</th>
                        <td>
                            {{ $user->user_role }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-6 text-center my-3">
                <a href="/edit/{{$user->id}}" class="btn btn-success">Edit</a>
                <a href="/delete/{{$user->id}}">
                  <button class="btn btn-danger">Delete
                  </button>
                </a>
              </div>
        </div>
        @endforeach
        
        </div>
    </div>
</x-layout>