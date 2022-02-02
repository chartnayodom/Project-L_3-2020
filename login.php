<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="
  background-repeat: no-repeat;
  background-size: cover;
  background-image: -moz-linear-gradient(to left,  #87CEFA, #CCFFE5);
  background-image: -ms-linear-gradient(to left, #87CEFA, #CCFFE5);
  background-image: -o-linear-gradient(to left,  #87CEFA, #CCFFE5);
  background-image: -webkit-linear-gradient(to left,  #87CEFA, #CCFFE5);
  background-image: linear-gradient(to left,  #87CEFA, #CCFFE5);
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  background-position: center center;
  padding: 200px 0;">

<div class="main">

<section class="signup">
   
    <div class="container">
        <div class="signup-content">
            <form method="POST" action="checklogin.php" id="login" class="form-horizontal">   
            
                <h2 class="form-title">login</h2>
                <div class="form-group">
                    <label class="label">Username</label>
                    <input type="text" class="form-input" name="username" id="username" placeholder="enter user"/>
                </div>
               
                <div class="form-group">
                    <label class="label">Password</label>
                    <input type="password" class="form-input" name="password" id="password" placeholder="enter password"/>
                    
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="LOGIN"/>
                </div>
            </form>
            <div class="form-group">
          <div class="container-login100-form-btn m-t-17">
           
               <label>
                ยังไม่ได้สมัครสมาชิก?
                <a href="registerform.php">สมัครสมาชิก</a>
               </label>
               <label>
                <a href="forgotpassword.php">ลืมรหัสผ่าน</a>
                </label>
          </div>
        </div>
        </div>
    </div>
</section>

</div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
   
</body>
</html>