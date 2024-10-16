<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./TableBooking form.css" rel="stylesheet" type="text/css">
</head>
 <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = filter_input(INPUT_POST, "fname");
    $email = filter_input(INPUT_POST, "email");
    $phoneNr = filter_input(INPUT_POST, "phoneNr", FILTER_SANITIZE_NUMBER_INT);
    $bookDate = filter_input(INPUT_POST, "bookDate", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $time = filter_input(INPUT_POST, "time");
    $nrGuests = filter_input(INPUT_POST, "nrGuests", FILTER_SANITIZE_NUMBER_INT);

    

    function  checkTime($vremya){
        if(is_numeric($vremya[0]) && is_numeric($vremya[3]) && $vremya[1] == ":" ){
           echo"dasdadaa";
        }else{
            doubleCheckTime($vremya);
        }
    }
    function doubleCheckTime($vremya){
        if(is_numeric($vremya[0])&& is_numeric($vremya[1]) && $vremya[2] == ":" && is_numeric($vremya[3])){
            echo"good to go";
        }else{
            echo '<h2 class="alert" >wrong time</h2>';
        }
    }

    if(empty($time) ){
        echo"Input is empty";
    }
    else{
        checkTime($time);
    }

}
    



?>
<?php
    var_dump($_POST);
?> 
<body background="Project/Bg.webp" class="bgImage">
<main>
    <div class="table1">
        <h2>Table booking form</h2>
        <div class="tableForm">
            <form action="<?php echo $_SERVER["PHP_SELF"]?>"  method="POST">
                <label for="fname">Name</label>
                <input type="text" id ="fname" name="fname" >
                <label for="email">Email</label>
                <input type="email" id ="email" name="fname">
                <label for="phoneNr">Phone number</label>
                <input type="number" id ="phoneNr" name="phoneNr">
                <div class="timeDiv">
                    <label for="bookDate" class="book">Booking date</label>
                    <label for="time" class="time-Label">Time</label>
                </div>
                <div class="input-Div">
                    <input type="date" id ="bookDate" >
                    <input type="text" id ="time" name="time"> 
                </div>
                <label for="nrGuests">Number of guests</label>
                <input type="number" id ="nrGuests" name="nrGuests" >
                
               
                <button class="tablebook-button">
                <h3>Reserve a table</h3>
                </button>
                

                
            </form>


        </div>
    </div>
</main>  



</body>
</html>