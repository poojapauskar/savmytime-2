<!-- http://localhost/foodromeo/sign-up.php -->
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
  

/*document.getElementById("myNumber").defaultValue = "16";*/
</script>
</head>
<body>

<?php
$c = curl_init();
$service=$_POST['service'];
$image=$_POST['image'];
$description=$_POST['description'];


curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c, CURLOPT_URL, "http://0.0.0.0:8090/services/");
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c, CURLOPT_POSTFIELDS, 'service='.$service.'&image='.$image.'&description='.$description);
$result = curl_exec($c);
curl_close ($c);


$c1 = curl_init();
$name1=$_POST['name1'];
$phone1=$_POST['phone1'];
$email1=$_POST['email1'];
$city1=$_POST['city1'];
$address1=$_POST['address1'];


curl_setopt($c1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c1, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c1, CURLOPT_URL, "http://0.0.0.0:8090/service_providers/");
curl_setopt($c1, CURLOPT_POST, true);
curl_setopt($c1, CURLOPT_POSTFIELDS, 'name='.$name1.'&phone='.$phone1.'&email='.$email1.'&city='.$city1.'&address='.$address1);
$result1 = curl_exec($c1);
curl_close ($c1);
?>
<div class="form">
      
        <div id="add_service">   
          <h1>Add Service</h1>
          
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          
            <div class="field-wrap">
            <label>
              Service<span class="req">*</span>
            </label>
            <input type="text" name="service" required/>
          </div>
          
          <div class="field-wrap">
            <label>
              Image<span class="req">*</span>
            </label>
            <input type="file" name="image" size="40">
          </div>

          <div class="field-wrap">
            <label>
              Description<span class="req">*</span>
            </label>
            <textarea rows="6" cols="50" name="description" required></textarea>
          </div>
          
          <!-- <p class="forgot"><a href="http://localhost/foodromeo/forgot-password.php">Forgot Password?</a></p>
           -->
          <button class="button button-block"/>Submit</button>
          
          </form>
        
      </div>




      <div id="add_service_providers">   
          <h1>Add Service Providers</h1>
          
          <form name="form2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          
            <div class="field-wrap">
            <label>
              Name<span class="req">*</span>
            </label>
            <input type="text" name="name1" required/>
          </div>
          
          <div class="field-wrap">
            <label>
              Phone<span class="req">*</span>
            </label>
            <input type="text" name="phone1" id="phone1" required/>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email1" required/>
          </div>

          <div class="field-wrap">
            <label>
              City<span class="req">*</span>
            </label>
            <input type="text" name="city1" required/>
          </div>

          <div class="field-wrap">
            <label>
              Address<span class="req">*</span>
            </label>
            <input type="text" name="address1" required/>
          </div>
          
          <!-- <p class="forgot"><a href="http://localhost/foodromeo/forgot-password.php">Forgot Password?</a></p>
           -->
          <input id="submit" name="submit" type="submit" value="Submit" onclick="phonenumber();" />
          

          <script>
         
          function phonenumber()  
          { 
            inputtxt=document.getElementById('phone1').value; 
            /*var phoneno = /^\d{12}$/; */ 
            if(inputtxt.toString().length == 12)  
            { 
              return true; 
              /*document.getElementById('form2').submit();*/
              
            }  
            else  
            {  
              alert("Phone number must contain 12 digit");
              event.preventDefault();  
             
            } 
            /*alert('hi'); 
            alert(inputtxt);*/
            
          }
          </script>
          

          </form>

        </div>
      
</div>
</body>
</html>



