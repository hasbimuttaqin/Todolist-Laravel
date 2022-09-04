<x-app>
@include('sweetalert::alert')


    <div class="container mt-5">
        <div class="row">
            <form class="d-flex mb-5" role="search" action="/list" method="GET">
                <input class="form-control me-2" type="search" name="search" placeholder="Search your list" aria-label="Search">
                <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
        </div>
    </div>

    <div class="container">
      <a href="/tambahtugas" type="button" class="btn btn-primary mb-5">Add New List</a>
    </div>

    <div class="container ">
        <div class="row">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Your List</th>
                        <th scope="col">Created</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @php
                            $no = 1
                        @endphp

                      @foreach ($data as $item)

                      <tr>
                        <th scope="row"> {{ $no++ }} </th>
                        <td> {{ $item->tugas}} </td>
                        <td> {{ $item->created_at->diffforHumans() }} </td>
                        <td>
                            <a href="/tampiltugas/{{ $item->id }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="/delete/{{ $item->id }}" class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin Ingin Hapus ?')"><i class="fa-solid fa-trash"></i></a>
                        </td>
                      </tr>

                      @endforeach

                    </tbody>
                  </table>

        </div>
    </div>

</x-app>
