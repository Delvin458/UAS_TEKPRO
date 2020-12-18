<!DOCTYPE html>
<html>
<head>
    <title>LOOKIMI</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css?v=0.07"/>
</head>
<body>

    <div class="login">
        <header class="container-fluid">
            <div class="header_title">
                <center>LOOKIMI</center>
            </div>
        </header>
        <!-- cek pesan notifikasi -->
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div class='warning'>"."Login gagal! username dan password salah!"."</div>";
            }else if($_GET['pesan'] == "logout"){
                echo "<div class='warning'>"."Anda telah berhasil logout"."</div>";
            }else if($_GET['pesan'] == "belum_login"){
                echo "<div class='warning'>"."Anda harus login untuk mengakses halaman admin"."</div>";
            }
        }
        ?>
        <form action="actionreg.php" method="post" onSubmit="return validasi()">
            <section class="container-fluid">
                <div class="alert_blue">
                    <center>Please Register to access to this website</center>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>
                            Nama
                        </label>
                    </div>
                    <div class="form-group col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <div class="form-line">
                                <input name="admin_name" type="text" placeholder="Input Name" class="form-control" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>
                            Email
                        </label>
                    </div>
                    <div class="form-group col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <div class="form-line">
                                <input name="adm_email" type="email" placeholder="Input Email" class="form-control" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>
                            Username
                        </label>
                    </div>
                    <div class="form-group col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user-circle-o"></i>
                            </span>
                            <div class="form-line">
                                <input name="username" type="text" placeholder="Input Username" class="form-control" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>
                            Password
                        </label>
                    </div>
                    <div class="form-group col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-key"></i>
                            </span>
                            <div class="form-line">
                                <input name="password" type="password" placeholder="Input Password" class="form-control" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="form-group col-md-4">
                        <label>
                            Confirm Password
                        </label>
                    </div>
                    <div class="form-group col-md-8">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-key"></i>
                            </span>
                            <div class="form-line">
                                <input name="cpassword" type="password" placeholder="Input Password" class="form-control" required/>
                            </div>
                        </div>
                    </div>
                </div> -->

            </section>
            <div class="container-fluid">
                <div class="loginbut">
                    <input type="submit" name="upload" class="btn loginstyle" value="Register"/>
                    <p>Already have an account? <a href="login.php">Login here</a>.</p> 
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>

