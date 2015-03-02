<?php
  session_start();
  include ("../models/user.php");
/**
 * Login process
 *
 */
  if(isset($_POST['login'])){
    if($_POST['username'] == ''){
      $is_error='Tên đăng nhập không được để trống!';
    }
    else if($_POST['password'] == ""){
      $is_error="Mật khẩu không được để trống!";
    }
    else{
      $s = "SELECT * FROM user WHERE username = "."'".$_POST['username']."'";
      $q = mysql_query($s);
      if($r = mysql_fetch_array($q)){
         if($r['password']==$_POST['password']) {
           $_SESSION['user']=$r['fullname'];
           header("location:http://mvc-php.lc");
         }
         else{
            $is_error="Sai mật khẩu";
         }
      }
      else{
        $is_error="Người dùng không đúng";
      }
    }
  }
  include ("../views/login.phtml");
?>