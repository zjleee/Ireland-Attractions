<?php include 'includes/header.php';?>
<main class="container">
  <h1>Contact us</h1>
  
<form method="POST" id="contactForm" action="contact-form-handler.php" onsubmit="formValidation"> 
<ul>
<li><label for="name">Name:</label></li>
<li><input type="text" name="name" id="name" size="50" onBlur="name_validation();" /><span id="name_err"></span></li>

<li><label for="phone">Phone:</label></li>
<li><input type="tel" name="phone" id="phone" /><span id="phone_err"></span></li>

<li><label for="email">Email:</label></li>
<li><input type="text" name="email" id="email" size="50" onBlur="email_validation();"/><span id="email_err"></span></li>

<li><label for="tourist">Tourist num:</label></li>
<li><input type="number" name="tourist" id="tourist" size="12" onBlur="tourist_validation();"/><span id="tourist_err"></span></li>

<li><label for="country">Country:</label></li>
<li><select id="country" name="country" onBlur="country_validation();">
<option selected="" value="Default">(Please select a country)</option>
<option value="AF">Australia</option>
<option value="AL">Canada</option>
<option value="DZ">India</option>
<option value="AS">Russia</option>
<option value="AD">USA</option>
</select><span id="country_err"></span></li>

<li><label for="date">Travel date:</label></li>
<li><input type="date" name="date" id="date" required/><span id="date_err"></span></li>

<li><label id="gender">Sex:</label></li>
<li><input type="radio" name="sex" id="msex" value="Male" checked /><span>Male</span></li>
<li><input type="radio" name="sex" id="fsex" value="Female" /><span>Female</span><span id="gender_err"></span></li>

<li><label>Language:</label></li>
<li><input type="radio" name="language" value="en" checked="checked" /><span>English</span></li>
<li><input type="radio" name="language" value="other" /><span>Other</span></li>

<li><label>Guide needed</label></li>
<li><input type="radio" name="guide" value="yes" /><span>Yes</span></li>
<li><input type="radio" name="guide" value="no" checked="checked"/><span>No</span></li>

<li><label for="desc">Message:</label></li>
<li><textarea name="desc" id="desc"></textarea></li>

<li><input type="submit" name="submit" value="Submit" /></li>
</ul>
</form>

</main><!-- /.container -->
<script src="validation.js"></script>
