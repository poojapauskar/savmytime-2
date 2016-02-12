<!-- http://localhost/foodromeo/sign-up.php -->

<html>
<head>
<script type="text/javascript">
  
/*document.getElementById("myNumber").defaultValue = "16";*/
</script>
</head>
<body>

<?php
$url3 = 'http://0.0.0.0:8090/is_admin_login/';
$headr = array(
    'Email: '.$_POST['login_email'],
    'Password: '.$_POST['login_password'],
   
    );
/*$headr[] = 'Accept: application/json';
$headr[] = 'Authorization: Basic '.$accesstoken;*/

//cURL starts
$crl = curl_init();
curl_setopt($crl, CURLOPT_URL, $url3);
curl_setopt($crl, CURLOPT_HTTPHEADER,$headr);
curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($crl, CURLOPT_HTTPGET,true);
$reply = curl_exec($crl);
/*echo $reply;*/
$arr1 = json_decode($reply,true);
echo $reply;
/*echo $arr1;*/
if ($arr1['status'] == 400 || $arr1['status'] == 401){
  /*echo $arr1;*/
}
if($arr1['status'] == 200){
  header('Location: add_service_details.php');
};
curl_close($reply);
?>
<div class="form">
      
        <div id="login">   
          <h1>Admin login</h1>
          
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="text" name="login_email" required/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="text" name="login_password" required/>
          </div>
          
          <!-- <p class="forgot"><a href="http://localhost/foodromeo/forgot-password.php">Forgot Password?</a></p>
           -->
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div>
      
</div>
</body>
</html>



