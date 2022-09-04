 <x-app>
@include('sweetalert::alert')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
            <div class="card">
                <div class="card-body bg-dark text-white">
                    <form action="/inserttugas" method="POST">
                        @csrf

                  <div class="mb-3">
                    <label for="inputText" class="form-label text-white">Add Your List</label>
                    <input type="Text" name="tugas" id="inputText" class="form-control">
                  </div>

                    <a href="/list" class="btn btn-secondary">Close</a>
                    <button type="submit" class="btn btn-primary">Add</button>

                   </form>
                </div>
            </div>
          </div>
        </div>
    </div>



 </x-app>

