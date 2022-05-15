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
      
      <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">  
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
                      <li><a href="subscription.php">Subscribe</a></li>
                      
                      
                      <li><a class="dark_mode_button" href="#" onclick="setActiveStyleSheet('dark-mode'); return false;">Dark Mode</a></li>
                      <li class="light_mode_button"><a href="#" onclick="setActiveStyleSheet('light-mode'); return false;">Light Mode</a></li>
                  </ul>
              </nav>

              <svg class="menu" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 32H0V26.6667H24V32ZM48 18.6667H0V13.3333H48V18.6667ZM48 5.33333H24V0H48V5.33333Z" fill="grey"/>
              </svg>
  
          </header>
    <body>
        <center>
            <?php
        
                $servername = "localhost";
                $username = "root";
                $password = "";
                // database name => RESDB
                $conn = mysqli_connect($servername, $username, $password);
                
                // Check connection
                if($conn === false){
                    die("ERROR: Could not connect. " 
                        . mysqli_connect_error());
                }

                $conn->query("USE RESDB");
                
                // Taking all 5 values from the form our search form
                $fullname =  $_REQUEST['fullnamesearch'];
                $age =  $_REQUEST['agesearch'];
                $taxno = $_REQUEST['taxnosearch'];
                $comments = $_REQUEST['commentssearch'];

                // Performing select query execution
                // here our table name is clients

                // Building the sql string for the multiple SELECT combinations
                $sql = "SELECT * FROM CLIENTS WHERE ";
                $k = 0;
                
                if ($fullname != "")
                {
                    if ($k == 0){
                        $k = 1;
                        $sql .= "FULLNAME LIKE '%$fullname%' ";
                    }
                    else
                    {
                        $sql .= "AND FULLNAME LIKE '%$fullname%' ";
                    }
                }
                if ($taxno != "")
                {
                    if ($k == 0){
                        $k = 1;
                        $sql .= "AFM = '$taxno' ";
                    }
                    else
                    {
                        $sql .= "AND AFM = '$taxno' ";
                    }
                }
                if ($age != "")
                {
                    if ($k == 0){
                        $k = 1;
                        $sql .= "AGE = '$age' ";
                    }
                    else
                    {
                        $sql .= "AND AGE = '$age' ";
                    }
                }
                if ($comments != "")
                {
                    if ($k == 0){
                        $k = 1;
                        $sql .= "COMMENTS LIKE '%$comments%' ";
                    }
                    else
                    {
                        $sql .= "AND COMMENTS LIKE '%$comments%' ";
                    }
                }

                if(mysqli_query($conn, $sql)){ // trexei th SELECT kai pairnei ta apotelesmata
                    $result = $conn->query($sql);
                    echo nl2br("<h2>Here are the resutls of your search.\r\n" 
                        . " If nothing shows up, the registration that you are looking for does not exist in the database</h2>\r\n\r\n");
                    
                    foreach($result as $row) { // gia kathe apotelesma pou vrhke emfanizei olo to row tou table
                        echo nl2br("<h2>Fullname:</h2>\n<h3>" . $row['FULLNAME'] . "</h3>\r\n\r\n" . "<h2>Fathername:</h2>\n<h3>" . $row['FATHERNAME'] . "</h3>\r\n\r\n" . "<h2>Age:</h2>\n<h3>" . $row['AGE'] . 
                        "</h3>\r\n\r\n" . "<h2>Phone number:</h2>\n<h3>" . $row['PHONE'] . "</h3>\r\n\r\n" . "<h2>Email:</h2>\n<h3>" . $row['EMAIL'] . "</h3>\r\n\r\n" . "<h2>Tax number(AFM):</h2>\n<h3>" . $row['AFM'] . "</h3>\r\n\r\n" .
                        "<h2>Social Security number (AMKA):</h2>\n<h3>" . $row['AMKA'] . "</h3>\r\n\r\n" . "<h2>Credit card number:</h2>\n<h3>" . $row['CARDNO'] . "</h3>\r\n\r\n" . "<h2>Credit card expiration date:</h2>\n<h3>" . $row['CARDEXP'] . "</h3>\r\n\r\n" .
                        "<h2>Cardholder's address:</h2>\n<h3>" . $row['CARDHOLDADDRESS'] . "</h3>\r\n\r\n" . "<h2>Comments:</h2>\n<h3>" . $row['COMM'] . "</h3>\r\n\r\n");
                    }    
                } else{
                    echo "ERROR: Hush! Sorry $sql. " 
                        . mysqli_error($conn);
                }

                // Close connection
                mysqli_close($conn);
            ?>
            </center>

    </body>
    
</html>