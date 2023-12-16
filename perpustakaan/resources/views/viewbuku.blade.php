<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database Perpusatakaan</title>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link disabled" aria-disabled="true" style="font-weight:bold; font-size:large;color: #ffffff;">PERPUSTAKAAN KOTA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/viewbuku">Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Majalah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Info</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">Sistem Database</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="/menutambahbuku" class="btn btn-info">+ Tambah Buku</a>
            </li>
        </ul>
    </div>
</nav>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">

  @if($message = Session::get('success'))
    <div class="alert alert-info" role="alert">
      {{ $message }}
    </div>
  @endif

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Author</th>
      <th scope="col">Jumlah Halaman</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $row)
    <tr>
      <th scope="row">1</th>
      <td>{{ $row->Judul }}</td>
      <td>{{ $row->Author }}</td>
      <td>{{ $row->JumlahHalaman }}</td>
      <td>{{ $row->Penerbit }}</td>
      <td>
        <a href="/menuupdatebuku/{{ $row->id }}" class="btn btn-warning">Update</a>
        <a href="/deletebuku/{{ $row->id }}" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


    </div>

  </div>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>