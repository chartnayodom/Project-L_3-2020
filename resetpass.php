<?php 
    session_start();
    require "condb.php";
    $user = $_SESSION["user"];
    $email = $_SESSION["email"];
?>
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
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/hallo.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="re_pass.php" class="needs-validation">
                        <h2 class="form-title">เปลี่ยนรหัสผ่าน</h2>
                        <h4>กำลังเปลี่ยนรหัสของผู้ใช้:<?php echo "$user"; ?></h4>
                        <div class="form-group">
                            <label class="label">รหัสผ่าน</label>
                            <input type="password" class="form-input" name="password" id="password" placeholder="รหัสผ่านควรมีอย่างน้อย 8 ตัวอีกษร"/>
                            <!-- <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>-->
                        </div>
                        <div class="form-group">
                            <label class="label">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-input" name="password2" id="password2" placeholder="โปรดยืนยันรหัสผ่าน"/>
                            <!--<div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>-->
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="ยืนยัน"/>
                        </div>
                    </form>
                    
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