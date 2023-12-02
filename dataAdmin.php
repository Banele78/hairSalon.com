<?php include('serverUpload.php')?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table{
            width:100%;
            border-collapse: collapse;
        }
        table, th, td{
            border: 1px solid;
            text-align: center;
        }

        th{
            height: 60px;
            background-color: #ccc;
        }

        img{
            width:20%;
            
        }

        .imageCol{
            width: 500px;
        }

              
    </style>


</head>

<body>

    <div class="data">
        <form method="post" action="dataAdmin.php" enctype="multipart/form-data">
        <table>
            <tr>
                <th>ID</th>
                <th>Hairstyle name</th>
                <th>Cost</th>
                <th>Catagory</th>
                <th>Time it takes</th>
                <th>Image</th>               
                <th>Delete</th>
            </tr>
            <tr>
                <?php
                while($row=mysqli_fetch_assoc($result)){

                ?>
                <td><?php echo $row['id'];?></td>
                <!--Col for hairstyle name-->
               
               
              
                <td><input type="button" value="Delete"></td>
                
            </tr>
            <?php
                }

            ?>

        </table>

        <div class=""><br>
               <input type="button" value="Edit"  onclick="myFunctionName()" >
               
            <span class="t" id="">Hairstyle name...<input type="text" value="" name="id">
            <input type="text" value="" name="name">
            <input type="submit" value="Change" name="Button_Name" >
        </span>
          </div>
        </form>
    </div>


    

</body>
<script>
        // When the user clicks on <div>, open the popup
        

        function myFunctionName() {
           
           var popup = document.getElementById("myPopup");
           popup.classList.toggle("show");
         };

         function myFunctionCost() {
           
           var popup = document.getElementById("myPopupCost");
           popup.classList.toggle("show");
         };

         function myFunctionCatagory() {
           
           var popup = document.getElementById("myPopupCatagory");
           popup.classList.toggle("show");
         };

         function myFunctionTime() {
           
           var popup = document.getElementById("myPopupTime");
           popup.classList.toggle("show");
         };

         function myFunctionImage() {
           
           var popup = document.getElementById("myPopupImage");
           popup.classList.toggle("show");
         };


        </script>

</html>