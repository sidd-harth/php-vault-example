<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         h1 {
         text-align: center;
         font-family: Bahnschrift SemiBold;
         }
         table, td, th {
         border: 1px solid black;
         height: 50px;
         }
         table {
         border-collapse: collapse;
         width: 100%;
         }
         .center {
         display: block;
         margin-left: auto;
         margin-right: auto;
         width: 50%;
         }
         td {
         text-align: center;
         height: 50px;
         vertical-align: center;
         font-family: Bahnschrift SemiBold;
         }
         tr {
         text-align: center;
         height: 50px;
         vertical-align: center;
         font-family: Bahnschrift SemiBold;
         }
      </style>
   </head>
   <body>
      <?php
         echo '<img src="https://raw.githubusercontent.com/sidd-harth/aio/master/images/valut.png" class="center"><br/><br/>';
         
         echo "<table border='3'>
         <tr>
			 <th><h2>Course</h2></th>
			 <th><h2>Demo</h2></th>
         </tr>
         <tr>
			 <td><h3>DevSecOps - Kubernetes, DevOps & Security</h3></td>
			 <td><h3>HashiCorp Vault - Secret Injection through SideCar</h3></td>
         </tr>";
         echo "</table><br/>";
          
             $servername = "mysql:3306";
             $conn = new mysqli($servername, $_ENV["username"], $_ENV["password"]);
         
             if ($conn->connect_error){
         	
         		echo "<body style='background-color:red'>";
         		echo "MySQL Connection Failed<br/>";
                 die("Connection failed:".$conn->connect_error);
             }
             echo "<body style='background-color:darkgreen'>";
             echo '<h1 style="border: 2px solid DodgerBlue;color:white;"> PHP App Connected to MySQL Successfully  <i class="fa fa-thumbs-up" style="font-size:36px;color:white"></i><i class="fa fa-thumbs-up" style="font-size:36px;color:lightblue"></i><i class="fa fa-thumbs-up" style="font-size:36px;color:yellow"></i></h1><br/><br/>';
         
             $conn->close();
         
         
         ?>
   </body>
</html>