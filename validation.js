//user id validation starts
function username_validation(){
    'use strict';
    var username_name = document.getElementById("username");
    var username_value = document.getElementById("username").value;
    var username_length = username_value.length;
    if(username_length<7 || username_length>12)
    {
    document.getElementById('uid_err').innerHTML = 'Value must not be less than 7 characters and greater than 12 characters';
    document.getElementById('uid_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('uid_err').innerHTML = 'Valid user id';
    document.getElementById('uid_err').style.color = "#00AF33";
    }
    }
    //user id validation ends
    //tourist validation starts
    function tourist_validation(){
    'use strict';
    var tourist_name = document.getElementById("tourist");
    var tourist_value = document.getElementById("tourist").value;
    console.log(tourist_value);
    var tourist_length = tourist_value.length; 
    if(tourist_value<=0)
    {
    document.getElementById('tourist_err').innerHTML = 'Tourist must be at least 1 person';
    document.getElementById('tourist_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('tourist_err').innerHTML = 'Valid tourist number';
    document.getElementById('tourist_err').style.color = "#00AF33";
    }
    }
    //tourist validation ends
    //user name validation starts
    function name_validation(){
    'use strict';
    var name = document.getElementById("name");
    var name_value = document.getElementById("name").value;
    var name_length = name_value.length;
    var letters = /^[0-9a-zA-Z]+$/;
    console.log(name_length, name_value);
    if(name_length < 4 || !name_value.match(letters))
    {
    document.getElementById('name_err').innerHTML = 'Name must be 4 characters long and alphanumeric chracters only.';
    document.getElementById('name_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('name_err').innerHTML = 'Valid name';
    document.getElementById('name_err').style.color = "#00AF33";
    }
    }
    //user name validation ends
    //country validation starts
    function country_validation(){
    'use strict';
    var country_name = document.getElementById("country");
    var country_value = document.getElementById("country").value;
    if(country_value === "Default" || country_value === "--")
    {
    document.getElementById('country_err').innerHTML = 'You must select a country';
    document.getElementById('country_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('country_err').innerHTML = 'Country selected.';
    document.getElementById('country_err').style.color = "#00AF33";
    }
    }
    //country validation ends
    //phone validation starts
    function phone_validation(){
    'use strict';
    var numbers = /^[0-9]+$/;
    var phone_name = document.getElementById("phone");
    var phone_value = document.getElementById("phone").value;
    var phone_length = phone_value.length;
    if(!phone_value.match(numbers) || phone_length < 9)
    {
    document.getElementById('phone_err').innerHTML = 'You must enter a phone code, which must be numeric and must be at least 9 characters long.';
    document.getElementById('phone_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('phone_err').innerHTML = 'phone code entered';
    document.getElementById('phone_err').style.color = "#00AF33";
    }
    }
    //phone validation ends
    //email validation starts
    function email_validation(){
    'use strict';
    var mailformat = /^\w+([\.\-]?\w+)*@\w+([\.\-]?\w+)*(\.\w{2,3})+$/;
    var email_name = document.getElementById("email");
    var email_value = document.getElementById("email").value;
    var email_length = email_value.length;
    if(!email_value.match(mailformat) || email_length === 0)
    {
    document.getElementById('email_err').innerHTML = 'This is not a valid email format.';
    document.getElementById('email_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('email_err').innerHTML = 'Valid email format';
    document.getElementById('email_err').style.color = "#00AF33";
    }
    }
    //email validation ends
    //gender validation starts
    function gender_validation(){
    'use strict';
    if ( (document.getElementById("msex").checked === false) && (document.getElementById("fsex").checked === false)){
    document.getElementById('gender_err').innerHTML = 'Please select a gender.';
    document.getElementById('gender_err').style.color = "#FF0000";
    document.getElementById("msex").checked = true;
    }
    else
    {
    document.getElementById('gender_err').innerHTML = 'Gender selected';
    document.getElementById('gender_err').style.color = "#00AF33";
    }
    }
    //gender validation ends

    function form_validation(){
        username_validation();
        tourist_validation();
        name_validation();
        country_validation();
        phone_validation();
        email_validation();
        alert (" Form submitted successfully");
    }

    document.getElementById("contactForm").addEventListener("submit", form_validation);