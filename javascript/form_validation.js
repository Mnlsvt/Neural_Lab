function check(event) {
    // (C1) INIT
    var valid = true, error = "", field = "";

    // (C2) FULLNAME
    var fullname = document.getElementById("fullname").value;
    var fullnameRGEX = /^[a-zA-Z]+\s[a-zA-Z]+$/;
    var fullnameResult = fullnameRGEX.test(fullname);

    field = document.getElementById("fullname");
    error = document.getElementById("cname");
    if (fullnameResult == false) {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "Please fill in your name with a space between the first and the last name (Don't use characters like !@#$%^& etc)\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }

    // (C2) FATHER_NAME
    var fathername = document.getElementById("fathername").value;
    var fathernameRGEX = /^[a-zA-Z]+\S$/;                       // Logw autou to expression de dexetai ellhnikous xarakthres
    var fathernameResult = fathernameRGEX.test(fathername);

    field = document.getElementById("fathername");
    error = document.getElementById("cfathername");
    if (fathernameResult == false && fathername != "") {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "Please fill in your father's first name only (Don't use characters like !@#$%^& etc)\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }

    // (C3) AGE
    field = document.getElementById("age");
    error = document.getElementById("cage");
    if (!field.checkValidity()) {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "To subscribe to our lab you have to be over 18 years old.\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }

    // (C3) PHONENUMBER
    field = document.getElementById("telno");
    error = document.getElementById("ctelno");
    if (!field.checkValidity()) {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "Phone number must be 10 digits.\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }

    // (C3) EMAIL
    field = document.getElementById("emailadd");
    error = document.getElementById("cemailadd");
    if (!field.checkValidity()) {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "Email must be less than 64 characters and in proper email format (localname@domain).\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }

    // (C3) AFM
    var taxno = document.getElementById("taxno").value;
    var taxnoRGEX = /^\d{9}$/;
    var taxnoResult = taxnoRGEX.test(taxno);

    field = document.getElementById("taxno");
    error = document.getElementById("ctaxno");
    if (taxnoResult == false) {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "Tax number(AFM) must be 9 digits (0-9).\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }

    // (C3) AMKA
    var amka = document.getElementById("securityno").value;
    var amkaRGEX = /^\d{11}$/;                                
    var amkaResult = amkaRGEX.test(amka);

    field = document.getElementById("securityno");
    error = document.getElementById("csecurityno");
    if ((amkaResult == false && amka != "")) {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "Security number must be 11 digits (0-9).\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }

    // (C3) CARD-NUMBER
    var cardno = document.getElementById("cardno").value;
    var cardnoRGEX = /^\d{16}$/;                                 
    var cardnoResult = cardnoRGEX.test(cardno);

    field = document.getElementById("cardno");
    error = document.getElementById("ccardno");
    if ((cardnoResult == false)) {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "Card number must be 16 characters.\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }

    // (C2) CARDHOLDER'S-ADDRESS
    var cardholder = document.getElementById("cardholder").value;
    var cardholderRGEX = /[0-9A-Za-z ]/;         // alfarithmitiko!
    var cardholderResult = cardholderRGEX.test(cardholder);

    field = document.getElementById("cardholder");
    error = document.getElementById("ccardholder");
    if (cardholderResult == false || cardholder == "") {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "This field cannot be blank. (Don't use characters like !@#$%^& etc)\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }

    // (C3) COMMENTS
    field = document.getElementById("comments");
    error = document.getElementById("ccomments");
    if (!field.checkValidity()) {
        valid = false;
        field.classList.add("err");
        error.innerHTML = "Leave a comment that is less than 250 characters.\r\n";
        event.preventDefault();
    } else {
        field.classList.remove("err");
        error.innerHTML = "";
    }
}
