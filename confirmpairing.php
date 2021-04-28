<?php 
	require_once('Connection.php');
   require_once('finishbutton.php');
?>
<!DOCTYPE html>
<html>
<head>
   <title>PLacement Service</title>
</head>
<body>
   <form method="POST" action="">
      <div>
         <label>HostID</label>
         <input type="text" name="hostID" id="hostID"><br>
         <br>

         <label>Host Name</label>
         <input type="text" name="hostName" id="hostName"><br>
         <br>

         <label>Refugee ID</label>
         <input type="text" name="refID" id="refID"><br>
         <br>

         <label>Refugee Name</label>
         <input type="text" name="refName" id="refName"><br>
         <br>

         <input type="Submit" name="pair" id="pair" value="Finished">
      </div>
   </form>
</body>
</html>