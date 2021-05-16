<?php
ob_start();
include('config.php');
//$insert_query="insert into tb_covid_data(data) values('$value')";
//mysqli_query($conn,$insert_query);

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
        <?php $next_state=1+(int)$_GET['state'];?>
        var state="<?php echo $_GET['state'];?>";
        var change="<?php echo $_GET['change'];?>";
        
        if(state=='' || state==0){
            state=0;
        }
        else{
            state=state-1;
        }
        
var settings = {
  "url": "https://cdn-api.co-vin.in/api/v2/admin/location/states",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (response) {
  console.log(response);
  var myJSON = JSON.stringify(response);
  
  var myJSON2 = JSON.parse(myJSON);




    var stateId=myJSON2.states[state]['state_id'];
    var stateName=myJSON2.states[state]['state_name'];
    document.getElementById("state_id").value=stateId;
    document.getElementById("state_name").value=stateName;



}
);


    </script>
    

</head>
<body>

<div id="main"></div>
<div id="demo"></div>

<form action="" method="post" id="states_form">
    <input type="text" name="state_id" id="state_id">
    <input type="text" name="state_name" id="state_name">
    <input type="hidden" name="action" value="go">
    
    <script>
        var x=document.getElementById("state_id").value;
        var y=document.getElementById("state_name").value;
        
          setTimeout(function(){
   document.getElementById("states_form").submit();
}, 100);

       
    </script>
    
</form>

</body>
</html>



<?php

if($_POST['action']!=""){
echo $state_id=$_POST['state_id'];
echo $state_name=$_POST['state_name'];

echo $insert_query="insert into tb_states(state_id,state_name) values('$state_id','$state_name')";
$result=mysqli_query($conn,$insert_query);
if($result){
    header("Location:dev.php?state=$next_state");
}
}

?>