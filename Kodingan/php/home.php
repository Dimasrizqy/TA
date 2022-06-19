<?php
    function salam($nama,$waktu){
        if ($waktu >=4 && $waktu < 12 ) {
            $jam ="Pagi";
        } else if ($waktu < 15) {
            $jam ="Siang";
        } else if ($waktu < 18) {
            $jam ="Sore";
        } else {
            $jam ="Malam";
        }
        
        return "Selamat $jam, $nama!";
    }
    $jam =date("H",time()+60*60*6);
    ?>
<!DOCTYPE html>
<html lang="english-Indonesia">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navb.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Home</title>
</head>
<body style="background: rgb(219,226,226);">
<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">Koperasi TKBM</a>
        <a class="navbar-brand"><?php echo salam("Dimas",$jam)?></a>
        
        <div class="n-right">
            <form class="form-inline">
                <a class="nav-link active"  style="color: white;">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#" style="color: white;">Menu 1</a>
                <a class="nav-link" href="#" style="color: white;">Menu 2</a>
                <a class="nav-link" href="#" style="color: white;">Menu 3</a>
                <a class="nav-link" href="#" style="color: white;">Menu 4</a>
            </form>
            <li class="nr_li dd_main">
                <img src="../asset/user.jpg" alt="profile_img">

                <div class="dd_menu" style="z-index: 6;">
                    <div class="dd_left">
                        <ul>
                            <li><i class="fas fa-user"></i></li>
                            <li><i class="fas fa-info-circle"></i></li>
                            <li><i class="fas fa-sign-out-alt"></i></li>
                        </ul>
                    </div>
                    <div class="dd_right">
                        <ul>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="contact.php">About</a></li>
                            <li><a href="login.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </div>
    </nav>    
    <!-- Navbar -->



    <script src="../js/navb.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>