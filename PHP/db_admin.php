<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--
          To styling grafthke olo se scss kai me compiler dhmiourghthike to arxeio main.css. Tha prostethoun kai ta duo arxeia sto zip.
      -->
      <link href="../css/main.css" rel="stylesheet">
      
      <!-- auto einai gia thn allagh ths css-->
      <link rel="alternate stylesheet" type="text/css" href="../css/main.css" title="light-mode" />
      <link rel="alternate stylesheet" type="text/css" href="../css/main-dark.css" title="dark-mode" />
      <link rel="alternate stylesheet" type="text/css" href="../css/vision-help.css" title="vision-help" />
      <link rel="alternate stylesheet" type="text/css" href="../css/vision-help-dark.css" title="vision-help-dark" />

      <script type="text/javascript" src="../javascript/styleswitcher.js"></script>
      <script type="text/javascript" src="../javascript/voice.js"></script>

      
      <title>Neuro Labs.</title>

      <!--
          ta google fonts pou xrhsimopoihsame
      -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400;0,700;1,500&family=Noto+Serif+Display:ital,wght@1,500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
      <script defer src="javascript/form_validation.js"></script>
      
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">  
    </head>
      <body>
          <header>
              <!--
                  To logo tou site. Xwrizetai me span gia na mporoume na morfopoihsoume ta kommatia tou ksexwrista sth css.
              -->
              <a href="../index.html" class="logo">Neural <span>Labs.</span></a>
              
              <!--
                  To class "nav" afora to navigation bar kai exei 2 morfes. Sthn prwth tou morfh (mobile version) einai kleisth kai prepei na ginei
                  click panw sto svg pou periexetai gia na anoiksei. Sth deuterh morfh ths erxetai apo deksia san ena bar panw apo th selida.
              -->
              <nav>
                  <svg class="close" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.5 0.25C13.2861 0.25 10.1443 1.20305 7.47199 2.98862C4.79969 4.77419 2.71689 7.31209 1.48697 10.2814C0.257041 13.2507 -0.0647633 16.518 0.562247 19.6702C1.18926 22.8224 2.73692 25.7179 5.00952 27.9905C7.28213 30.2631 10.1776 31.8108 13.3298 32.4378C16.482 33.0648 19.7493 32.743 22.7186 31.513C25.6879 30.2831 28.2258 28.2003 30.0114 25.528C31.797 22.8557 32.75 19.7139 32.75 16.5C32.75 14.366 32.3297 12.2529 31.5131 10.2814C30.6964 8.30985 29.4994 6.51847 27.9905 5.00952C26.4815 3.50056 24.6902 2.3036 22.7186 1.48696C20.7471 0.670319 18.634 0.25 16.5 0.25ZM20.9038 18.5963C21.0561 18.7473 21.177 18.927 21.2595 19.1251C21.342 19.3231 21.3844 19.5355 21.3844 19.75C21.3844 19.9645 21.342 20.1769 21.2595 20.3749C21.177 20.573 21.0561 20.7527 20.9038 20.9038C20.7527 21.0561 20.573 21.177 20.3749 21.2594C20.1769 21.3419 19.9645 21.3844 19.75 21.3844C19.5355 21.3844 19.3231 21.3419 19.1251 21.2594C18.927 21.177 18.7473 21.0561 18.5963 20.9038L16.5 18.7913L14.4038 20.9038C14.2527 21.0561 14.073 21.177 13.8749 21.2594C13.6769 21.3419 13.4645 21.3844 13.25 21.3844C13.0355 21.3844 12.8231 21.3419 12.6251 21.2594C12.427 21.177 12.2473 21.0561 12.0963 20.9038C11.9439 20.7527 11.8231 20.573 11.7406 20.3749C11.6581 20.1769 11.6156 19.9645 11.6156 19.75C11.6156 19.5355 11.6581 19.3231 11.7406 19.1251C11.8231 18.927 11.9439 18.7473 12.0963 18.5963L14.2088 16.5L12.0963 14.4038C11.7903 14.0978 11.6184 13.6827 11.6184 13.25C11.6184 12.8173 11.7903 12.4022 12.0963 12.0963C12.4023 11.7903 12.8173 11.6184 13.25 11.6184C13.6827 11.6184 14.0978 11.7903 14.4038 12.0963L16.5 14.2088L18.5963 12.0963C18.9023 11.7903 19.3173 11.6184 19.75 11.6184C20.1827 11.6184 20.5978 11.7903 20.9038 12.0963C21.2098 12.4022 21.3817 12.8173 21.3817 13.25C21.3817 13.6827 21.2098 14.0978 20.9038 14.4038L18.7913 16.5L20.9038 18.5963Z" fill="black"/>
                  </svg>

                  <ul>
                      <li><a href="../index.html">Home</a></li>
                      <li><a href="../services.html">Services</a></li>
                      <li><a href="../activities.html">Activities</a></li>
                      <li><a href="../appointment.html">Book an appointment</a></li>
                      <li><a href="../subscription.html">Subscribe</a></li>
                      
                      
                      <li><a class="dark_mode_button" href="#" onclick="setActiveStyleSheet('dark-mode'); return false;">Dark Mode</a></li>
                      <li class="light_mode_button"><a href="#" onclick="setActiveStyleSheet('light-mode'); return false;">Light Mode</a></li>
                  </ul>
              </nav>

              <svg class="menu" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 32H0V26.6667H24V32ZM48 18.6667H0V13.3333H48V18.6667ZM48 5.33333H24V0H48V5.33333Z" fill="grey"/>
              </svg>
  
          </header>

          <div class="welcome-sect">
              <h1>Database administratrion.</h1>
          </div>

          <!-- Gia kapoio logo den mporousa na ta sundesw me th css opote ta egrapsa mesa sto style -->
            <form class="db_forms" action="db_admin.php" method="post">
                <center><button class="db_buttons" style="margin-bottom: 3em; color:white; width: 70%; background-color: #2f3e46; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;" type="submit" name="createdb">Create Database</button></center>
                <div id="dbcreated" class="emsg"></div>
            </form>

            <form class="db_forms" action="db_admin.php" method="post">
                <center><button class="db_buttons" style="margin-bottom: 3em; color:white; width: 70%; background-color: #2f3e46; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;" type="submit" name="deletedb">Delete Database</button></center>
                <div id="dbdeleted" class="emsg"></div>
            </form>

            <!-- The form for searching members -->
            <div class="welcome-sect">
              <h1>Search in Subscribers.</h1>
          </div>

            <div class = "search_form" onsubmit="return false">
                <form id="form" action="" onsubmit="" > <!-- kati allo pou tha psaxnei oxi validate-->
                    <label for="fullname">Full name<span></span></label> <!-- full name, max 50 characters and required field, must not contain special character (only one space)-->
                    <input type="text" id="fullname" name="fullname" placeholder="Full name.." minlength="5" maxlength="50" required>  
                    
                    <label for="fathername">Father name</label> <!-- first name, max 30 characters and optional field-->
                    <input type="text" id="fathername" name="fathername" placeholder="Father's name.." maxlength="30">
                    
                    <label for="age">Age<span></span></label> <!-- age, must be over 18 (less than 120?)-->
                    <input type="number" id="age" name="age" min="18" max="120" placeholder="Your age.." required>

                    <label for="telno">Phone number</label> <!-- Phone number, 10 numbers-->
                    <input type="tel" id="telno" name="telno" minlength="10" maxlength="10" placeholder="Phone number..">

                    <label for="emailadd">Email<span></span></label> <!-- Email address, max 64 characters, required-->
                    <input type="email" id="emailadd" name="emailadd" placeholder="Email address.." maxlength="64" required>

                    <label for="taxno">Tax number<span></span></label> <!-- Tax number, 9 numbers, required-->
                    <input type="text" id="taxno" name="taxno" placeholder="Tax number (AFM).." maxlength="9" required>
                    
                    <label for="securityno">Social Security number</label>
                    <input type="text" id="securityno" name="securityno" maxlength="11" placeholder="Social security number (AMKA).."> 

                    <label for="cardno">Credit card number<span></span></label>
                    <input type="text" id="cardno" name="cardno" placeholder="Credit card number" maxlength="16" required>

                    <label for="cardno">Credit card expiration date<span></span></label> 
                    <input type="date" id="cardexp" name="cardexp" placeholder="Credit card expiration date.." min='1899-01-01' max='2023-12-31' required> 

                    <label for="cardno">Cardholder's address<span></span></label> 
                    <input type="text" id="cardholder" name="cardholder" placeholder="Credit card number.." required> 

                    <label for="comments">Leave a comment</label> 
                    <input class="comments_field" type="text" id="comments" name="comments" placeholder="What's on your mind.." maxlength="250"> 

                    <button class="clear_button" id="clear_button" type="reset">Reset</button>

                    <button class="sbmt_button" id="submit_button" type="submit">Submit</button>
                </form>
            </div>
          
          <?php
           
           function database_creation()
           {
                // Creating the connection
                // 1. Get Server Name, Username, Password
                $servername;
                $username;
                $password;

                $servername = "localhost";
                $username = "root";
                $password = "";
                

                // Create connection 
                $conn = mysqli_connect($servername, $username, $password);


                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                //echo "Connected successfully";
                
                // Create database
                $sql = "CREATE DATABASE IF NOT EXISTS Subscription_Database"; // checkarei an den uparxei h vash kai th dhmiourgei (to idio kanei kai me to table apo katw)
                if ($conn->query($sql) === TRUE) {
                    $conn->query("USE Subscription_Database");
                    $conn->query("CREATE TABLE IF NOT EXISTS CLIENTS(FULLNAME VARCHAR(255), FATHERNAME VARCHAR(255), AGE INT, PHONE INT, EMAIL VARCHAR(255), AMKA VARCHAR(255), AFM VARCHAR(255), 
                    CARDNO VARCHAR(255), CARDEXP VARCHAR(255), COMM VARCHAR(255))");
                    echo "Database created successfully";
                } 
                else {
                    echo "Error creating database: " . $conn->error;
                }
            }

           function database_deletion()
           {
                // Creating the connection
                // 1. Get Server Name, Username, Password
                global $servername;
                global $username;
                global $password;

                $servername = "localhost";
                $username = "root";
                $password = "";
                
                
                // Create connection 
                $conn = mysqli_connect($servername, $username, $password);


                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                //echo "Connected successfully";

                
                // sql to delete a database
                $sql = "DROP DATABASE IF EXISTS Subscription_Database"; // an uparxei tote th svhnei alliws den kanei tipota

                if (mysqli_query($conn, $sql)) {
                    echo "Database deleted successfully";
                } else {
                    echo "Error deleting database: " . mysqli_error($conn);
                }
            }



                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['createdb']))
                {
                    database_creation();
                }

                if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deletedb']))
                {
                    database_deletion();
                }
          ?>
          
          
          
          
          


          <!--
              To script auto einai gia na mporei na anoigei kai na kleinei to side-bar otan h selida einai sth mobile morfh ths.
          -->
          <script>
              const menu = document.querySelector(".menu")
              const close = document.querySelector(".close")
              const nav = document.querySelector("nav")
  
              menu.addEventListener("click", () =>{
                  nav.classList.add("open-nav")
              })
  
              close.addEventListener("click", () =>{
                  nav.classList.remove("open-nav")
              })

              // mia idea gia ena pop up window pou tha rwtaei an o xrhsths thelei ontws na svhsei th vash
              function areYouSure() {
                var txt;
                if (confirm("Are you sure that you want to delete the database?")) {
                    txt = "You pressed OK!";
                } else {
                    txt = "You pressed Cancel!";
                }
                document.getElementById("demo").innerHTML = txt;
}


              // den to akoumpame!!!!!!!!!
                $(document).ready(function(){
                    $('.buttondb').click(function(){
                        var clickBtnValue = $(this).val();
                        var ajaxurl = 'ajax.php',
                        data =  {'action': clickBtnValue};
                        $.post(ajaxurl, data, function (response) {
                            // Response div goes here.
                            alert("action performed successfully");
                        });
                    });
                });
            

          </script>

          <!--
          <a class="zoom_in-light" href="#" onclick="setActiveStyleSheet('vision-help'); return false;"><img class="zoom_in-light" src="images/zoom_in_light.png"></a>
          <a class="zoom_out-light" href="#" onclick="setActiveStyleSheet('light-mode'); return false;"><img class="zoom_out-light" src="images/zoom_out_light.png"></a>

          <a class="zoom_in-dark" href="#" onclick="setActiveStyleSheet('vision-help-dark'); return false;"><img class="zoom_in-dark" src="images/zoom_in_dark.png"></a>
          <a class="zoom_out-dark" href="#" onclick="setActiveStyleSheet('dark-mode'); return false;"><img class="zoom_out-dark" src="images/zoom_out_dark.png"></a>

          <a class="voice_help1_light" href="#" onclick="voice_help1(); return false;"><img class="voice_help1_light" src="images/voice_light.png"></a>
          <a class="voice_help2_light" href="#" onclick="voice_help2(); return false;"><img class="voice_help2_light" src="images/voice_light.png"></a>

          <a class="voice_help1_dark" href="#" onclick="voice_help1(); return false;"><img class="voice_help1_dark" src="images/voice_dark.png"></a>
          <a class="voice_help2_dark" href="#" onclick="voice_help2(); return false;"><img class="voice_help2_dark" src="images/voice_dark.png"></a>
          -->



          


      </body>
</html>






