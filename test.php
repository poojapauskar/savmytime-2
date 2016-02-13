<!-- localhost/savmytime -->

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="http://res.cloudinary.com/htwoqvwuz/image/upload/savmytime/id126930.png" />
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
    /*border-collapse: collapse;*/
    font-family: Lato-Regular;
    font-size:13px;

}
th, td {
    padding: 10px;
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
                         <img style="width:65px;height:65px" class="img-responsive" src="http://res.cloudinary.com/htwoqvwuz/image/upload/savmytime/id126930.png" alt="">
                    </li>
                    <li>
                        <a class="navbar-brand" style="font-size:29px;color:black;font-family: Roboto-Regular;" href="#">SAVMYTIME</a>
                    </li>
                    
                </ul>
   
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left" >
        
        <li><a style="color:#1DAE91;font-family: Lato-Regular;" href="test.php" id="a1" onclick="disableMe(1)">Home</a></li>

        <!-- <li><a style="color:#1DAE91" href="#services" id="a2" onclick="disableMe(2)">Services</a></li> -->
     </ul> 
     <ul class="nav navbar-nav navbar-right" >
       <li><a style="color:#eea236;font-family: Lato-Regular;" href="#support" id="a3" onclick="disableMe(3)">Customer Support: 9844234709</a></li>
     </ul>
    </div>


  </div>
</nav>








<?php 
/*$id=$_GET['id'];*/
$url="http://0.0.0.0:3000/get_services/";
$ch = curl_init();//I have removed it from here
curl_setopt($ch, CURLOPT_URL,$url);// This will do
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$output = curl_exec($ch);
$arr = json_decode($output,true);
/*echo count($arr);
echo $arr[0]['service'];*/

/*echo $output;*/
curl_close($ch); 
?>


<?php

/*echo $_POST['service_selected'];*/
/*echo "selected service";
echo $_POST['service_selected'];*/
if($_POST['service_selected']=='')
{

}else{
$id=$_POST['service_selected'];
$url1="http://0.0.0.0:3000/get_details/id=".$id."/";
$ch1 = curl_init();//I have removed it from here
curl_setopt($ch1, CURLOPT_URL,$url1);// This will do
curl_setopt($ch1, CURLOPT_RETURNTRANSFER,1);
$output1 = curl_exec($ch1);
/*echo $output1;*/
/*echo count($arr1[0]['category']);*/

$arr1 = json_decode($output1,true);
/*echo $arr1[0]['image'];*/
curl_close($ch1);
}

/*
echo $_POST['sub_category_selected'];*/

$c = curl_init();
$var=$_POST['mobile'];
$var1=$_POST['name'];
$var2=$_POST['email'];
$var3=$_POST['address'];


curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c, CURLOPT_URL, "http://0.0.0.0:3000/user_data/");
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c, CURLOPT_POSTFIELDS, 'phone='.$var.'&name='.$var1.'&email='.$var2.'&address='.$var3);
$result8 = curl_exec($c);
$arr9 = json_decode($result8,true);
/*echo $arr9['phone'];
echo $result8;*/
/*if($result8 != ''){
  header('Location: http://localhost/savmytime/authorize-php-examples/sim.php');
}*/
curl_close ($c);


/*echo $result;*/




/*foreach ($_POST['sub_category_selected'] as $selectedOption)
    echo $selectedOption."\n";*/

?>



<?php
ob_start(); //Turning ON Output Buffering
  $x4=0;
  $array4=[];
 foreach ($_POST['sub_category_selected'] as $value)
 {
  $c6 = curl_init();
  $url6="http://0.0.0.0:3000/get_sub_category_details/id=".$value."/";
  $c6 = curl_init();//I have removed it from here
  curl_setopt($c6, CURLOPT_URL,$url6);// This will do
  curl_setopt($c6, CURLOPT_RETURNTRANSFER,1);

  $ret = curl_exec($c6);
  $result6= json_decode($ret,true);

  $array4[$x4]=$result6;
  $x4++;

  ob_flush();//Flush the data here
  
  /*echo $ret;*/
  /*$arr6=json_encode($result6);*/
     
  
  curl_close($c6);
 }

 /*echo $ret;
 echo $result6[0]['category'];*/
 /*echo $array4[0][0]['name'];*/

 ob_end_flush();
?>

  <!-- Page Content -->
    <div class="container">


    <h4 style="text-align:center;font-family: Lato-Regular;"><?php echo $arr1[0]['name']; ?></h4>
    
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row" style="margin-top:0%">

