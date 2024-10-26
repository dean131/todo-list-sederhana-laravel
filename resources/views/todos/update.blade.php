<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="my-5">Halaman Update</h1>

        <div class="card">
            <div class="card-body">
                <form action="/todos/{{ $todo->id }}/update" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="inputJudul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="inputJudul" name="judul" value="{{ $todo->judul }}">
                    </div>

                    <div class="mb-3">
                        <label for="inputDesripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="inputDesripsi" name="deskripsi" value="{{ $todo->deskripsi }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>