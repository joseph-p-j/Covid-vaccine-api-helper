<?php
ob_start();
include('config.php');

$state_id=$_GET['state'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State and district code</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        <?php $next_district=1+(int)$_GET['district'];?>
        var district="<?php echo $_GET['district'];?>";
        var change="<?php echo $_GET['change'];?>";
        
        if(district=='' || district==0){
            district=0;
        }
        else{
            district=district-1;
        }
        
var settings = {
  "url": "https://cdn-api.co-vin.in/api/v2/admin/location/districts/<?php echo $state_id;?>",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (response) {
  console.log(response);
  var myJSON = JSON.stringify(response);
  
  var myJSON2 = JSON.parse(myJSON);




    var districtId=myJSON2.districts[district]['district_id'];
    var districtName=myJSON2.districts[district]['district_name'];
    document.getElementById("district_id").value=districtId;
    document.getElementById("district_name").value=districtName;



}
);


    </script>
    

</head>
<body>

<div id="main"></div>
<div id="demo"></div>

<form action="" method="post" id="district_form">
    <input type="text" name="district_id" id="district_id">
    <input type="text" name="district_name" id="district_name">
    <input type="hidden" name="action" value="go">
    
    <script>
        var x=document.getElementById("district_id").value;
        var y=document.getElementById("district_name").value;
        
     
        
          setTimeout(function(){
   document.getElementById("district_form").submit();
}, 100);

       
    </script>
    
</form>

</body>
</html>



<?php

if($_POST['action']!=""){
echo $district_id=$_POST['district_id'];
echo $district_name=$_POST['district_name'];

echo $insert_query="insert into tb_district(state_id,district_id,district_name) values('$state_id','$district_id','$district_name')";
$result=mysqli_query($conn,$insert_query);
if($result){
    if($district_name==''){
    header("Location:district.php?state=".++$state_id."&district=0");
}
    else{
    header("Location:district.php?state=".$state_id."&district=".$next_district);
    }
}

}

?>