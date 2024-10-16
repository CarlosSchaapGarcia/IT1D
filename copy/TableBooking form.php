<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./TableBooking form.css" rel="stylesheet" type="text/css">
    
</head>
<body background="Project/Bg.webp" class="bgImage">
<main>
    <div class="Table1">
        <h2>Table booking form</h2>
        <div class="TableForm">
            <form action=" "<?php  echo $_SERVER["PHP_SELF"]?>  method="post">
                <label for="Fname">Name</label>
                <input type="text" id ="Fname" >
                <label for="Email">Email</label>
                <input type="email" id ="Email">
                <label for="PhoneNr">Phone number</label>
                <input type="number" id ="PhoneNr" >
                <div class="TimeDiv">
                    <label for="BookDate" class="Book">Booking date</label>
                    <label for="Time" class="Time-Label">Time</label>
                </div>
                <div class="Input-Div">
                    <input type="date" id ="BookDate" >
                    <span><input type="datetime" id ="Time" ></span>
                </div>
                <label for="NrGuests">Number of guests</label>
                <input type="number" id ="NrGuests" >
                
               
                <button class="TableBookingButton">
                <h3>Reserve a table</h3>
                </button>
                

                
            </form>


        </div>
    </div>
</main>  

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = filter_input(INPUT_POST, "fname");
    $lname = filter_input(INPUT_POST, "lname");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $sports = filter_input(INPUT_POST, "sport", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $communication = filter_input(INPUT_POST, "communication");
    $sub = filter_input(INPUT_POST, "sub");
}


function CheckEmail(){
    $EmailExample = "";
    if($EmailExample != "@" || $EmailExample != ".com"){
        echo "Your email does not contain";
    }
    else{
        echo"";
    }

}

function CheckTime(){
    $Time = "";
    if(ctype_alpha($Time)){
        echo "Time contain letters";
    }
    else{
        echo"";
    }
}
CheckTime();

?>

</body>
</html>