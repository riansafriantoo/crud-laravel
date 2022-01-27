<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="/data_diri/{id}/update" method="POST">
                        {{csrf_field()}}
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit data</h3>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap"  value="{{$data_diri->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="">{{$data_diri->jenis_kelamin}}</option>
                                    <option value="laki-laki">Laki - Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" name="email_aktif" id="email_aktif" placeholder="Masukkan email" value="{{$data_diri->email_aktif}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nomor HP</label>
                                <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="Masukkan Nomor HP" value="{{$data_diri->nomor_hp}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Current Salary</label>
                                <input type="text" class="form-control" name="current_salary" id="current_salary" placeholder="Masukkan Current Salary" value="Rp. {{number_format($data_diri->current_salary)}}">
                            </div>
                            <div class="form-group">
                                <label for="foto_profil">Foto Profil</label>
                                <div class="custom-file">
                                    <span><input type="file" name="foto_profil" id="foto_profil" class="float-right"></span>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-warning">Update</button>
                                <a href="/data_diri" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>