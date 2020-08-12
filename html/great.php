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
               <p>Welcome <?php echo $_POST["user_name"]; ?><br></p>               

 <?php


$file = "file.txt";

   if($_POST)
   {
       







     $file = "file.txt";
     $file1 = "output.txt";
       $mongo = new MongoDB\Driver\Manager('mongodb://mongodb:27017');



       $filter = [

                  //'Name' =>  new \MongoDB\BSON\Regex(preg_quote("syed muhammad Hassan"), 'i')

                  'Name' =>  new \MongoDB\BSON\Regex(preg_quote($_POST["user_name"]), 'i')
                     //'name' => 'ayesha Siddiqa',
                     // 'name' => $_POST["user_name"],
                    // 'Name' => $_POST["user_name"],
                 ];

       $options = [];




      //$query = ['ayesha Siddiqa' => new \MongoDB\BSON\Regex( preg_quote($arg),"i")];
      $query = new \MongoDB\Driver\Query($filter, $options);
      $rows   = $mongo->executeQuery('testdb.records', $query);




      //var_dump($query);
      //var_dump($rows);
   foreach ($rows as $document) {
         //  echo $document;
        // var_dump($document);
//            echo "<pre>", var_export($document, true), "</pre>";
           file_put_contents($file, var_export($document, true), FILE_APPEND);
           $alpha =  exec('grep '.escapeshellarg("Name").' '.$file);
           //echo  "\n";
           //echo $alpha;
           //echo  "\n";


           $space = "\n";
           file_put_contents($file1, $space, FILE_APPEND);


           file_put_contents($file1, $alpha, FILE_APPEND);
           $space = "\n";
           file_put_contents($file1, $space, FILE_APPEND);
              }









file_put_contents("without_space.txt", implode(PHP_EOL, file("output.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));

$no_of_lines = count(file("without_space.txt"));

$content = "file.txt";
$searchString = "NULL";


$filename = "file.txt";
//if(exec('grep '.escapeshellarg($searchString).' '.$content))
if(!file_exists($filename))

{
echo "***Record Not Found!!!<br>";

               }



elseif ($no_of_lines > 1){





echo "Following matching name has been found, please enter full name you want to search";
      echo "<br>";
      for ($x = 0; $x <= $no_of_lines; $x++) {
      //echo "The number is: $x <br>";
      $outlines = file("without_space.txt");
      echo $outlines[$x];
      echo "<br>";


         }








//$homepage = file_get_contents("without_space.txt");
//echo "\n";
//echo "<br>";
//echo "Following matching name has been found, please enter full name you want to search";
//echo "\n";
//echo "<br>";
//echo $homepage;

}

else
                        {

                                      $myFile = "file.txt";
                                      $lines = file($myFile);//file in to an array
                                       echo $lines[5];
                                       echo "<br>";
                                       echo $lines[6]; //line
                                       echo "<br>";
                                       echo $lines[7]; //line
                                       echo "<br>";
                                       echo $lines[8]; //line
                                       echo "<br>";
                                       echo $lines[9]; //line


                        }





















}


unlink("file.txt");
unlink("output.txt");
unlink("without_space.txt");

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
