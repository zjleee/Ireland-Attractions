<?php include 'includes/header.php';?>
<main class="container">
  <h1>Contact us</h1>
  
<form method="POST" id="contactForm" action="contact-form-handler.php" onsubmit="formValidation"> 
<ul>
<li><label for="userid">User id:</label></li>
<li><input type="text" name="userid" id="userid" size="12" onBlur="userid_validation();"/><span id="uid_err"></span></li>
<li><label for="passid">Password:</label></li>
<li><input type="password" name="passid" id="passid" size="12" onBlur="passwd_validation();"/><span id="passwd_err"></span></li>
<li><label for="username">Name:</label></li>
<li><input type="text" name="username" id="username" size="50" onBlur="username_validation();" /><span id="name_err"></span></li>
<li><label for="address">Address:</label></li>
<li><input type="text" name="address" id="address" size="50" /><span id="add_err"></span></li>
<li><label for="country">Country:</label></li>
<li><select id="country" name="country" onBlur="country_validation();">
<option selected="" value="Default">(Please select a country)</option>
<option value="AF">Australia</option>
<option value="AL">Canada</option>
<option value="DZ">India</option>
<option value="AS">Russia</option>
<option value="AD">USA</option>
</select><span id="country_err"></span></li>
<li><label for="zip">ZIP Code:</label></li>
<li><input type="text" name="zip" id="zip" onBlur="zip_validation();" /><span id="zip_err"></span></li>
<li><label for="email">Email:</label></li>
<li><input type="text" name="email" id="email" size="50" onBlur="email_validation();"/><span id="email_err"></span></li>
<li><label id="gender">Sex:</label></li>
<li><input type="radio" name="sex" id="msex" value="Male" onBlur="gender_validation();" /><span>Male</span></li>
<li><input type="radio" name="sex" id="fsex" value="Female" /><span>Female</span><span id="gender_err"></span></li>
<li><label>Language:</label></li>
<li><input type="radio" name="language" value="en" checked /><span>English</span></li>
<li><input type="radio" name="language" value="other" /><span>Other</span></li>
<li><label for="desc">About:</label></li>
<li><textarea name="desc" id="desc"></textarea></li>
<li><input type="submit" name="submit" value="Submit" /></li>
</ul>
</form>

</main><!-- /.container -->
<script src="validation.js"></script>
<?php include 'includes/footer.php';?>
