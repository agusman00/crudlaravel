<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Perusahaan</title>
  </head>
  <body>
    <h1 class="text-center">Detail Perusahaan</h1>

    <!--content-->
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
        <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">{{$data->nama}}</h3>
            </div>
            <div class="card-body">

            <div class="row align-items-start">
                <div class="col">
                 <h6>Nama Perusahaan</h6>
                </div>
                <div class="col-1">
                 <h6 class="text-center">:</h6>
                </div>
                <div class="col-6">
                 <h6>{{$data->nama}}</h6>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                 <h6>Email Perusahaan</h6>
                </div>
                <div class="col-1">
                 <h6 class="text-center">:</h6>
                </div>
                <div class="col-6">
                 <h6>{{$data->email}}</h6>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                 <h6>Logo Perusahaan</h6>
                </div>
                <div class="col-1">
                 <h6 class="text-center">:</h6>
                </div>
                <div class="col-6">
                 <img class="border border-3 border-secondary rounded" src="{{asset('logo/'.$data->foto)}}" alt="" style="width: 100px">
                </div>
            </div>

            </div>
        </div>
            <br>
            <a href="/perusahaan/index" type="button" class="btn btn-primary btn-sm">Kembali</a>

        </div>
        </div>
        </div>
        </div>
    </div>

    <!--endcontent-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
