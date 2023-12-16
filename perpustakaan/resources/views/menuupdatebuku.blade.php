<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">PERPUSTAKAAN</h1>

    <h1 class="text-center mb-4">Update Data Buku</h1>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
          <div class="card-body">
          <form action="/updatedatabuku/{{ $data->id }}" method="post" enctype="multipart/form-data">
              @csrf
              <!-- Your form fields go here -->
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Judul</label>
                  <input type="text" name="Judul" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="{{ $data->Judul }}">
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1"  class="form-label">Author</label>
                  <input type="text" name="Author" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="{{ $data->Author }}">
                  </select>
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jumlah Halaman</label>
                  <input type="number" name="JumlahHalaman" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="{{ $data->JumlahHalaman }}">
              </div>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                  <input type="text" name="Penerbit" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="{{ $data->Penerbit }}">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          </div>
        </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>