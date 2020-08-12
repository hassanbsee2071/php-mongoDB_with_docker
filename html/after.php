<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="Font-Awesome-4.7/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrapone.min.css">
    <link rel="stylesheet" type="text/css" href="css/templatemoone-style.css">
    
    <title>Catalyst HTML CSS Template</title>
<!--
Catalyst Template
http://www.templatemo.com/tm-499-catalyst
-->
</head>

<body>
    
    <div class="container">
        <section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item tm-black-translucent-bg tm-logo-box">
              <i class="fa fa-snowflake-o fa-4x tm-logo"></i>
              <h1 class="text-uppercase">Thank You!</h1>
               
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background tm-white-translucent-bg">
               <h2 class="main-title text-center dark-blue-text">Congratulations:-)</h2>
               <p>Welcome <?php echo $_POST["user_name"]; ?><br>
Your email address is: <?php echo $_POST["user_email"]; ?><br>
Your department is: <?php echo $_POST["department"]; ?><br>
Your registration number is: <?php echo $_POST["registration"]; ?><br>
Your contact number is: <?php echo $_POST["contactnumber"]; ?><br>
.</p>               

 <?php

$bulk = new MongoDB\Driver\BulkWrite;

   if($_POST)
   {
                   echo "HELLO";

                    $document = [

                    'Name' => $_POST["user_name"],

                    'Email' => $_POST["user_email"],

                    'Department' => $_POST["department"],

                    'Registration' => $_POST["registration"],

                    'Contact' => $_POST["contactnumber"],



                                ];


$bulk->insert($document);

$manager = new MongoDB\Driver\Manager('mongodb://mongodb:27017');

$result = $manager->executeBulkWrite('testdb.records', $bulk);


         { ?>
                 <?php echo "Status: Successful"; ?></p> 
               
               <?php 
        
          }




}



?>


</div>

















       </section>

       <section class="col-md-12 content padding tm-equal-col-container" id="services">
        <div class="col-lg-6 col-md-6 col-sm-12 content-item tm-black-translucent-bg tm-services-section-padding">
          <h2 class="main-title text-center dark-blue-text">Good Job</h2>
           <p>Thank You for using MongoDB.</p>
       </div>
                      

      </section>



</div>

<div class="text-center footer">
	<div class="container">
		Copyright &copy; <span class="tm-current-year">2017</span> Company 
        
        | Design: <a href="http://www.templatemo.com" target="_parent">templatemo</a>
    </div>
</div>

<script>

// Write current year in copyright text.
  document.getElementsByClassName("tm-current-year").value = new Date().getFullYear();

</script>
</body>
</html>
