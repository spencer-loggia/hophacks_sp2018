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

	<p> Please check off all problems you are experiencing.</p>

	<input type="checkbox" name="symptom" value="abormal_bleeding" /> Abnormal Bleeding
  <input type="checkbox" name="symptom" value="alcohol_abuse" /> Alcohol Abuse
  <input type="checkbox" name="symptom" value="arthiritis" /> Arthiritis
	<input type="checkbox" name="symptom" value="cancer" /> Cancer
	<input type="checkbox" name="symptom" value="diabetes" /> Diabetes
	<input type="checkbox" name="symptom" value="difficulty_breathing" /> Difficulty Breathing
	<input type="checkbox" name="symptom" value="drug_abuse" /> Drug Abuse
  <input type="checkbox" name="symptom" value="fainting_spells" /> Fainting Spells
	<input type="checkbox" name="symptom" value="fever" /> Fever
	<input type="checkbox" name="symptom" value="frequent_headaches" /> Frequent Headaches
	<input type="checkbox" name="symptom" value="hiv_aids" /> HIV and/or AIDS
	<input type="checkbox" name="symptom" value="heart_attack" /> Heart Attack
	<input type="checkbox" name="symptom" value="high_blood_pressure" /> High Blood Pressure
	<input type="checkbox" name="symptom" value="joint_pain" /> Joint Pain
	<input type="checkbox" name="symptom" value="kidney_problems" /> Kidney Problems
	<input type="checkbox" name="symptom" value="low_blood_pressure" /> Low Blood Pressure
	<input type="checkbox" name="symptom" value="std" /> Sexually Transmitted Disease
	<input type="checkbox" name="symptom" value="stroke" /> Stroke
	<input type="checkbox" name="symptom" value="sinus_problems" /> Sinus Problems
	<input type="checkbox" name="symptom" value="thyroid_problems" /> Thyroid Problems

	 <p>  </p>

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

	 <p>  </p>

		<textarea maxlength="900"placeholder="description of symptoms (max 900 characters)"name="description" rows="10"cols="120"></textarea> <br/><br/>


			<br/><br/>


          <p> We recommend you add a photo to be displayed with your event (.jpg or .png only, limit 2.5 Mb):</p>
         <input type = "file" name = "image" />

         <br/> <br/>

				 <textarea maxlength="900"placeholder="pre-existing conditions"name="description" rows="10"cols="120"></textarea> <br/><br/>




       <input type="submit" name="submit_rent" value="Submit"/>
       </form>

       <?php



	   ?>

       	</div>
      </div>
</body>
</html>
