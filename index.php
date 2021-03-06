<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sentiment Analysis</title>
    <!-- Bootstrap core CSS-->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <img src="img/sentiment_logo.png" style="margin-left: 10%;" id="logo">
            <form>
                <div class="form-group">
                    <form id="loginForm" onsubmit="return(false);">
                        <label for="email">Email address</label>
                        <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp"
                               placeholder="Enter email">
                        <button type="submit" class="btn btn-primary btn-block" id="loginBtn" style="margin-top: 10px;">Login</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="libs/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sessionStorage.js"></script>
<script src="js/auth.js" data-backend="<?php echo getenv('BACKEND_URL');?>"></script>
</body>

</html>
