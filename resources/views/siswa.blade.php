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
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">alamat</th>
                <th scope="col">jenis kelamin</th>
                <th scope="col">agama</th>
                <th scope="col">asal sekolah</th>
                <th scope="col">aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
                <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
                    <td scope="col">{{ $item->name}}</td>
                    <td scope="col">{{ $item->address }}</td>
                    <td scope="col">{{ $item->gender }}</td>
                    <td scope="col">{{ $item->religion }}</td>
                    <td scope="col">{{ $item->school }}</td>
                    <td scope="col">
                        <a href="{{ route('edit', ['student'=>$item->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm mb-2 mb-lg-0">
                            Edit
                            </button>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-id="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#confirmationModal">delete</button>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

          <div class="align-items-baseline d-flex justify-content-between">
            <p>Jumlah siwa = {{ $student->count() }}</p>
            <a href="{{ route('Student.create') }}">
                <button type="button" class="btn btn-secondary">Tambah data siswa</button>
            </a>
          </div>

        <!-- Modal -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah kamu yakin akan menghapus data siswa ini?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" id="confirm-delete-student">Ya, Saya Yakin</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/index.js') }}"></script>


</body>

</html>
