<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="/undipa.png" type="image/x-icon">
    <title>Form Input Data</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data Mahasiswa</h2>
        <a class="btn btn-primary mb-2" href="/">Kembali</a>
        <form action="/input" method="post">
            @csrf
            <div class="mb-3 col-4">
                <label for="exampleInputEmail1" class="form-label">Nim</label>
                <input value="{{ old('nim') }}" type="number" name="nim" class="form-control @error('nim') is-invalid @enderror" id="exampleInputEmail1">
                @error('nim')
                <div  class="invalid-feedback"> 
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 col-4">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input value="{{ old('nama') }}" type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleInputPassword1">
                @error('nama')
                <div  class="invalid-feedback"> 
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 col-4">
                <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                <input value="{{ old('jurusan') }}" type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" id="exampleInputPassword1">
                @error('jurusan')
                <div  class="invalid-feedback"> 
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success px-3">Kirim</button>
        </form>
    </div>
</body>
</html>