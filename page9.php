<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="logo.png" />
  <title>SAVMYTIME</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<style type="text/css">
    dl{
  border-radius: 8px;  
  margin-bottom: 80px;
  overflow: hidden;
}

@font-face {
    font-family: Roboto-Regular;
    src: url(Roboto-Regular.ttf);
}

@font-face {
    font-family: RobotoCondensed-Light;
    src: url(RobotoCondensed-Light.ttf);
}

@font-face {
    font-family: Lato-Light;
    src: url(Lato-Light.ttf);
}

@font-face {
    font-family: Lato-Regular;
    src: url(Lato-Regular.ttf);
}

dl dt{ 
  /*background-color: #eea236;*/
  border-bottom: solid 1px #D0D0D0 ;
  /*border-top: solid 1px black;*/
  color: black;
  /*background-border: #eea236;*/
  font-family: Lato-Light;
  font-weight: normal;
  /*cursor: pointer;*/
  padding: 10px 10px 10px 30px;
  position: relative;
  
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

dd{
  background-color: white;
  color: rgba(0,0,0,0.6);
  display: none;  
  border: solid 1px #e7e7e7;
  margin: 0;
  padding: 6px;
}

.fechado::after, .aberto::after{
  color: #E8E8E8;
  content: "\25c2";
  display: table;
  font-size: 1.6em;
  left: 2%;
  line-height: 50px;
  position: absolute;
  /*text-shadow: 0 -0.1px black; */
  top: -3px;
    
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out; 
}

.fechado::after{
    color: #E8E8E8;
   -webkit-transform: rotate(-90deg);
   -moz-transform: rotate(-90deg);
   -ms-transform: rotate(-90deg);
   -o-transform: rotate(-90deg);
   transform: rotate(-90deg); 
}

.aberto::after{
    color:#E8E8E8;
  -webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
} 

@media only screen and (min-width : 1024px){

  
    
  dl{
    width: 36rem;
    font-family: Lato-Regular; 
  }
  
}


table, th, td {
    border: 1px solid #D0D0D0 ;
    border-collapse: collapse;
    font-family: Lato-Regular;
    font-size:12px;
}
th, td {
    padding: 1px;
    font-family: Lato-Regular;
}



.zoom img{
    box-shadow: 2.5px 2.5px 2.5px #909090;
}

</style>
   
        
<script type="text/javascript">
    function disableMe(i)
{     
      
      var pathArray = window.location.hash;
      
      if(i == 1 && pathArray == "#home"){
        flag=1;
       // document.getElementById("a1").style.color = "black";
        event.preventDefault();


      }else if(i == 2 && pathArray == "#services"){
       // document.getElementById("a2").style.color = "black";
        event.preventDefault();
        flag=2;
      }else if(i == 3 && pathArray == "#support"){
        //document.getElementById("a3").style.color = "black";
        event.preventDefault();
        flag=3;
      }

     //alert(flag);
}
</script>
    




</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
      </button>
      
    </div>

    <ul class="nav navbar-nav">
                    <li>
                         <img style="width:65px;height:65px" class="img-responsive" src="logo.png" alt="">
                    </li>
                    <li>
                        <a class="navbar-brand" style="font-size:29px;color:black;font-family: Roboto-Regular;" href="#">SAVMYTIME</a>
                    </li>
                    
                </ul>
   
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left" >
        
        <li><a style="color:#1DAE91;font-family: Lato-Regular;" href="index.html" id="a1" onclick="disableMe(1)">Home</a></li>

        <!-- <li><a style="color:#1DAE91" href="#services" id="a2" onclick="disableMe(2)">Services</a></li> -->
     </ul> 
     <ul class="nav navbar-nav navbar-right" >
       <li><a style="color:#eea236;font-family: Lato-Regular;" href="#support" id="a3" onclick="disableMe(3)">Customer Support: 9844234709</a></li>
     </ul>
    </div>


  </div>
</nav>







    









    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 style="font-size:20px;text-align:center;margin-top:1%;font-family: Lato-Regular;" class="page-header">PC Repair
                  <!--   <small>Secondary Text</small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row" style="margin-top:-1%">
            <div class="col-md-3 portfolio-item" style="width:50%;height:30%">
                <a href="page2.html">
                    <div class="zoom">
                    <img class="img-responsive" src="computer.jpg" alt="">
                    </div>

                    <h1 style="font-size:15px;float:left;color:black;font-family: Lato-Regular;">

            </h1> 
                </a>
            </div>

<?php
$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => '8808891988',
    'To'    => '9844234709',
    'Body'  => 'SAVMYTIME Service Request: '.$_POST['name'].' has requested a service from SAVMYTIME. The email address provided is '.$_POST['email'].' and the mobile number is '.$_POST['mobile'].'.', //Incase you are wondering who Dr. Rajasekhar is http://en.wikipedia.org/wiki/Dr._Rajasekhar_(actor)
);
 