<br>

          <?php if($ret == ''){ if($arr9['phone'] == ''){?>            
                  
                      <form method="post" action="" style="margin-top:-9%">
                          <select name="service_selected" style="width:372px;background-color:transparent;border:transparent;border:solid 1px #E8E8E8 ;font-family: Lato-Light;font-weight: normal;margin-top:8%;">
                          
             <?php
      if($arr1 == '') {?>
          <option value="">Select Your Service</option>

        <?php }else{?>
          <option value="">Select Another Service</option>
          <?php } ?>
     
                            <?php 
                              for ($x = 0; $x <= count($arr); $x++) { ?>
                                  <option value=<?php echo $arr[$x]['id'] ?> ><?php echo $arr[$x]['service'] ?></option>
                            <?php  } 
                            ?>
                            </select>
                            <br><br>
                            
                            <input type="submit" class="btn btn-warning" value="Select Sub Category">
                            
                        </form>
         <?php }}?>
                        <br><br>

                        <?php
                        if($arr1 == '') {}else{?>

                          <div >
                          
                          <img align="right" style="width:50%;height:50%;margin-top:-9%;" src="<?php echo $arr1[0]['image']; ?>"/>
                          </div>

                         <form method="post" action="" style="margin-top:-2%">
                         <select multiple="multiple" name="sub_category_selected[]" style="overflow: auto;height:350px;width:500px;background-color:transparent;border:transparent;border:solid 1px #E8E8E8 ;font-family: Lato-Light;font-weight: normal;">
        <!--                   <option style="color:black;font-family: Lato-Regular;font-weight:bold;font-size:15px" value="">Select Your Sub Category</option> -->        
                          <?php  
                              for ($x1 = 0; $x1 < count($arr1[0]['category']); $x1++) {?>
<option value=""><?php echo "<br>"; ?></option> 
<option value=""><?php echo "<br>"; ?></option>                              
<option value="" style="color:#1DAE91;font-family: Lato-Regular;font-size:16px;font-weight:bold"><?php echo $arr1[0]['category'][$x1]['name'];?></option>
<option value="" style="color:#FF9933;font-family: Lato-Regular;font-size:13px;"><?php echo $arr1[0]['category'][$x1]['description'];?></option>
             
<?php 
for ($x2 = 0; $x2 < count($arr1[0]['category'][$x1]['sub_category_details']); $x2++) { ?>
    <option value=<?php echo $arr1[0]['category'][$x1]['sub_category_details'][$x2]['id']?> ><?php echo $arr1[0]['category'][$x1]['sub_category_details'][$x2]['sub_category'];echo "&nbsp $nbsp&nbsp $nbsp&nbsp $nbsp";echo "Rs.";echo $arr1[0]['category'][$x1]['sub_category_details'][$x2]['price'];echo "/-"?></option>
<?php  }
?>
                   
                                  
                            <?php  } 
                            ?>
                            </select>

                        

                             <br><br>
                           <input type="submit" class="btn btn-warning" value="Confirm">
                         <!--  <input type="submit" class="btn btn-warning" value="Submit"> -->
                          </form>

                          <?php } ?>



