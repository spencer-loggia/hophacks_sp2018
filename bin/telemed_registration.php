<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>rent_space</title>
<link rel="stylesheet" type="text/css" href="../Styles/style_sheet.css">

</head>

<body>
<?php

?>
<form id="admin_access" name="admin_access" method="post">

</form>
<div class="container-fluid">

<form method="post" class="first_form_NotHome">

</form>
<div class="container_upcoming">
	<div id="rent_info">
    <p> Welcome to TeleMed! Please fill out this form about your symptoms.</p>
    </div>
<form id="rent_form" name="rent" method="post"  enctype = "multipart/form-data">
 	<br/><br/>
    <textarea maxlength="900"placeholder="description of symptoms (max 900 characters)"name="description" rows="10"cols="120"></textarea> <br/><br/>


   <label> Start date of Symptoms </label>
   <br/>
     <select name="month">
   		 <option value="1">January</option>
   		 <option value="2">Febuary</option>
    	 <option value="3">March</option>
   		 <option value="4">April</option>
         <option value="5">May</option>
         <option value="6">June</option>
         <option value="7">July</option>
         <option value="8">August</option>
         <option value="9">September</option>
         <option value="10">October</option>
         <option value="11">November</option>
         <option value="12">December</option>
 	 </select>

	 <input type="text" name="day" maxlength="2" placeholder="Enter two digit day"/>
	 <input type="year" name="year" maxlength="4" placeholder="Enter four digit year"/> <br/>



         <br/><br/>


          <p> We recommend you add a photo to be displayed with your event (.jpg or .png only, limit 2.5 Mb):</p>
         <input type = "file" name = "image" />

         <br/> <br/>



       <input type="submit" name="submit_rent" value="Submit"/>
       </form>

       <?php



	   ?>

       	</div>
      </div>
</body>
</html>
