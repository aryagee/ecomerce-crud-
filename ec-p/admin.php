<?php
include("connect.php")
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>




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
        text-align: center;

      }
      .active{
        display: flex;
      }
      .hidden{
        display: none;
      }
      table{
        width: 100%;
        border-collapse: collapse;
      }
      th{
        height: 40px;
      }
      tr{
        height: 30px;
      }
      td{
        text-align: center;
      }
      td a{
        text-decoration: none;
        color: red;
      }

     </style>
   </head>
   <body>
     <div class="dmain hidden ">
       <div class="data">
         <h1>Client Requests</h1><br>
         <table border="1">
 <tr >

   <th width='10%'>Name</th>
   <th width='20%'>Email</th>
   <th width='40%'>Inquiry</th>
   <th width='10%' colspan="2">action</th>
 </tr>
 <?php
 $query="SELECT *FROM detail ";
 $data=mysqli_query($con,$query);


   while ($rows=mysqli_fetch_array($data)) {
     ?>
     <tr>
        <td><?php echo $rows['name']; ?></td>
         <td><?php echo $rows['email']; ?></td>
         <td><?php echo $rows['purpose']; ?></td>
       <td><a href="update.php?id=<?php echo $rows['id']; ?>">edit</a></td>
        <td><a onclick="return confirm ('are you sure want to delete?')" href="delete.php?id=<?php echo $rows['id']; ?>">delete</a></td>

     </tr>
     <?php
   }


  ?>
</table>
<script type="text/javascript">
 let name= prompt("Enter admin name");
     let pass = prompt("Enter admin password");



     let main = document.querySelector('.dmain');


     if (pass === "11223344" && name==='azlan') {
       if (main) {
         main.classList.remove('hidden');
         alert("Successfully authenticated!");
       }
     } else {
       alert("You entered the wrong information!");
     }

 </script>
       </div>
     </div>
   </body>
 </html>
