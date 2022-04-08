<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>About us </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
<style>
body {
  background-color: yellowgreen;
  text-align: center;
  font-size:25px;
  color:blue;
}
</style>
</head>

<body backgroundcolor="Yellow">
<div className="footer">
      <div className="footer">
        <h2  style="font-size: 75px ;">  About us </h1>
       <p style="border: 4px dotted #000000 font-size: 65px;">
        A simple project based on Online Examination Management System which uses PHP Language.         </p>
        <p style="border: 4px dotted #000000 font-size:65px;" style="color:Red;">
        Moving on, this examination system project in PHP focuses mainly on dealing with students regarding their respective exams and scorings. Also, the system displays all the available data such as student details, rankings/history, and the number of questions with their respective marks. The project is divided into two categories: Admin Panel, and Teacher’s Panel. In an overview of this web app, the admin has access to create exam questions as well as viewing users’ rank. Talking more about the project, the admin can view rankings of each user based upon their respective scores. In terms of adding exams, an admin has to fill up examination details such as title, a total number of questions, marks, deduction marks, total time, tags, etc, and then he/she has to add the question with options and mark the right answer. Lastly, the admin can view and manage feedbacks of the system.
        </p>
        <p style="border: 4px dotted #000000 font-size: 65px;">
        Besides, the student can only view ranks, his/her history, and attend exams (which is totally based on multiple choise question), but he/she restart the exam too as per their own choice. After completing each exam, the system displays overall results like total questions, a number of right and wrong answers, time with overall scores of that particular student. Later on, the student can view the changes in the user ranking section. Under the ranking section, the system arranges the highest score on the top position whereas the lowest on the last within the top 8 scorers. On the other hand, the history section is for showing the user’s attempt to pass the exams with scores and information like the number of attempt questions, number of right and wrong answers with each exam’s title.


</p>
    </div>
    </div>
</body>