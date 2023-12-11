<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="/undipa.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<div class="container mt-5">
    <h1>Form Pencarian</h1>
    <form method="post" action="/prosesform">
        @csrf
        <div class="col-2">
            <input class="form-control @error('nim') is-invalid @enderror" name="nim" type="text">
            @error('nim')
                <div  class="invalid-feedback"> 
                    {{ $message }}
                </div>
            @enderror
            <button class="btn btn-success mt-2" type="submit">Cari</button>
        </div>
    </form>
</div>

</body>
</html>