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
$var3=$_POST['sub_category_selected'];


curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c, CURLOPT_URL, "http://0.0.0.0:3000/user_data/");
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c, CURLOPT_POSTFIELDS, 'phone='.$var.'&name='.$var1.'&email='.$var2.'&sub_category='.$var3);
$result = curl_exec($c);
curl_close ($c);






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
    <h6 style="text-align:center;color:#1DAE91;font-family: Lato-Regular;"><?php echo $arr1[0]['description']; ?></h6>
  
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row" style="margin-top:-3%">

<br><br>  



                      <form method="post" action="" style="margin-top:-2%">
                          <select name="service_selected" style="width:372px;background-color:transparent;border:transparent;border:solid 1px #E8E8E8 ;font-family: Lato-Light;font-weight: normal;margin-top:8%;">
                         <!--    <option value="">Select Your Service</option> -->
                            <?php 
                              for ($x = 0; $x <= count($arr); $x++) { ?>
                                  <option value=<?php echo $arr[$x]['id'] ?> ><?php echo $arr[$x]['service'] ?></option>
                            <?php  } 
                            ?>
                            </select>
                            <br><br>
                            
                            <input type="submit" class="btn btn-warning" value="Select Sub Category">
                            
                        </form>

                        <br><br>
                        <br><br>

                        <?php
                        if($arr1 == '') {}else{?>

                          <div >
                          
                          <img align="right" style="width:20%;height:20%;margin-top:-18%;" src="<?php echo $arr1[0]['image']; ?>"/>
                          </div>

                         <form method="post" action="" style="margin-top:-2%">
                         <select multiple="multiple" name="sub_category_selected[]" style="overflow: auto;height:400px;width:700px;background-color:transparent;border:transparent;border:solid 1px #E8E8E8 ;font-family: Lato-Light;font-weight: normal;">
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
                           <input type="submit" class="btn btn-warning" value="Proceed to Payment">
                         <!--  <input type="submit" class="btn btn-warning" value="Submit"> -->
                          </form>

                          <?php } ?>



 
<table>
  <tr>
    <th>Service</th>
    <th>Category</th>
    <th>Sub Category</th>
    <th>Description</th> 
    <th>Price</th>
  </tr>
<?php if($ret != ''){
  for ($x3 = 0; $x3 < count($array4); $x3++) { ?> 
  <tr>
    <td><?php echo $array4[$x3][0]['service']?></td>
    <td><?php echo $array4[$x3][0]['category']?></td> 
    <td><?php echo $array4[$x3][0]['name']?></td>
    <td><?php echo $array4[$x3][0]['description']?></td>
    <td><?php echo $array4[$x3][0]['price']?></td>
  </tr>
<?php }}?>
</table>



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
