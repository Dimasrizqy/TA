<?php
    function salam($nama,$waktu){
        if ($waktu >=4 && $waktu < 12 ) {
            $jam ="Pagi";
        } else if ($waktu >12 && $waktu < 15) {
            $jam ="Siang";
        } else if ($waktu >15 && $waktu < 18) {
            $jam ="Sore";
        } else {
            $jam ="Malam";
        }
        return "Selamat $jam, $nama!";
    }
    $jam =date("H",time()+60*60*6);
    $jam1 =date("H:i:s",time()+60*60*6);
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
<body>
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

    <br> <br>
    <div class="border">
    <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav justify-content-center">
                        <li class="nav-item ">
                            <b id="time" class="nav-link text-dark" ></b> <!-- Menampilkan Jam  -->
                        </li>
                    </ul> 
                </div> <!-- tag col -->
            </div><!-- tag row -->
            <div class="row">
                <div class="col">
                        <ul class="nav bg-dark justify-content-center">
                            <li class="nav-item ">
                            <a  class="nav-link text-white" ><b>Daftar Order</b></a>
                            </li>
                        </ul>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama Depan</th>
                                <th scope="col">Nama Belakang</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td >Dimas Rizqy</td>
                                <td>Pangestu</td>
                                <td>Tersedia</td>
                                </tr>
                            </tbody>
                        </table><!-- tag tabel order -->
                </div><!-- tag col -->
        
                <div class="col">
                    <ul class="nav bg-dark justify-content-center">
                    <li class="nav-item ">
                        <a  class="nav-link text-white" ><b>Daftar Karyawan</b></a>
                    </li>
                    </ul>
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama Depan</th>
                        <th scope="col">Nama Belakang</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td >Dimas Rizqy</td>
                        <td>Pangestu</td>
                        <td>Tersedia</td>
                        </tr>
                        <tr class="table-danger">
                        <th scope="row">2</th>
                        <td>Tsamara Arifah</td>
                        <td>Prawati</td>
                        <td>Order Batal</td>
                        </tr>
                        <tr class="table-warning">
                        <th scope="row">3</th>
                        <td>Valdy Rahadian</td>
                        <td>Fakhrizal</td>
                        <td>Order Masuk</td>
                        </tr>
                        <tr class="table-success">
                        <th scope="row">4</th>
                        <td>Randy</td>
                        <td>Fahreza</td>
                        <td>Pekerjaan Selesai</td>
                        </tr>
                        <tr class="table-primary">
                        <th scope="row">5</th>
                        <td>Safinaty Yandy</td>
                        <td>Putri</td>
                        <td>Sedang Bekerja</td>
                        </tr>
                    </tbody>
                </table> <!-- tag tabel karyawan -->
                </div><!-- tag penutup col -->
        
            </div><!-- tag row -->
            <div class="row">
                <div class="col">
                    <ul class="nav bg-dark justify-content-center">
                    <li class="nav-item ">
                        <a  class="nav-link text-white" ><b>Data</b></a>
                    </li>
                    </ul>
                </div>
            </div><!-- tag row -->
    </div><!-- tag container -->
    </div><!-- tag border -->  




    


    <script type="text/javascript">
		function showTime(){
			var today = new Date();
			var curr_hour = today.getHours();
			var curr_minute = today.getMinutes();
			curr_hour = checkTime(curr_hour);
			curr_minute = checkTime(curr_minute);
			document.getElementById('time').innerHTML= curr_hour+":"+curr_minute+" WIB";
		}
		function checkTime(i){
			if (i<10) {
				i = "0"+i;
			}
			return i;
		}
		setInterval(showTime,500);
	</script>

    <script src="../js/navb.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>