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
                <h1 style="font-size:20px;text-align:center;margin-top:1%;font-family: Lato-Regular;" class="page-header">Security Solutions
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
                    <img class="img-responsive" src="security.png" alt="">
                    </div>

                    <h1 style="font-size:15px;float:left;color:black;font-family: Lato-Regular;">We service all your security solutions requirements for all residential/Non-Residential. Reach us SAVMYTIME.com

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
                          <dt>CCTV System ( IP Based)</dt>
                            <dd>
                                <table style="width:100%;margin-top:-5%;margin-bottom:-5%">
                                  <tr>
<th>Sr. No.</th>
<th>Description</th>
<th>Qty.</th>
<th>Unit</th>
<th>Unit Rate</th>
<th>Total Amount</th> 
<th>Unit Rate </th>
<th>Total Amount </th>
</tr>

<tr>
<td>1</td>
<td>Varifocal box camera with IR</td>
<td>1</td>
<td>Nos.</td>
<td>13,500.00</td> 
<td>13,500</td> 
<td>500</td> 
<td>500</td>
</tr>
<tr>
<td>2</td>
<td>Vari focal Box camera</td> 
<td>1</td>
<td></td>
<td>5,600.00</td>
<td>5,600</td>
<td>500</td>
<td>500</td>
</tr>
<tr>
<td>3</td>
<td>Deome camera with POE</td>
<td>1</td>
<td>Nos.</td> 
<td>5,100.00</td> 
<td>5,100 </td>
<td>500</td> 
<td>500</td>
</tr>
<tr>
<td>4</td>
<td>PTZ camera</td>
<td>1</td>
<td>Nos.</td> 
<td>65,400.00</td> 
<td>65,400</td>
<td>2,500</td>
<td>2,500</td>
</tr>
<tr>
<td>5</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr> 
<tr>
<td>6</td>
<td>16 Port L2 /L3 Switch poe (all Port poe)</td>
<td>1</td>
<td>Nos.</td> 
<td>56,300.00</td> 
<td>56,300</td>
<td>2,000</td>
<td>2,000</td>
</tr>
<tr>
<td>7
<td>16 Channel NVR with 6TB HDD</td>
<td>1</td>
<td>No</td>
<td>87,000.00</td> 
<td>87,000</td> 
<td>2,000</td>
<td>2,000</td> 
</tr>
<tr>
<td>8</td>
<td>8 Channel NVR with 6 TB HDD</td>
<td>1</td>
<td>Nos. </td>
<td>71,000.00 </td>
<td>71,000</td>
<td>2,000</td>
<td>2,000</td> 
</tr>
<tr>
<td>9</td>
<td>21" Monitor</td>
<td>1</td>
<td>Nos.</td>
<td>11,500.00</td>
<td>11,500</td> 
<td>1,200</td>
<td>1,200</td> 
</tr>
<tr>
<td>10</td>
<td>32" LED Monitor</td>
<td>1</td>
<td>No</td>
<td>36,500.00</td> 
<td>36,500</td> 
<td>1,500 </td>
<td>1,500</td> 
</tr>
                                </table><br>
                            </dd>

                          <dt>Cables  & Accessories</dt>
                            <dd>
                                <table style="width:100%;margin-bottom:-5%">
                                  <tr>
<th>Sr. No.</th>
<th>Description</th>
<th>Qty.</th>
<th>Unit</th>
<th>Unit Rate</th>
<th>Total Amount</th> 
<th>Unit Rate </th>
<th>Total Amount </th>
</tr>

<tr>
<td>1</td>
<td>CAT 6 Cable in PVC FRLS Conduit</td>
<td>1</td>
<td>Mtrs</td>
<td>43.00</td> 
<td>43</td> 
<td>41</td> 
<td>41</td> 
</tr>
<tr>
<td>2</td>
<td>16/24 port non managable switch</td>
<td>1</td>
<td>Nos.</td> 
<td>32,000.00</td> 
<td>32,000</td> 
<td>2,300</td> 
<td>2,300</td>
</tr> 
<tr>
<td>3</td>
<td>Rack 12 U</td>
<td>1</td>
<td>Nos.</td> 
<td>21,350.00</td> 
<td>21,350</td> 
<td>6,500</td> 
<td>6,500</td>
</tr> 
<tr>
<td>4</td>
<td>Cat - 6 Patch Cord (1 M)</td>
<td>4</td>
<td>Nos.</td> 
<td>210.00</td> 
<td>840</td> 
<td>75</td> 
<td>300</td> 
</tr>
<tr>
<td>5</td>
<td>Cat - 6 Patch Cord (2 M)</td>
<td>2</td>
<td>Nos.</td> 
<td>356.00</td> 
<td>712</td> 
<td>75</td> 
<td>150</td> 
</tr>

                                </table><br>
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
