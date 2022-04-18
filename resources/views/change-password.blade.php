<html>
    <head>
        <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="dists/css/change-password.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Password</title>
    <link href="img/title-logo.png" rel="shortcut icon">
        <body>
            <!--Form Ubah Password-->
    <section>
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="img/logo1.png" style="width: 175px; margin-top: 36px; margin-left: -92px;">
                        <img src="img/ilustration2.png" style="width: 590px; margin-top: 45px; margin-left: -117px;">
                    </div>
                    <div class="col-lg-8">
                        <a href="{{ url('dashboard') }} "><img src="img/cancel.png" style="width: 15px; margin-top: 25px; margin-left: 800px;"></a>
                        <div class="h1">Ubah Password</div>
                        <p>Ubah Password terbaru untuk mengamankan</p>
                        <p style="margin-left: 100px;">akun Anda!</p>
                        <form class="row g-2"> 
                            <div class="col-md-10" style="width: 60%; margin: 10px;">
                                <div class="row g-2">
                                    <div class="col-md-10 input-group">
                                        <span class="input-group-text" style="background-color: #c4c4c4; width: 61px; height: 60px;">
                                            <img src="img/padlock-4.png" width="35px;" height="35px;">
                                        </span>
                                      <input type="password" class="form-control" id="password" placeholder="Password Lama">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10" style="width: 60%; margin: 10px;">
                                <div class="row g-2">
                                    <div class="col-md-10 input-group">
                                        <span class="input-grup-text" style="background-color: #c4c4c4; width: 61px; height: 60px; ">
                                            <img src="img/padlock-4.png" width="40px" height="40px" style="margin: 10px; padding: 2px;">
                                        </span>
                                        <input type="password" class="form-control" id="new-password" placeholder="Password Baru">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10" style="width: 60%; margin: 10px;">
                                <div class="row g-2">
                                    <div class="col-md-10 input-group">
                                        <span class="input-grup-text" style="background-color: #c4c4c4; width: 61px; height: 60px; ">
                                            <img src="img/confirm1.png" width="35px" height="35px" style="margin: 13px; padding: 2px;">
                                        </span>
                              <input type="password" class="form-control" id="confirm-password" placeholder="Konfirmasi Password Baru">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="row g-2 mt-4">
                                    <div class="col-md-10">
                                        <div class="d-grid">
                                            <button type="submit" class="btn change-password" style="height: 50px">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </body>
    </head>
</html>