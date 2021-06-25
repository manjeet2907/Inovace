<?php 
$server = 'Localhost';
$user = 'root';
$password = '';
$db = 'inovace_engineering';

$con = mysqli_connect($server, $user, $password , $db);

if($con){
    ?>
    <script>
    alert('Connection Successful');
    </script>
    <?php
}else{
    ?>
    <script>alert('connection unsuccessful')</script>

    <?php
}



?>