<!DOCTYPE html>
<html>
<head>	
<script src = "http://ajax.googleapi.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
	div {
		margin-top: 20px;
		margin-bottom: 20px;
	}
</style>

<script>
function validateForm() {
    // you can write a code for validating your forms (if you want).
}
</script>

</head>
<body>
<form method="POST">
<div class="container">

<article>
  <form id="regform" name="regform" method="post" action="form_display.php" onsubmit="return validateform()">
    <div>
    </div>
    <h2 align="center"> Customer Form:</h2>
    <table id="table1"; cellspacing="2" cellpadding="2" align="center" border="0" >
       <tr>
              <td align="right">First name</td>
              <td><input type="TEXT" name="firstName" id = "firstName"></td>
       </tr>
      <tr>
              <td align="right">Last name</td>
              <td><input type="TEXT" name="lastName" id = "lastName"/></td>
       </tr>
      <tr>
              <td align="right">Email</td>
              <td><input type="email" name="email" id = "email"/></td>
       </tr>
        <tr>
              <td align="right">Address</td>
              <td><input type="TEXT" name="address" id = "address"/></td>
       </tr>
       <tr>
              <td align="right">City</td>
              <td><input type="TEXT" name="city"/></td>
       </tr>
   </div>
        <tr>
        <td> <input class="btns" type="submit" value="Submit" align="center"/>
        </td>
        </tr>
</table>
<?php 



?>

</body>
</html>