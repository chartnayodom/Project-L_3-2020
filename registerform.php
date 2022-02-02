<!-------------------------------------------------------------------140663------------------------------------------------------------------------------------>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สมัครสมาชิก</title>
    
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
            <!-- <img src="images/hallo.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="สมัคร.php" class="needs-validation">
                        <h2 class="form-title">สมัครสมาชิก</h2>
                        <div class="form-group">
                            <label class="label">ชื่อผู้ใช้</label>
                            <input type="text" class="form-input" name="username" id="username" placeholder="ชื่อผู้ใช้ควรมีอย่างน้อย 8 ตัวอีกษร"/>
                            <!-- <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div> -->
                        </div>
                        <div class="form-group">
                            <label class="label">อีเมล</label>
                            <input type="email" class="form-input" name="email" id="email" placeholder="ควรใช้อีเมลที่สามารถยืนยันตัวตนได้"/>
                            <!--<div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div> -->
                        </div>
                        <div class="form-group">
                            <label class="label">รหัสผ่าน</label>
                            <input type="password" class="form-input" name="password" id="password" placeholder="รหัสผ่านควรมีอย่างน้อย 8 ตัวอีกษร"/>
                            <!-- <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>-->
                        </div>
                        <div class="form-group">
                            <label class="label">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-input" name="password2" id="password2" placeholder=""/>
                            <!--<div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>-->
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        มีบัญชีผู้ใช้อยู่แล้ว? <a href="login.php" class="loginhere-link">กดที่นี่</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <!--<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>