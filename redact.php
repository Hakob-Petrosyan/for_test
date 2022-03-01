<?php
include "connect.php";

$customer_id=mysqli_real_escape_string($connect, $_POST['customers_id']);

$customer_tatas="SELECT * FROM customer_data WHERE id=$customer_id";
$geted_result=mysqli_query($connect, $customer_tatas);
while($associative_mass = mysqli_fetch_assoc($geted_result)){
 echo" 
 <input type='text' class='names'value=".$associative_mass['names']."> <br>
 <input type='number' value=".$associative_mass['phone']." class='phone' placeholder='Телефон'>
 <input type='text' class='status' value='".$associative_mass['status']."'>
 <div class='register_button'><button onclick='save_change(".$associative_mass['id'].")'>сохранить</button></div>
 <div class='register_button'><button onclick='otmena()'>отмена</button></div>
 <div class='chage_info'></div>
 ";
  
}


?>