$exotel_sid = "bitjini"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
$exotel_token = "85dbbbc18dfaf078290eeee3c185ac6dfd8a208f"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
/*print "Response = ".print_r($http_result);*/
?>



                                    <div class="col-md-3 portfolio-item" style="width:20%;height:30%">
                                  
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin-top:2%">

                          <input type="text" name="name" placeholder="Your Name">

                          <br><br>
                         
                          <input type="text" name="mobile" placeholder="Mobile No.">
                          <br><br>

                          <input type="text" name="email" placeholder="Email">
                          <br><br>

                          <select name="mydropdown" style="width:172px;background-color:transparent;border:transparent;border:solid 1px #E8E8E8 ;font-family: Lato-Light;font-weight: normal;">
                            <option value="">Select Your City</option>
                            <option value="bangalore">Bangalore</option>
                            <option value="mumbai">Mumbai</option>
                            </select>
                            <br><br>


                           <input type="submit" class="btn btn-warning" value="Send SMS">
                        </form>
                                    </div>


             





                    <div class="col-md-3 portfolio-item" style="width:20%;height:30%">
                        <dl>
                          <dt>PC & Laptop Repair - Hardware Issue</dt>
                            <dd>
                                <table style="width:100%;margin-bottom:-5%">
                                  <tr>
<th>Type</th>
<th>Price(Rs.)</th>

</tr>
<tr>

<td>No Display</td>
<td>950</td>

</tr>
<tr>

<td>Cracked or Damaged Display</td>
<td>500</td>
</tr>
<tr>

<td>Display Cable Issue</td> 
<td>450</td>
</tr>
<tr>

<td>Over Heating Issue</td>
<td>500</td>
</tr>
<tr>

<td>Keyboard Issue</td> 
<td>350</td> 
</tr>

<tr>
<td>Battery or Adaptor not working</td> 
<td>950</td>
</tr>
<tr> 

<td>USB/HDMI Port not working</td>
<td>600</td> 
</tr>
<tr>

<td>Body Damage</td>
<td>On Inspection</td>
</tr>

                                </table><br>
<p style="font-family: Lato-Light;font-weight: normal;color:black"><br>Please note:</p>

<p>Prices Listed above may vary after Inspection.

If your problem is not listed above, there will be minimum visiting charges Rs 300 

for inspection and fixing the problem within 60 mins, if possible. Additional service 

and material charges will be conveyed to you after inspection and we will proceed for 

the work only after your approval.</p>

                            </dd>

                          
<dt>PC & Laptop Repair - Software Issue</dt>
                            <dd>
                                <table style="width:100%;margin-bottom:-5%">
                                  <tr>
<th>Type</th>
<th>Price(Rs.)</th>

</tr>
<tr>
<td>OS Issues</td> 
<td>950</td> 
</tr>
<tr>

<td>Slow performance</td> 
<td>450</td> 
</tr>
<tr>
<td>Virus related issues</td> 
<td>750</td> 
</tr>
<tr>
<td>Internet Issues</td> 
<td>500</td> 
</tr>
<tr>
<td>Formating</td> 
<td>800</td>
</tr>
<tr>
<td>Others</td> 
<td>On Inspection</td> 
</tr>

                                </table><br>

<p><br><strong style="font-family: Lato-Light;color:484848">Please Note:</strong><br>
Prices Listed above may vary after Inspection.

If your problem is not listed above, there will be minimum visiting charges Rs 300 

for inspection and fixing the problem within 60 mins, if possible. Additional service 

and material charges will be conveyed to you after inspection and we will proceed for 

the work only after your approval.</p>
                            </dd>
                        </dl>
                    </div>

           
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        
        <!-- /.row -->

        <!-- Projects Row -->
        
        <!-- /.row -->


 

        
    <script src='js/jquery1.js'></script>

       

<script type="text/javascript">
$('dt').addClass('fechado');

var $active = null;

$('dt').click(function(){

if ($active !== null){
$active.next().slideToggle("slow");
$active.removeClass('aberto');
$active.addClass('fechado');
} 

$active = $(this);
$active.addClass('aberto');
$next = $active.next();

if ($next.is(":hidden")){
$next.slideToggle("slow");
}else{
$active.removeClass('aberto');
$active.addClass('fechado');
$active = null;     
}

})
</script>
        






        <hr>

        <!-- Pagination -->
        <!-- <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div> -->
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
