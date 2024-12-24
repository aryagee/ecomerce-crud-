<?php
include("connect.php");
$id=$_GET['id'];
$del="DELETE FROM detail WHERE id='$id'";
$data=mysqli_query($con,$del);

if($data){
  ?>
   <script type="text/javascript">
   alert("your data deleted successfully");
   window.open('http://localhost/ec-p/admin.php','_self');

   </script>
  <?php
}
else {
  ?>
   <script type="text/javascript">
     alert('invalid ,Try again ');
   </script>
  <?php
}
 ?>
