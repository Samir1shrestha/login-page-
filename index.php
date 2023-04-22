<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <script src="./valitation.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <style>
        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
    </style>
</head>
<body style="background-image:url(./img/all-free-download-blue-gradient-background.jpg) ; ">
    <div style="margin-top:50px ;" class="main">
        <div style="border:1px solid black ;" class="container ">
            <div class="row">
                <div style="background-image:url(./img/Untitled-2.png) ; background-size: cover; " class="col-lg-7">
                </div>
                <div style="padding:50px ; text-align:center ; background-color: white; " class="col-lg-5">
                    <div class="pag">   
                          <h1>Login Page</h1>
                    </div>
                    <div style="margin-bottom:10px ; " class="icon">
                        <a class="facebook" href="#"><i style="border: 1px solid black; border-radius: 50%; padding: 20px; width: 60px; " class="fa-brands fa-facebook-f"></i></a>
                        <a class="twitter" href="#"><i style="border: 1px solid black; border-radius: 50%; padding: 20px;  " class="fa-brands fa-google"></i></a>
                    </div>
                    <div class="use">
                        <p>Need an account? <a href="./signup.php">Sign up</a></p>
                    </div>
                    <div style="background-color: black ;width: 100%; margin-bottom: 20px;" class="border"></div>
                    <!-- form -->
                    <form id="form" action="./test.php" method="post">
                          <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <div style="margin-bottom:10px ; " class="box">
                            <input id="name" name="uname" style="width:300px; height: 50px; border-radius:20px ; padding: 10px;" type="text" placeholder="Email address" name="fname" required>
                        </div>
                        <div style="margin-bottom:10px ; " class="password">
                            <input id="password" name="password" style="width:300px ; height: 50px; border-radius:20px ;  padding: 10px;" type="password" placeholder="Password" required>
                        </div>
                        <div style="margin-bottom:10px ; " class="forget">
                            <a href="#">Forget Your Password?</a>
                        </div>
                        <div class="check-btn">
                            <!-- <input type="submit" > -->
                            <a href="./dashbord.html"><button style="border-radius:20px ; padding: 5px; width: 90px; background-color: green; color: white; outline: none; margin-top: 10px;">Login</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>