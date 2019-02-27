<html>
  <head>
  <link href="css/hrecord.css" rel="stylesheet" type="text/css"/>
  </head>
  
  <body style="background:reportbg.jpg; background-repeat:no_repeat;">
  <div id="header">
       <p class="txt1">Health and Fitness Report</p>
	   <form action="test.php" method="post">
	   <tr>
	   <td><b>Roll no:</b></td>
	   <td><input type="text" name="roll"></td>
	   </tr>
	   
	   </p>
   </div>

   <div id="content">
   

       <p class="txt3">Body Mass Index(BMI)</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's BMI report:</td></tr>
		<tr>
		<td>Height:</td>
		<td><input type="text" name="height"></td>
		</tr>
		<tr>
		<td>Weight:</td>
		<td><input type="text" name="weight"></td>
		</tr>
		<tr>
		<td>BMI:</td>
		<td><input type="number" name="bmi"></td>
		</tr>
		<tr>
		<td>BMI Percentile:</td>
		<td><input type="number" name="bmi_per"></td>
		</tr>
		</table>
	</div>

	

	<div id="content">
       <p class="txt3">Eye Care</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's vision:</td></tr>
		<tr>
		<td>Vision:</td>
		<td><input type="text" name="vision"></td>
		</tr>
		</table>
	</div>

	<div id="content">
       <p class="txt3">Haemogram</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's blood report:</td></tr>
		<tr>
		<td>Haemoglobin:</td>
		<td><input type="text" name="haemoglobin"></td>
		</tr>
		<tr>
		<td>Haematocrit:</td>
		<td><input type="text" name="haemotocrit"></td>
		</tr>
		<tr>
		<td>RBC count:</td>
		<td><input type="text" name="rbc"></td>
		</tr>
		<tr>
		<td>WBC count:</td>
		<td><input type="text" name="wbc"></td>
		</tr>
		<tr>
		<td>Platelets count:</td>
		<td><input type="text" name="platelets"></td>
		</tr>
		<tr>
		<td>Blood Group:</td>
		<td><input type="text" name="bgrp"></td>
		</tr>
		</table>
	</div>
	
	<div id="content">
       <p class="txt3">Breathing Related</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's breathing related issues:</td>
		<td><input type="text" name="breathing_issues"></td></tr>
		</table>
	</div>

    <div id="content">
       <p class="txt3">Bone Density</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead">Your Child's BMD:</td>
		<td><input type="text" name="bmd"></td></tr>
      </table>
	</div>

	<div id="content">
       <p class="txt3">Others</p>
	    <table cellspacing="15px" cellpadding="10px">
		<tr><td colspan="3" class="subhead"></td></tr>
		<tr>
		<td>Fever Frequency:</td>
		<td><input type="text" name="fever"></td>
		</tr>
		<tr>
		<td>Food Allergies:</td>
		<td><input type="text" name="allergies"></td>
		</tr>
		<tr>
		<td>Skin Infections:</td>
		<td><input type="text" name="skin_infections"></td>
		</tr>
		<tr>
		<td>ENT Problems:</td>
		<td><input type="text" name="ent_prb"></td>
		</tr>
		<tr>
		<td>Sore throat frequencies:</td>
		<td><input type="text" name="sore_throat"></td>
		</tr>
		</table>
		<table>
		<tr>
		<td><input  class="sub" type="submit" value="Upload" name="upload"></td>
		</tr>
		</table>
	</div>
    </form>
	</body>
	</html>
   
   