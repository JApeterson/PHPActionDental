<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

    <head>
        <TITLE>Action Dental | <?php echo $title; ?> | Cheyenne Wyoming Dentist</TITLE>
<?php include 'Modules/head.php'; ?>
    </head>
<body>
    <div class="container">
        <div class="row panel-footer">
<?php 
include 'Modules/header.php';
?></div>
        <div class="row">
<?php 
include 'Modules/nav.php';
?>
        </div>
        <div class="row background">
            
<?php

include 'Modules/sidebar.php';
?>
            <main class="background col-sm-8 spacetop">
<?php
$navbar = $_GET['action'];

         switch ($navbar) {
                    
                
                    
                     case 'Forms':
                        include 'forms.php';
                     $title = 'Forms';
                    break;
                
                    case 'Hours and Directions':
                        include 'hours.php';
                       $title = 'Hours and Directions';   
                    break;
                
                    case 'Meet the Staff':
                        include 'meetstaff.php';
                   $title = 'Meet the Staff';
                     break;
                 
                 case 'Payment/Insurance':
                        include 'payment.php';
                   $title = 'Payment/Insurance';
                     break;
                 
                 case 'Services':
                        include 'services.php';
                   $title = 'Services';
                   
                     break;
                
                default :
                    include 'home.php';
                    $title = 'Home';
                break;
            
         }

?>
                </main>
        </div>
        <div class="row">
<div class="col-sm-12">
<?php include 'Modules/footer.php';?>
</div>
        </div>


<?php include 'Modules/script.php' ?>
    </div>
</body>
</html>