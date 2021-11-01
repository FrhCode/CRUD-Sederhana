<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Siakad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('siswa') }}">siswa</a>
                    </li>
                    {{-- <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <form method="POST" action="{{ route('Student.store') }}">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" placeholder="Isikan nama disini" name="name" >
            </div>
            <div class="mb-3">
                <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="asalSekolah" placeholder="Isikan Asal Sekolah" name="school" >
              </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" placeholder="Isikan Alamat disini" style="height: 100px" name="address"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="d-block mb-1">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="pria"

                    >
                    <label class="form-check-label" for="inlineRadio1">Pria</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="wanita"

                    >
                    <label class="form-check-label" for="inlineRadio2">Wanita</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="d-block mb-1">Agama</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="religion" id="inlineRadio3" value="islam"

                    >
                    <label class="form-check-label" for="inlineRadio3">Islam</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="religion" id="inlineRadio4" value="kristen"

                    >
                    <label class="form-check-label" for="inlineRadio4">Kristen</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>
