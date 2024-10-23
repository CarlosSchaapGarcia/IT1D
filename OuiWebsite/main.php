<?php
        if($_SERVER["REQUEST_METHOD"] == "POST")

        {
            $fname = filter_input(INPUT_POST, "fname");
            $email = filter_input(INPUT_POST, "email");
            $phoneNr = filter_input(INPUT_POST, "phoneNr", FILTER_SANITIZE_NUMBER_INT);
            $bookDate = filter_input(INPUT_POST, "bookDate", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
            $time = filter_input(INPUT_POST, "time");
            $nrGuests = filter_input(INPUT_POST, "nrGuests", FILTER_SANITIZE_NUMBER_INT);
        }


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oui Website</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<main>
<header>
    <nav>
         <ul class="navMenuUl">
            <li><a><img src="img/Logo-02_2.png" class="Logo" alt="Oui-Logo"></a></li>
            <li class="buttons"><a href="" >Home</a></li>
            <li class="buttons"><a href="#about-page" >About us</a></li>
            <li class="buttons"><a href="#menu-page" >Menu</a></li>
            <li class="buttons"> <a href="#event-page" >Events</a></li>
            <li class="buttons"><a href="#review-page" >Reviews</a></li>
            <li class="buttons"><a href="" >Feedback</a></li>
            <li class="button-book"><a href="#bookPage" id="customLetters">Book a table</a></li>
        </ul>
    </nav>
</header>


<section class="homepage">
        <h2>Elegant, minimalistic, <br>beautiful, and timeless.</h2>
        <p>That is the French essence. <br>Café OUI captures the this spirit of France <br>and brings it to the Netherlands.</p>
        
        <p class="menuButton">
            <a href="#menuh1">Menu</a>
        </p>
    </section>
    <section class="aboutus-page" id="about-page">
        
        <container class="whydifferent">
        <p class="whyarewedifferent">Why are we different?</p>
            <div class="whybox">
                <img class="coffeebeans" src="./img/coffee-beans_1-removebg-preview.png" alt="coffee beans">
                <p class="supremebeans">Supreme Beans</p>
                <p class="beansgreattaste">Beans that provides great taste</p>
            </div>
            <div class="whybox">
                <img class="coffeebeans" src="./img/badge_1-removebg-preview.png" alt="badge">
                <p class="supremebeans">High Quality</p>
                <p class="beansgreattaste">We provide the highest quality</p>
            </div>
            <div class="whybox">
                <img class="coffeebeans" src="./img/coffee-cup_1-removebg-preview.png" alt="coffee cup">
                <p class="supremebeans"> Extraordinary</p>
                <p class="beansgreattaste">Coffee like you have never tasted</p>
            </div>
            <div class="whybox">
                <img class="coffeebeans" src="./img/best-price_1-removebg-preview.png" alt="best price">
                <p class="supremebeans">Affordable Price</p> 
                <p class="beansgreattaste">Our Coffee prices are easy to afford</p>
            </div>
        </container>
        
        <aside class="aboutus1">
            <p class="aboutus">About us</p>
            <p class="aboutustxt">Welcome to our café, where Paris meets the Netherlands. </p>
            <p class="aboutustxt">We were inspired to start a French-inspired coffee shop in the Netherlands after experiencing the charming and elegant coffee shops in Paris
                 during the Olympic Games. The ambiance, the aroma of freshly brewed coffee, and the delightful pastries created an unforgettable experience that
                  we want to bring to our community. </p>
            <p class="aboutustxt">Come by and let us bring a little bit of French magic to your day!</p>
        </aside>
    </section>

    <section class="menu" id="menu-page">
        <h1 id="menuh1">MENU</h1>
        <h2 id="menuh2">Coffee and Drinks</h2>
        <ul class="menulistA">
            <li><b>Espresso</b> - Rich and bold, a classic shot of espresso. </li>
            <li><b>Café au Lait</b> - Smooth coffee with steamed milk.</li>
            <li><b>Cappuccino</b> - Espresso with steamed milk and a thick layer of foam.</li>
            <li><b>Latte</b> - Creamy espresso with steamed milk and a light foam.</li>
            <li><b>Mocha</b> - Espresso with chocolate, steamed milk and whipped cream.</li>
            <li><b>Macchiato</b> - Espresso with a blob of frothed milk.</li>
            <li><b>Warm chocolate milk</b> - Velvety smooth, made with real chocolate.</li>
            <li><b>Tea selection</b> - A variety of fine teas, including Earl Grey, Chamomile and Green tea.</li>
            <li><b>Add-ons for drinks</b></li>
            <li><b>Flavoured syrups</b> - Vanilla, caramel, hazelnut.</li>
            <li><b>Milk options</b> - Full, skim, almond, soy, oat.</li>
        </ul>
        <h2 id="menuh2">Cakes and sweets</h2>
        <ul class="menulistB">
            <li><b>Croissant</b>- Flaky, buttery and freshly baked.</li>
            <li><b>Pain au Chocolat</b>- Croissant dough filled with rich chocolate.</li>
            <li><b>Macarons</b>- Delicate almond meringue biscuits in a variety of flavours.</li>
            <li><b>Éclair</b>- Soup dough filled with cream and garnished with chocolate.</li>
            <li><b>Tarte Tatin</b>- Caramelised apple pie.</li>
            <li><b>Madeleines</b>- Light and fluffy sponge cake in the shape of a shell.</li>
            <li><b>Crème Brûlée</b>- Creamy custard with a caramelised sugar crust.</li>
            <li><b>Financiers</b>- Small almond biscuits, perfect with coffee.</li>
        </ul>
    </section>

    <article class="EventMainBox">
    <h1 id="Eventh1">Events</h1>
       <section class="eventbox"> 
          <img class="eventPicture" src="img/eventpic.png" alt="event_picutre"> 
              <container class="EventText">
                    <p>
                      Join us for a special event at our café!  Come celebrate with us with delicious coffee, fresh croissants.
                      Come celebrate with us, enjoy great company, and experience. We can't wait to see you there!
                    </p>
                    <p>
                      We will see  you on “insert the date”!
                    </p>
             </container>
    </section>
    </article>

<section id="review-page">
    <h1 class="text-color Reviewsh1">Reviews</h1>
    <div class="container">
        <div class="scroll-container">

          <div class="box">
            <div>
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                    <div>
                        <img src="img/user3.png" alt="user1" class="ppicture">
                  </div>
                    <p class="padding-s usernameReview"><b>John Smith</b></p>
                    <p class="padding-l usernameReview"><b>"The attention to detail in both the coffee and decor is fantastic. Highly recommend!"</b></p>
            </div>
          </div>   
         <div class="box">
            <div>
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <div>
                    <img src="img/user2.png" alt="user1" class="ppicture">
                </div>
                    <p class="padding-s usernameReview"><b>Tiago Valentim</b></p>
                    <p class="padding-l usernameReview"><b>"The pastries are fresh, and the coffee is rich. My new favorite spot!"</b></p>
            </div>
         </div>
            <div class="box">
            <div>
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <div>
                    <img src="img/user1.png" alt="user1" class="ppicture">
                </div>
                    <p class="padding-s usernameReview"><b>Amanda San Martin</b></p>
                    <p class="padding-l usernameReview"><b>"Great Coffee and friendly Staff."</b></p>
            </div>
         </div>
             <div class="box">
              <div>
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <div>
                    <img src="img/user5.png" alt="user1" class="ppicture">
                </div>
                    <p class="padding-s usernameReview"><b>Rose Mills</b></p>
                    <p class="padding-l usernameReview"><b>"Lovely atmosphere, excellent coffee, and the friendliest staff."</b></p>
            </div>
         </div>
         <div class="box">
            <div>
              <img src="img/star.png" alt="star" class="star">
              <img src="img/star.png" alt="star" class="star">
              <img src="img/star.png" alt="star" class="star">
              <img src="img/star.png" alt="star" class="star">
              <img src="img/star.png" alt="star" class="star">
              <div>
                  <img src="img/user4.png" alt="user1" class="ppicture">
              </div>
                  <p class="padding-s usernameReview"><b>Ally Simmons</b></p>
                  <p class="padding-l usernameReview"><b>"The best place to grab a croissant and coffee to start your day."</b></p>
          </div>
      </div>
      <div class="box">
            <div>
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                    <div>
                        <img src="img/user3.png" alt="user1" class="ppicture">
                  </div>
                    <p class="padding-s usernameReview"><b>John Smith</b></p>
                    <p class="padding-l usernameReview"><b>"The attention to detail in both the coffee and decor is fantastic. Highly recommend!"</b></p>
            </div>
          </div>   
         <div class="box">
            <div>
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <div>
                    <img src="img/user2.png" alt="user1" class="ppicture">
                </div>
                    <p class="padding-s usernameReview"><b>Tiago Valentim</b></p>
                    <p class="padding-l usernameReview"><b>"The pastries are fresh, and the coffee is rich. My new favorite spot!"</b></p>
            </div>
         </div>
            <div class="box">
            <div>
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <div>
                    <img src="img/user1.png" alt="user1" class="ppicture">
                </div>
                    <p class="padding-s usernameReview"><b>Amanda San Martin</b></p>
                    <p class="padding-l usernameReview"><b>"Great Coffee and friendly Staff."</b></p>
            </div>
         </div>
             <div class="box">
              <div>
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <img src="img/star.png" alt="star" class="star">
                <div>
                    <img src="img/user5.png" alt="user1" class="ppicture">
                </div>
                    <p class="padding-s usernameReview"><b>Rose Mills</b></p>
                    <p class="padding-l usernameReview"><b>"Lovely atmosphere, excellent coffee, and the friendliest staff."</b></p>
            </div>
         </div>
         <div class="box">
            <div>
              <img src="img/star.png" alt="star" class="star">
              <img src="img/star.png" alt="star" class="star">
              <img src="img/star.png" alt="star" class="star">
              <img src="img/star.png" alt="star" class="star">
              <img src="img/star.png" alt="star" class="star">
              <div>
                  <img src="img/user4.png" alt="user1" class="ppicture">
              </div>
                  <p class="padding-s usernameReview"><b>Ally Simmons</b></p>
                  <p class="padding-l usernameReview"><b>"The best place to grab a croissant and coffee to start your day."</b></p>
          </div>
      </div>
    </div>
    </div>
</section>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{

function checkName($name)
{
    if(empty($name))
    {
        echo "Please enter your name";
    }
    else
    {
        checkNameLenght($name);
    }
}

function checkNameLenght($name)
{
    if(strlen($name) < 3 || strlen($name) >15)
    {
        echo "Name has to be between 3 and 15 characters long";
    }
    else
    {
        echo "Name is good";
    }

}

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
    }else{
        checkTime($time);
    }

function nrGuestsEmptyChecker($nrGuestslength)
{
    if(empty($nrGuestslength))
    {
        echo "Please enter the number of guests";
    }
    else
    {
        checkGuestsLength($nrGuestslength);
    }

}

function checkGuestsLength($nrGuestslength)
{
    if($nrGuestslength < 1 || $nrGuestslength > 99)
    {
        echo "The guest size has to be between 1 and 99";
    }
    else
    {
        echo "Guests is good";
    }

}

function PhoneNumberEmptyChecker($phoneNumberlength)
{
    if(empty($phoneNumberlength))
    {
        echo "Please enter a phone number";
    }
    else
    {
        PhoneNumberLengthChecker($phoneNumberlength);
    }

}

function PhoneNumberLengthChecker($phoneNumberlength)
{
    if(strlen($phoneNumberlength) == 9)
    {
        echo "The phone number is good";
    }
    else
    {
        echo "Invalid phone number";
    }

}

    PhoneNumberEmptyChecker($phoneNr);
    nrGuestsEmptyChecker($nrGuests);
    checkName($fname);
}


?>
<section class="main-booking" id="bookPage">
    <container class="table1">
        <h2>Table booking form</h2>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>"  method="POST">
                <label for="fname">Name</label>
                <input type="text" id ="fname" name="fname" >
                <label for="email">Email</label>
                <input type="email" id ="email" name="email">
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
    </container>
</section>

<footer>
        <div class="footerContent">
            <h3>Contact us</h3>
            <p>Email: oui@gmail.com</p>
            <p>Phone: +31 123 456 789</p>
        </div>

        <div class="footerContent">
            <h3>Follow us</h3>
            <p>
                <a href="https://www.instagram.com/"><img id="instagram" src="./img/instagram.png" alt="instagram"></a>
                <a href="https://www.facebook.com/"><img id="facebook" src="./img/facebook.png" alt="facebook"></a>
                <a href="https://x.com/"><img id="x" src="./img/x.png" alt="x"></a>
            </p>
        </div>

        <div class="footerContent">
            <h3>You can find us here</h3>
            <p>Location: Willinkplein 1</p>
            <p>City: Emmen</p>
            <p>Opening hours: Tuesday to Sunday from 9:00 to 21:00</p>
        </div>
    </footer>



</main>
</body>
</html>