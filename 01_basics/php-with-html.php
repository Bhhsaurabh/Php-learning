<?php
$h1_color = "green";
echo "<h1 style='color:red'>Hello my name is saurabh</h1>"

?>
<!-- you can use multiple php tags withing sam window -->
 <?php
 $name = "saurabh kumar";
 echo "<h1>$name</h1>"
 ?>

 <!-- you can use php withing html tags -->

 <h1 style="color:green">
    <?php
    $sum  = 4+6;
    echo $sum;
    ?>
   
 </h1>

 <h1  style="color:<?php echo $h1_color?>" >Hello i am saurabh</h1>
 <h1 style="color:<?php echo $h1_color?>">Hello i am sam</h1>
 <h1 style="color:<?php echo $h1_color?>">Hello i ma gukesh</h1> 