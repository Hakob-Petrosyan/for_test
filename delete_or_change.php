<?php
include "connect.php";

$purpose=$_POST['purpose'];

if($purpose=='delete_data'){
   $del_customer_data=mysqli_real_escape_string($connect, $_POST['del_customer_data']);
   $deleting="DELETE FROM customer_data WHERE id=$del_customer_data";
    mysqli_query($connect, $deleting);

}
else{
  $id=$_POST['customers_id'];
  $new_name=$_POST['changed_names'];
  $new_phone=$_POST['changed_phone'];
  $new_status=$_POST['changed_status'];
  
  $sql_chage="UPDATE customer_data SET names = '$new_name', phone='$new_phone', status='$new_status' WHERE id=$id";
   if(mysqli_query($connect, $sql_chage)){
      echo 'saving';
   }else{
      echo mysqli_error($connect);
   }
}
?>