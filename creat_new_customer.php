<?php
include "connect.php";

   $new_names=mysqli_real_escape_string($connect, $_POST['new_names']);
   $new_phone=mysqli_real_escape_string($connect, $_POST['new_phone']);
   $new_status=mysqli_real_escape_string($connect, $_POST['new_status']);

   $create_new_custom="INSERT INTO customer_data (names, phone, status) VALUES ('$new_names', '$new_phone', '$new_status')";
    $sql_res=mysqli_query($connect, $create_new_custom);
   if($sql_res){
    echo "data is insert";
   }else {
    echo mysqli_error($connect);
   }

?>