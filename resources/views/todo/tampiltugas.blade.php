<x-app>
@include('sweetalert::alert')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
                <div class="card-body bg-dark text-white">

                    <form action="/updatetugas/{{ $data->id }}" method="post">
                        @csrf

                  <div class="mb-3">
                    <label for="inputText" class="form-label text-white">Edit Your List</label>
                    <input type="Text" name="tugas" id="inputText" class="form-control" value="{{ $data->tugas }}">
                  </div>

                    <a href="/list" class="btn btn-secondary">Close</a>
                    <button type="submit" class="btn btn-primary">Update</button>

                   </form>

                </div>
            </div>
          </div>
        </div>
    </div>



 </x-app>

