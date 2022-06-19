<!DOCTYPE html>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "select * from user where id_user='1'");
$d = mysqli_fetch_array($data);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navb.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        * {
            margin: 0;
            padding: 0;
        }

        .container-p-satu {
            width: 1100px;
            height: 500px;
            /* background-color: lightcoral; */
            display: flex;
            flex-direction: row;
            margin: 10px auto;
            /* padding: 20px;
            box-sizing: content-box; */
        }

        .container-p-satu .kiri {
            display: flex;
            flex: 1;
            /* background-color: lightskyblue; */
            justify-content: center;
        }

        .container-p-satu .kiri .card-body {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .container-p-satu .kiri .card-body .img-resize {
            height: 150px;
            width: 150px;
            object-fit: cover;
            clip-path: circle();
        }

        .container-p-satu .kanan {
            display: flex;
            flex: 3;
            /* background-color: magenta; */
            /* justify-content: center; */
            align-items: flex-start;
            flex-direction: column;
            width: 90%;
        }

        .container-p-satu .kanan .nav.nav-tabs {
            /* background-color: lawngreen; */
            width: 60%;
            display: flex;
            justify-content: space-between;
        }

        .container-p-satu .kanan .tab-content {
            width: 100%;
            height: 100%;
            background-color: #e7f4ff;
            display: flex;
        }

        .container-p-satu .kanan .tab-content .tab-pane .card-body form .bb {
            display: flex;
            justify-content: flex-end;
        }

        .container-p-satu .kanan .tab-content .tab-pane .rev {
            width: 777px;
            /* height: 10%; */
            /* background-color: lawngreen; */
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }

        .container-p-satu .kanan .card-body .img-resize {
            height: 80px;
            width: 80px;
            object-fit: cover;
            clip-path: circle();
        }

        .container-p-satu .kanan .card-body .megi {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container-p-satu .kanan .card-body.rev {
            display: flex;
            justify-content: space-around;
        }

        .container-p-satu .kanan .card-body.dok .img-size {
            height: 150px;
            width: 150px;
            object-fit: cover;
            /* clip-path: circle(); */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">Koperasi TKBM</a>
        <!-- <a class="navbar-brand"><?php //echo salam("Dimas", $jam)
                                        ?></a> -->

        <div class="n-right">
            <form class="form-inline">
                <a class="nav-link active" href="home3.php" style="color: white;">Home <span class="sr-only">(current)</span></a>
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

    <div class="container-p-satu w-80 p-2">
        <div class="kiri">
            <div class="card " style="width: 16rem;">
                <div class="card-body">
                    <img src="../asset/user.jpg" class="img-responsive img-resize" alt="...">
                    <h5 class="card-title"><?php echo $d['name']  ?></h5>
                    <!-- <p class="card-text"><?php echo $d['keahlian'] ?></p> -->
                    <!-- <div class="butt">
                        <a type="button" href="book.php" class="btn btn-primary">Book Now</a>
                        <button type="button" class="btn btn-outline-primary">follow</button>
                    </div> -->
                </div>
                <ul class="list-group  list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Request Accepted
                        <span class="badge badge-primary badge-pill">100</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Resolved
                        <span class="badge badge-success badge-pill">100</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Rating
                        <span class="badge badge-warning badge-pill"><?php echo $d['rating']  ?>/5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Work From <?php echo $d['year']  ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="kanan ml-5">
            <!-- <div class="k-kanan"> -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><b> Account Preview</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><b> Reviews</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#references" role="tab" data-toggle="tab"><b> Documentations</b></a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="profile">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="full">Full Name</label><br>
                                    <label for="full"><?php echo $d['name']  ?></label>
                                    <!-- <input type="text" class="form-control" id="full" value=""> -->
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label for="role">Last Name</label>
                                    <input type="text" class="form-control" id="role" value="Dhiaulhaq">
                                </div> -->
                                <div class="form-group col-md-6">
                                    <p><label for="pnumber">Phone Number</label> </p>
                                    <label for="pnumber"><?php echo $d['phone']  ?></label>
                                    <!-- <input type="text" class="form-control" id="pnumber" value=""> -->
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email Address</label>
                                    <p></p>
                                    <label for="email"><?php echo $d['email'] ?></label>
                                    <!-- <input type="email" class="form-control" id="email" value="<?php echo $d['email'] ?>"> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <p></p>
                                <label for="inputAddress"><?php echo $d['address']  ?></label>
                                <!-- <textarea name="" class="form-control" id="inputAddress" cols="30" rows="4"></textarea> -->
                            </div>
                            <div class="bb">
                                <button type="submit" class="btn btn-primary" style="width: 20%;">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane " id="buzz">
                    <div class="card-body rev">

                        <?php for ($i = 0; $i < 10; $i++) : ?>

                            <div class="card revi" style="max-width: 45%; margin:7px 0">
                                <div class="row no-gutters">
                                    <div class="col-md-4 megi">
                                        <img src="../asset/user2.jpg" class="card-img img-resize" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div style="display: flex; justify-content:space-between">
                                                <p class="card-title justify-content-between"><b> Kang review</b></p>
                                                <p><span class="badge badge-pill badge-warning ">4.7/5</span></p>
                                            </div>
                                            <p class="card-text" style="margin-top: -5px;"><small class="text-muted"><i>"Recommended teknisi, mantap banget dah luv luv"</i></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endfor ?>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane " id="references">
                    <div class="card-body rev dok">
                        <?php for ($i = 0; $i < 8; $i++) : ?>

                            <div class="card revi" style="max-width: 25%; margin:7px 0">
                                <img src="../asset/dok.jpg" class=" img-size" style="filter:grayscale()" alt="">
                            </div>

                        <?php endfor ?>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>

    <script src="../js/navb.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>