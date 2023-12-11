<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="/undipa.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Data {{ $nim }}</h1>
        <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nim</th>
          <th scope="col">Nama</th>
          <th scope="col">Jurusan</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($datamahasiswa as $mahasiswa)
        <tr>
          <td scope="row">{{ $loop->iteration }}        
          </td>
          <td>{{ $mahasiswa->nim }}</td>
          <td>{{ $mahasiswa->nama }}</td>
          <td>{{ $mahasiswa->jurusan }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</body>
</html>