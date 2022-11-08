<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Update Data</h1>
    <div class="col-8 ">
        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select name="jk" class="form-select" aria-label="Default select example" disabled >
                <option selected>{{ $data->jk }}</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
          <label  class="form-label">Umur</label>
          <input name="umur" type="text" class="form-control" id="password" placeholder="Masukkan Umur" value="{{ $data->umur}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">NO HP</label>
            <input name="no_hp" type="text" class="form-control" id="no" placeholder="Masukkan NO HP" value="{{ $data->no_hp }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>