<?php if($_POST['sub_category_selected']){
$total=0;  ?>
 
<table>
  <tr>
    <th>Service</th>
    <th>Category</th>
    <th>Sub Category</th>
    <th>Price</th>
  </tr>
<?php if($ret != ''){
  for ($x3 = 0; $x3 < count($array4); $x3++) { 
  $total+=$array4[$x3][0]['price'];?> 
  <tr>
    <td><?php echo $array4[$x3][0]['service']?></td>
    <td><?php echo $array4[$x3][0]['category']?></td> 
    <td><?php echo $array4[$x3][0]['name']?></td>
    <!-- <td><?php echo $array4[$x3][0]['description']?></td> -->
    <td><?php echo"Rs.";echo $array4[$x3][0]['price'];echo "/-"?></td>
    </tr>
  <tr>
  </tr>
  <tr>
  </tr>
  <tr>
  </tr>
<?php }}?>


  <tr>
    <th>Tax</th>
    <th></th>
    <th></th>
    <th>Rs.20/-</th>
  </tr>
    <th>Other Charges</th>
    <th></th>
    <th></th>
    <th>Rs.8/-</th>
  <tr>
  </tr>
    <th>Grand Total</th>
    <th></th>
    <th></th>
    <th><?php echo"Rs.";echo $total;echo "/-"?></th>
  <tr>
  </tr>
</table>



   <div class="col-md-3 portfolio-item" style="margin-left:60%;margin-top:-20%;width:20%;height:30%">
                                  
                        <form method="post" action="" style="margin-top:4%">

                          <input type="text" name="name" placeholder="Your Name">

                          <br><br>
                         
<input type="text" name="mobile" pattern="[0-9]{12}" title="Phone number starting with country code and 12 digits" placeholder="Mobile No." required="True">
                          <br><br>

                          <input type="text" name="email" placeholder="Email">
                          <br><br>

                          <input type="text" name="address" placeholder="Address">
                          <br><br>
<?php /*if($ret != ''){
  $details5=[];
  for ($x3 = 0; $x3 < count($array4); $x3++) { 
    $details5['service'][$x3]=$array4[$x3][0]['service'];
    $details5['category'][$x3]=$array4[$x3][0]['category'];
    $details5['sub_category'][$x3]=$array4[$x3][0]['name'];
  echo json_encode($details5);
}}*/?>
                         <!-- <input type="text" name="details" value="<?php echo $details5 ?>" placeholder="Details">
                          <br><br> -->
 
                          

                          

                          <!-- <select name="mydropdown" style="width:172px;background-color:transparent;border:transparent;border:solid 1px #E8E8E8 ;font-family: Lato-Light;font-weight: normal;">
                            <option value="">Select Sub Category</option>
                            <option value="bangalore">Bangalore</option>
                            <option value="mumbai">Mumbai</option>
                            </select>
                            <br><br> -->


                           <input type="submit" class="btn btn-warning" value="Proceed to Payment">
                        </form>
                                    </div>
<?php }?>
<h6 style="margin-top:-4%;margin-left:45%;align:right;text-align:right;color:#1DAE91;font-family: Lato-Regular;"><?php echo $arr1[0]['description']; ?></h6>
  

<!-- 

                          <form method="post" action="" style="margin-top:2%">

                         
                        </form> -->

                          

                             
                        
                                    </div>


             



           
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        
        <!-- /.row -->

        <!-- Projects Row -->
        
        <!-- /.row -->


<?php if($arr9['phone'] != ''){
/*echo "hi";*/
require_once 'src/autoload.php'; // Include the SDK you downloaded in Step 2

$test = true;
$api_login_id    = '9Q45uN523ys';
$transaction_key = '7Fy3CK8pH9yD959K';

$amount = $arr9['phone'];
$fp_timestamp = time();
$fp_sequence = "123" . time(); // Enter an invoice or other unique number.
$fingerprint = AuthorizeNetSIM_Form::getFingerprint($api_login_id, $transaction_key, $amount, $fp_sequence, $fp_timestamp);

$action = $test ? "https://test.authorize.net/gateway/transact.dll" : "https://secure.authorize.net/gateway/transact.dll";

$currency = 'USD' // AUD, USD, CAD, EUR, GBP or NZD

?>

<form method='post' action="https://test.authorize.net/gateway/transact.dll">
  <input type='hidden' name="x_login" value="<?php echo $api_login_id?>" />
  <input type='hidden' name="x_fp_hash" value="<?php echo $fingerprint?>" />
  <input type='hidden' name="x_amount" value="<?php echo $amount?>" />
  <input type='hidden' name="x_fp_timestamp" value="<?php echo $fp_timestamp?>" />
  <input type='hidden' name="x_fp_sequence" value="<?php echo $fp_sequence?>" />
  <input type='hidden' name="x_version" value="3.1">
  <input type='hidden' name="x_description" value="Test Payment">
  <!-- <input type='hidden' name="x_currency_code" value="<? echo $currency; ?>"> -->
  <input type='hidden' name="x_invoice_num" value="order-050514">
  <input type='hidden' name="x_po_num" value="5">
  <input type='hidden' name="x_show_form" value="payment_form">
  <input type='hidden' name="x_test_request" value="false" />
  <input type='hidden' name="x_method" value="cc">
  <input type='hidden' name="x_test_request" value="<?php echo $test ? 'true' : 'false'; ?>">
  <input type='hidden' name="x_cancel_url" value="http://localhost/authorize/sim.php">

  <input type='hidden' name="x_relay_response" value="TRUE">
  <input type='hidden' name="x_relay_always" value="true">
  <input type='hidden' name="x_relay_url" value="http://localhost/authorize/sim.php?relay">

  <input type='hidden' name="x_receipt_link_method" value="LINK">
  <input type='hidden' name="x_receipt_link_text" value="Click here to return to our home page">
  <input type='hidden' name="x_receipt_link_URL" value="http://localhost/authorize/sim.php?success">

<!--   <input type='submit' value="Click here for the secure payment form"> -->
<input type="submit" style="margin-left:4%" class="btn btn-warning" value="Click here for the secure payment form">
</form>
<?php } ?>
        
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
