<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
</head>
<body>
<?php $error = $this->session->flashdata('error'); ?>


<div class="wrapper">
    <div class="box">
        <div class="login-box">
          <form class="login" action="<?php echo base_url(); ?>blog/login_user" method="post">
            <div class="head">Sign In</div>
            <div class="form-group">
              <input type="text" name="username" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              <input type="button"  class="show" id="btnShow" value="Show"/>
            </div>
            <span class="error"><p><?php echo $error; ?></p></span>
            <button type="submit" id="employee-submit" class="btn btn-apply">SIGN IN</button>
          </form>
        </div>
    </div>

</div>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script>
          $(document).ready(function(){
            $(".show").click(function(){
            var x = document.getElementById("password");
            var y = document.getElementById("btnShow");
                if (x.type === "password") {
                    x.type = "text";
                    y.value="Hide";
                } else {
                    x.type = "password";
                    y.value="Show";
                }
            });
        });

</script>
</body>
</html>












<?php

if(isset($_POST['submit'])){
  $f_num = $_POST['f_num'];
  $s_num = $_POST['s_num'];

  if($f_num > $s_num){
    echo "First number is greater than Second number.";
  }
  elseif($f_num < $s_num){
    echo "Second number is greater than First number.";
  }
  else{
    echo "Both numbers are equal.";
  }
}



if(int>5000){
  $dic = int*(10/100);
  $amount = int - $dic;
  echo $amount;
}
else{
  $dic = int*(2/100);
  $amount = int - $dic;
  echo $amount;
}






?>