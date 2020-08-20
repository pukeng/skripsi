<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sistem Monitoring Pengolah Air Bersih</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images\logo.png">
    <link href="css\style.css" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <center><img src="images/baristand.png" width="200"></center>
                                    <br><br>
                                    <h4 class="text-center mb-4">Silahkan Login</h4>
                                    <form  method="POST" action="login_proses.php">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control">
                                        </div>                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor\global\global.min.js"></script>
	<script src="vendor\bootstrap-select\dist\js\bootstrap-select.min.js"></script>
    <script src="js\deznav-init.js"></script>
    <script src="js\custom.min.js"></script>
</body>
</html>