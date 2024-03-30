<div class="col-6 text-end">
    <!-- Button trigger modal -->
    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#exampleModal"
    >
      Search User
    </button>

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content text-white bg-black">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Search User
            </h1>
            <button
              type="button"
              class="btn-close bg-white"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-start">
            <form action="/search" method="post">
              @csrf

              <label>Search By</label>
              <select class="form-select" name="filter" id="">
                <option value="first_name">Name</option>
                <option value="contact">Contact No.</option>
              </select>
              <input type="text" class="form-control" name="search" id="" />
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">
                Search
              </button>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>