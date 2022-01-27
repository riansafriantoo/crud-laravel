<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Data Diri</h1>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#addData">
                    Tambah data baru
                </button>
            </div>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor HP</th>
                        <th>Email Aktif</th>
                        <th>Current Salary</th>
                        <th>Foto Profil</th>
                        <th>Action</th>
                    
                    </tr>
                </thead>
                @foreach($data_diri as $data)
                <tr>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>{{$data->nomor_hp}}</td>
                        <td>{{$data->email_aktif}}</td>
                        <td>Rp. {{number_format($data->current_salary)}}</td>
                    @if($data->foto_profil)
                        <td><img src="{{asset('images/'.$data->foto_profil)}}" class="img-circle" width="50" height="50" alt="Avatar"></td>
                    @else
                        <td><img src="images/default.jpg" class="img-circle" width="50" height="50" alt="Avatar"></td>
                    @endif
                        <td>
                            <a href="/data_diri/{{$data->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/data_diri/{{$data->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Apakah yakin data ingin dihapus ?')">Delete</a>
                        </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/data_diri/create" method="POST"  enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" name="email_aktif" id="email_aktif" placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nomor HP</label>
                <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="Masukkan Nomor HP">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Current Salary</label>
                <input type="text" class="form-control" name="current_salary" id="current_salary" placeholder="Masukkan Current Salary">
            </div>
            <div class="form-group">
                <label for="foto_profil">Foto Profil</label>
                <div class="custom-file">
                    <span><input type="file" name="foto_profil" id="foto_profil" class="float-right"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>