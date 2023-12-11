<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Bank</title>
    <link rel="shortcut icon" href="/undipa.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/hasil-bank">Home</a>
          <li class="nav-item dropdown navbar-nav me-5">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                  Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
        </div>
      </div>
    </div>
  </nav>

    <div class="container mt-5">

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-12" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        <h1>Data Bank</h1>
        <a class="btn btn-success mb-3" href="/input-bank">Tambah Data</a>
        @if($bank->count())
                <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Singkatan</th>
                    <th scope="col">Nama Bank</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($bank as $data)
                    <tr>
                    <td scope="row">{{ $loop->iteration }}        
                    </td>
                    <td>{{ $data->singkatan }}</td>
                    <td>{{ $data->nama_bank }}</td>
                    <td>
                        <a href="/edit-bank/{{ $data->id }}" class="btn btn-warning">Edit</a>
                        <form action="/delete-bank/{{ $data->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">Hapus</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
        @else 
            <p>No Data Found.</p>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>