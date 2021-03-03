<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/login.css">
    <title>Virtus Web</title>

</head>

<body>
    <div class="container-fluid">
        <div class="head-zaam">
            <div class="row">
                <div class="col-6">
                    <div class="gambarku">
                        <img src="/img/satpam.png" alt="satpam" style="position: relative; ">
                    </div>
                </div>
                <div class="col-6">
                    <div class="jam-digital">
                        <div class="kotak">
                            <p id="hari"></p>
                            <span class="ket">DAYS</span>
                        </div>
                        <div class="kotak kecil">
                            <p>:</p>
                        </div>
                        <div class="kotak">
                            <p id="jam"></p>
                            <span class="ket">HOURS</span>
                        </div>
                        <div class="kotak kecil">
                            <p>:</p>
                        </div>
                        <div class="kotak">
                            <p id="menit"></p>
                            <span class="ket">MINUTES</span>
                        </div>
                        <div class="kotak kecil">
                            <p>:</p>
                        </div>
                        <div class="kotak">
                            <p id="detik"></p>
                            <span class="ket">SECONDS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="background"></div>
    </div>


    <div class="container mycontainer">
        <div class="mylogin">
            <div class="card">
                <div class="card-body">
                    <header class="myHed text-center">
                        <h2>Welcome</h2>
                        <h3>Please Sign In</h3>
                    </header>
                    <form action="/login/auth" method="post" class="main-form text-center">
                        <div class="form-group my-0 form_login">
                            <label class="my-0">
                                <i class="fas fa-user"></i>
                                <input type="text" name="NIK" class="myInput" placeholder="NIK">
                            </label>
                        </div>
                        <div class="form-group my-0 form_login">
                            <label class="my-0">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" class="myInput" placeholder="Password">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <button type="submit" class="button btn  btn-block">Login</a>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container_footer">
        <div class="row footer_row">
            <div class="col-6">
                <div class="kontak_login">
                    <ul>
                        <li class="logo">
                            <i class="fab ico fa-chrome"></i>
                            <a href="http://virtusway.co.id">virtusway.co.id</a>
                        </li>
                        <li class="logo">
                            <i class="fab ico fa-instagram"></i>
                            <a href="#">firtusway_fs</a>
                        </li>
                        <li class="logo">
                            <i class="fas ico fa-phone-square-alt"></i>
                            <a href="#">(021) 27939505</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="mylogo">
                    <img src="/img/logo-virtus.png" alt="" width="250px" class="ml-5">
                </div>
            </div>

        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</body>

</html>