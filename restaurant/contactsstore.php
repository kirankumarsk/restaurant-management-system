<!DOCTYPE html>
<html>
<head>
 <title>STORED CONTACTS</title>
 <style>
  b{
    font-size: 20px;
    font-family: 'Arial';
    padding: 2px;
    text-align: center;
}
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 15px;
   text-align: left;
   font-family:"Verdana";
   font-weight: bold;
   text-align: center;
   
  } 
  th 
  {
   background-color: maroon;
   color: white;
   
  }
  h1{
    font-family: "times new roman";
    font-size: 40px;
    border: 9px solid grey;
    border-radius: 17px;
     color: maroon;
  }
  td{
    padding: 12px;
    font-family: "Verdana";
  
  }
  tr:nth-child(even) {background-color: #87CEFA; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-color: lavender">
  <h1><center><font style="border:9px solid grey"> STORED PROCEDURE OF CONTACTS TABLE </font></center></h1>
 <table>
 <tr>
  <th><br>MGR_ID<br><br></th> 
  <th><br>PHONE_NUM<br><br></th> 
  <br><br>
 </tr>
 
     <?php

$host="localhost";
$user="root";
$password="";
$con= new mysqli($host,$user,$password,"restaurant");
echo " Creating stored procedure<br/>";

$sql3="create procedure display8() select * from contacts";
mysqli_query($con,$sql3);
echo "Procedure  created successfully<BR/>";


echo " Calling Stored Procedure<BR/>";
if ($result = mysqli_query($con,"call display8()"))
   {
     
      while($row = mysqli_fetch_assoc($result))
      {
		         echo "<tr><td>" . $row["MGR_ID"]. "</td><td>" .$row["PHONE_NUM"]. "</td></tr>";
      }
      echo "</table>";
      }
      else {
	  		    echo "0 results"; 
	  		}

	$con->close();
		?>
     
     
     
</table>
    <p style="font-family: Black And White Picture"><a href="contacts.html"><font style="color:black">GO BACK</font></a></p>
</body>
</html>