
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        function hero() {
            var a = document.getElementById("password").value;
            var b = document.getElementById("cpassword").value;


            if (a.length < 5) {
                document.getElementById("message").innerHTML = "**Weak Password must write capital letters, small letters and numbers and special character";
                return false;
            } else {
                document.getElementById("messages").innerHTML = "";
            }

            if (a.search(/[0-9]/) == -1) {
                document.getElementById("message").innerHTML = "** Enter any (0-9) number  ";
                return false;
            } else {
                document.getElementById("messages").innerHTML = "";
            }


            if (a.search(/[a-z]/) == -1) {
                document.getElementById("message").innerHTML = "** small letter missing";
                return false;
            } else {
                document.getElementById("messages").innerHTML = "";
            }

            if (a.search(/[A-Z]/) == -1) {
                document.getElementById("message").innerHTML = "** CAPITAL LETTER MISSING";
                return false;
            } else {
                document.getElementById("messages").innerHTML = "";
            }

            if (a.search(/[!\@\#\$\%\^\&\*\"]/) == -1) {
                document.getElementById("message").innerHTML = "** Special character missing";
                return false;
            } else {
                document.getElementById("messages").innerHTML = "";
            }

            if (a != b) {
                document.getElementById("messages").innerHTML = "** Password doesn't match";
                return false;
            } else {
                document.getElementById("messages").innerHTML = "";
            }
        }
    </script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        var recaptcha_response = '';

        function submitUserForm() {
            if (recaptcha_response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">check the recaptcha box.</span>';
                return false;
            }
            return true;
        }

        function verifyCaptcha(token) {
            recaptcha_response = token;
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>

    

</head>

<body>


    <div class="wrapper ">

        <h1>Please provide your details</h1>


        <!-- Status message -->
        <?php if (!empty($statusMsg)) { ?>
            <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
        <?php } ?>

        <div class="form">
            <form action="database.php" method="post" autocomplete="off" onsubmit="return hero(), submitUserForm() ">
                <div class="input-box ">
                    
                    <input class="fn" type="text" name="fname" value="<?php echo !empty($postData['fname']) ? $postData['fname'] : ''; ?>" placeholder="First name" required>

                    <input class="mn" type="text" name="mname" value="<?php echo !empty($postData['fname']) ? $postData['fname'] : ''; ?>" placeholder="Middle name">
 
                    <input class="ln" type="text" name="lname" value="<?php echo !empty($postData['lname']) ? $postData['lname'] : ''; ?>" placeholder="Last name" required>
                </div>
                <div class="input-box">
                    <input type="email" name="email" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <input style="position:absolute ; height:48px; width: 562px;  " type="password" id="password" name="password" value="<?php echo !empty($postData['password']) ? $postData['password'] : ''; ?>" placeholder="Enter your password" required>
                    <i style="position:relative ; margin:15px 0px 0px 534px;" class="fa-solid fa-eye" id="eye" aria-hidden="true"></i>
                    <span id="message" style="color:red; position:relative; top:15px"></span>
                </div>
                <div class="input-box">  
                    <input style="position:absolute ; height:48px; width: 562px;  " type="password" id="cpassword" name="cpassword" value="<?php echo !empty($postData['cpassword']) ? $postData['cpassword'] : ''; ?>" placeholder="conform password" required>
                    <i style="position:relative ; margin: 15px 0px 0px 534px;" class="fa-solid fa-eye" id="eye1" aria-hidden="true"></i>
                    <div class="message">
                        <span id="messages" style="color:red; position:relative; top:15px"></span>
                    </div>
                </div>
                <div class="input-box">                  
                    <input type="number" name="number" value="<?php echo !empty($postData['number']) ? $postData['number'] : ''; ?>" placeholder="Contact Number" required>
                </div>
                <div class="g-recaptcha" data-sitekey="6LdUVbMgAAAAADN2ZlmQHd17by5tFYaUS2MsdMVQ" data-callback="verifyCaptcha"></div>
                <div id="g-recaptcha-error"></div>

                <input style="padding:10px ; background-color:green; color:aliceblue; margin-top:10px;" id="submit" type="submit" name="submit" value="SUBMIT">
                <!-- <button>submit</button> -->
            </form>
        </div>
    </div>

    <script>
        document.getElementById("eye").addEventListener("click", function() {
            if (document.getElementById("password").type == "password") {
                document.getElementById("password").type = "text";

            } else {
                document.getElementById("password").type = "password";

            }


        });

        document.getElementById("eye1").addEventListener("click", function() {
            if (document.getElementById("cpassword").type == "password") {
                document.getElementById("cpassword").type = "text";

            } else {
                document.getElementById("cpassword").type = "password";

            }


        });
    </script>

    




</body>

</html>