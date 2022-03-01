<?php
include "connect.php";
$subspecies=mysqli_real_escape_string($connect, $_POST['subspecies']);
  $sql_result="SELECT * FROM customer_data";
  $geted_result=mysqli_query($connect, $sql_result);
  echo"<table border=1 
  <thead>
  <tr>
     <td>ФИО</td>
     <td>Телефон</td>
     <td>Кем приходится</td>
     <td>Кнопки действий</td>
  </tr>
  </thead>";
  while($associative_mass = mysqli_fetch_assoc($geted_result)){
     echo 
     "
     <tbody>
        <tr>
        <td>".$associative_mass['names']."</td>
        <td>".$associative_mass['phone']."</td>
        <td>".$associative_mass['status']."</td>
           <td>
              <button class='del' onclick='del(".$associative_mass['id'].")'>Удалить</button><br>
              <button class='redact' onclick='redact(".$associative_mass['id'].")'>Редактировать</button>
           </td>
        </tr>
     </tbody>";
   } 
   echo "</table>";
 
?>