<?php
include('connect.php');
$id=$_GET['id'];

$select="SELECT *FROM detail WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);


 ?>
<html>
<style media="screen">
*{
  margin: 0;
  padding: 0;
}
.dmain{
  width: 100%;
  height:100vh;
  display: flex;
  align-items: center;

  justify-content: center;

}
 .data{
   background-color: lightgray;
   height: 90vh;
   width: 80%;
   padding: 20px;

 }
</style>
</html>
 <div class="dmain">
   <div class="data">


 <form action="" method="post">
<br>
    Name: <input type="text"  name="fname"value="<?php echo $row['name']; ?>" placeholder="Name"><br><br>
    Email: <input type="email"   name="mail" value="<?php echo $row['email']; ?>" placeholder="Email"><br><br>
    Inquiry <br><br> <textarea rows="10" cols="60" type='texts' name="inquiry"    placeholder="Your Inquiry"> <?php echo $row['purpose']; ?></textarea><br><br>

     <input style="background-color:#088178;  width: 100px; padding: 10px 30px; color: white; border: none; border-radius: 5px;" type="submit" name="dsubmit" value="submit"><br>
    <br>
     <a href="admin.php">Back</a>
 </form>
 <?php
 if(isset($_POST["dsubmit"])){
   $f_name=$_POST["fname"];
   $e_mail=$_POST["mail"];
   $contact=$_POST["inquiry"];

   $update="UPDATE  detail SET name='$f_name',email='$e_mail',purpose='$contact' WHERE id='$id'";

   $data=mysqli_query($con,$update);
   if($data){
    ?>
    <script type="text/javascript">
      alert("Update successfully!");
      window.open('http://localhost/ec-p/admin.php','_self');

    </script>
    <?php
   }
   else{
     ?>
     <script type="text/javascript">
       alert("oops!There is some error");
     </script>
     <?php
   }
 }
  ?>
</div>
</div>
