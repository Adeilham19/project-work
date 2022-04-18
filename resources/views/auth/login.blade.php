<!doctype html>
<html lang="en">
  <head>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="dists/css/login.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
    <link href="img/title-logo.png" rel="shortcut icon">
  </head>
  <body>
    <!--Form Login-->
    <section>
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="img/logo1.png" style="width: 175px; margin-top: 36px; margin-left: -92px">
                        <img src="img/ilustration1.png" style="width: 700px; margin-top: 45px; margin-left: -117px;">
                    </div>
                    <div class="col-lg-8">
                        <div class="h1">Selamat Datang</div>
                        <p>Masuk ke akunmu untuk mulai membaca!</p>
                        <form>
                            <div class="input-group mb-3">
                                <input type="username" class="form-control" placeholder="Username" id="username" aria-describedby="username">
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" id="password">
                            </div>
                            <a href="{{ url('dashboard') }} "><button type="button" class="btn login-button" style="background-color: #1F3986; color: white;">LOGIN</button></a>
                            <div class="admin-href">
                                <p>Butuh bantuan?<a href="https://wa.me/6283819422035?text= Tuliskan kendala anda" target="_blank" style="color: #1F3986;">Hubungi Admin disini<a><p>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>