<?php

include "header.php";
include "database.php";

$sql="SELECT id, fullname,email FROM users"; //we can use * except of id,fullname and mail .we used this so that this is selected one.
$result=mysqli_query($con,$sql);

if (mysqli_num_rows($result)>0){
?>
<div style="width:30%;background:#AED6F1;
            margin-left:10px;margin-right:10px;margin-top:40px;
            color:black ;font-size:30px;">

<table border="1" >
    <tr style=background:#7DCEA0;>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Action</th>
    <?php
    while($row=mysqli_fetch_assoc($result)){
?>
<tr>
       <td><?php echo $row["id"];?></td>
       <td><?php echo  $row["fullname"];?></td>
       <td><?php echo $row["email"];?></td>
       <td><a href="edit_user.php">Edit User</a></td>
    </tr>
    <?php
    }
    ?>
    </table>
    <?php
}else{
    echo "data not found";

}
mysqli_close($con);

?>