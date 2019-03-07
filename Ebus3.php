
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
  
    </head>
    <body>
        <h1 style="text-align: center">Receipt</h1>
        <div class="bg">
            
        <!-- // Starting the session to get the session variable from last page-->
      
        <?php
       
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo " The name is : ".$fullNameValue.".";
        echo "<br></br>";
        echo "The total value is : ".$totalValue2.".";
        ?>
    
         
        </div>
   </body>
       
</html>

