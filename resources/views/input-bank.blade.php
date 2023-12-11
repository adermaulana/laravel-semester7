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
        <h2>Tambah Data Bank</h2>
        <a class="btn btn-primary mb-2" href="/hasil-bank">Kembali</a>
        <form action="/input-bank" method="post">
            @csrf
            <div class="mb-3 col-4">
                <label for="exampleInputEmail1" class="form-label">Singkatan</label>
                <input value="{{ old('singkatan') }}" type="text" name="singkatan" class=" @error('singkatan') is-invalid @enderror" id="exampleInputEmail1">
                @error('singkatan')
                <div  class="invalid-feedback"> 
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 col-4">
                <label for="exampleInputPassword1" class="form-label">Nama Bank</label>
                <input value="{{ old('nama_bank') }}" type="text" name="nama_bank" class="@error('nama_bank') is-invalid @enderror" id="exampleInputPassword1">
                @error('nama_bank')
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