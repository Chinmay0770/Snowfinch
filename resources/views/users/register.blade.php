<x-layout>
    <div class="row">
        <div class="col-6">
          <h6>
            Add User &nbsp;<span class="text-danger" style="font-size: 0.7rem"
              >(
              <span style="font-size: 0.9rem; padding-top: 5px">*</span>
              indicates madatory fields)</span
            >
          </h6>
        </div>
      </div>

      <hr />
      <form method="POST" action="/users" enctype="multipart/form-data">
        @csrf
        <x-personal />
        <hr />
        <x-address />
      

        <div class="col-12 text-center mt-3">
            <button type = "submit" class="btn btn-success">Save</button>
            <a href="/login">
            <button class="btn btn-info">Login</button>
            </a>
        </div>
    </form>
</x-layout>