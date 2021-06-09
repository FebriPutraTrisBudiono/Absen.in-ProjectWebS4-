<html>
    <head>
        <title>PROFILE</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



        </head>

<body>

<div class="container">
    <div class="form-group col-12 p-0">
        <div>
        @if(Session::has('success'))
         <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif


        </div>
    



        <form action="{{route('store')}}" method="POST">
        @csrf

            <div class="form-group">
              <div class="col-sm-12">
                     <h2 style="color: black">Edit Profile</h2>
                </div>
                  </div>

                  <hr>
                        <div class="row">
                        
                            <div class="form-group col-md-6">
                                <label>NIK</label>
                <input type="text" name="nomornik" class="form-control" id="nomornik" placeholder="Nomor Nik">
                            </div>
                            <div class="form-group col-md-6">
                               <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group col-md-6">
                                <label>No.Telp</label>
                <input type="text" name="notelp" class="form-control" id="notelp" placeholder="No.Telp">
                            </div>
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="E-mail">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Username</label>
                <input type="text" name="user" class="form-control" id="user" placeholder="Username">
                            </div>
                            <div class="form-group col-md-6">
                               <label>Password</label>
                <input type="text" name="pass" class="form-control" id="pass" placeholder="Password">
                            </div>

                            <div class="form-group col-md-6" align="center">

                            <Button class="btn btn-success" style="width: 80px;">Simpan</Button>
                    
                </div>

            </form>
            </form>
            <div>


            </div>
            

</body>