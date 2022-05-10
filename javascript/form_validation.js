function validation()
{   
    
    var form = document.getElementById("form")

    // Full name one space between, no special chars
    var fullname = document.getElementById("fullname").value;
    var fullnameRGEX = /^[a-zA-Z]+\s[a-zA-Z]+$/;
    var fullnameResult = fullnameRGEX.test(fullname);

    if(fullnameResult == false)
    {
        alert("Please input your first name and last name separated by a single space and don't use special characters");
    }
  
    // var fathername = document.getElementById("fathername")
    // var age = document.getElementById("age")
    // var phone = document.getElementById("telno")
    // var email = document.getElementById("emailadd")
    // var taxno = document.getElementById("taxno")
    // var securityno = document.getElementById("securityno")

    

}