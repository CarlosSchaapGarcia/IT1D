<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = filter_input(INPUT_POST, "fname");
    $email = filter_input(INPUT_POST, "email");
    $phoneNr = filter_input(INPUT_POST, "phoneNr", FILTER_SANITIZE_NUMBER_INT);
    $bookDate = filter_input(INPUT_POST, "bookDate", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $time = filter_input(INPUT_POST, "time");
    $nrGuests = filter_input(INPUT_POST, "nrGuests", FILTER_SANITIZE_NUMBER_INT);
    $textCommentsBoxShareXp = filter_input(INPUT_POST, "textCommentsBoxShareXp");
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
                    <li class="buttons"><a href="">Home</a></li>
                    <li class="buttons"><a href="#about-page">About us</a></li>
                    <li class="buttons"><a href="#menu-page">Menu</a></li>
                    <li class="buttons"> <a href="#event-page">Events</a></li>
                    <li class="buttons"><a href="#review-page">Reviews</a></li>
                    <li class="buttons"><a href="#share-experience-section">Feedback</a></li>
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
            <h2 class="menuh2">Coffee and Drinks</h2>
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
            <h2 class="menuh2">Cakes and sweets</h2>
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

        <article class="EventMainBox" id="event-page">
            <h1 id="Eventh1">Events</h1>
            <section class="eventbox">
                <img class="eventPicture" src="img/eventpic.png" alt="event_picutre">
                <container class="EventText">
                    <p>
                        Join us for a special event at our café! Come celebrate with us with delicious coffee, fresh croissants.
                        Come celebrate with us, enjoy great company, and experience. We can't wait to see you there!
                    </p>
                    <p>
                        We will see you soon!
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

        <section class="ShareExpBox" id="share-experience-section">
            <h1>Share your experience</h1>

            <div class="ShareExpStarBox">
                <p>How was your expreience at our coffee shop?</p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <input type="checkbox" name="1star" id="1star" class="ReviewStar">
                    <input type="checkbox" name="2star" id="2star" class="ReviewStar">
                    <input type="checkbox" name="3star" id="3star" class="ReviewStar">
                    <input type="checkbox" name="4star" id="4star" class="ReviewStar">
                    <input type="checkbox" name="5star" id="5star" class="ReviewStar">
            </div>
            <p>Your feedback is important to us! Please share your experience below</p>
            <div class="ShareExpCommentBox">
                <label for="textCommentsBoxShareXp">Comments:</label>
                <textarea name="textCommentsBoxShareXp" id="textCommentsBoxShareXp"></textarea>
            </div>
            <div>
                <input type="checkbox" name="ConsentReview" id="ConsentReview">
                <label for="ConsentReview">I agree that my review can be published on the website</label>
            </div>
            <input type="submit" class="SubmitReview" value="Submit Review" name="submit-review">
            </form>
        </section>

        <?php
        function commentlenght($text)
        {
            if (strlen($text) > 240) {
                echo "<p class='commentstylewrong'>Comment has to be under 240 characters</p>";
            } else {
                echo "<p class='commentstylegood'>Thank you for the review</p>";
            }
        }
        if (isset($_POST["submit-review"])) {
            commentlenght($textCommentsBoxShareXp);
        }

        ?>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            function checkName($name)
            {
                if (empty($name)) {
                    echo "<p class='warning'>Please enter your name</p>";
                } else {
                    checkNameLenght($name);
                }
            }

            function checkNameLenght($name)
            {
                if (strlen($name) < 3 || strlen($name) > 15) {
                    echo "<p class='warning'>Name has to be between 3 and 15 characters long</p>";
                } else {
                    echo "<p class='greenlight'>Name is good<p>";
                }
            }


            function checkTimeLength($userInputTime)
            {
                if (strlen($userInputTime) == 4 || strlen($userInputTime) == 5) {
                    checkTime($userInputTime);
                } else {
                    echo "<p class='warning'>time is incorrect</p>";
                }
            }

            function  checkTime($userInputTime)
            {
                if (is_numeric($userInputTime[0]) && is_numeric($userInputTime[2]) && is_numeric($userInputTime[3]) && $userInputTime[1] == ":") {
                    checkTime2($userInputTime);
                } else {
                    doubleCheckTime($userInputTime);
                }
            }

            function checkTime2($userInputTime)
            {
                if ($userInputTime[0] < 9) {
                    echo "<p class='warning'>we are working from 9</p>";
                } else {
                    checkTime3($userInputTime);
                }
            }

            function checkTime3($userInputTime)
            {
                if ($userInputTime[2] > 5) {
                    echo "<p class='warning'>invalid time</p>";
                } else {
                    echo "<p class='greenlight'>everything is good</p>";
                }
            }

            function doubleCheckTime($userInputTime)
            {
                if (is_numeric($userInputTime[0]) && is_numeric($userInputTime[1]) && $userInputTime[2] == ":" && is_numeric($userInputTime[3]) && is_numeric($userInputTime[4])) {
                    doubleCheckTime2($userInputTime);
                } else {
                    echo "<p class='warning'>Wrong time</p>";
                }
            }

            function doubleCheckTime2($userInputTime)
            {
                if ($userInputTime[0] > 2) {
                    echo "<p class='warning'>invalid time</p>";
                } else {
                    doubleCheckTime3($userInputTime);
                }
            }

            function doubleCheckTime3($userInputTime)
            {
                if ($userInputTime[0] == 1) {
                    checkTimeFirstNumber1($userInputTime);
                } else {
                    checkTimeFirstNumber2($userInputTime);
                }
            }
            function checkTimeFirstNumber1($userInputTime)
            {
                if ($userInputTime[3] > 5) {
                    echo "<p class='warning'>Time is incorrect</p>";
                } else {
                    echo "<p class='greenlight'>good to go</p>";
                }
            }

            function checkTimeFirstNumber2($userInputTime)
            {
                if ($userInputTime[0] == 2) {
                    checkSecondElement2($userInputTime);
                } else {
                    echo "<p class='warning'>Invalid time</p>";
                }
            }

            function checkSecondElement2($userInputTime)
            {
                if ($userInputTime[1] > 0) {
                    echo "<p class='warning'>We are working until 21:00</p>";
                } else {
                    checkFourthElement2($userInputTime);
                }
            }

            function checkFourthElement2($userInputTime)
            {
                if ($userInputTime[3] > 5) {
                    echo "<p class='warning'>Time is incorrect</p>";
                } else {
                    checkFifthElement2($userInputTime);
                }
            }

            function checkFifthElement2($userInputTime)
            {
                if ($userInputTime[4] > 0 && $userInputTime[3] == 5) {
                    echo "<p class='warning'>You can not order a table 10 minutes before closing</p>";
                } else {
                    echo "<p class='greenlight'>Congrats</p>";
                }
            }



            function nrGuestsEmptyChecker($nrGuestslength)
            {
                if (empty($nrGuestslength)) {
                    echo "<p class='warning'>Please enter the number of guests</p>";
                } else {
                    checkGuestsLength($nrGuestslength);
                }
            }

            function checkGuestsLength($nrGuestslength)
            {
                if ($nrGuestslength < 1 || $nrGuestslength > 99) {
                    echo "<p class='warning'>The guest size has to be between 1 and 99</p>";
                } else {
                    echo "<p class='greenlight'>Guests is good</p>";
                }
            }

            function PhoneNumberEmptyChecker($phoneNumberlength)
            {
                if (empty($phoneNumberlength)) {
                    echo "<p class='warning'>Please enter a phone number</p>";
                } else {
                    PhoneNumberLengthChecker($phoneNumberlength);
                }
            }

            function PhoneNumberLengthChecker($phoneNumberlength)
            {
                if (strlen($phoneNumberlength) == 9) {
                    echo "<p class='greenlight'>The phone number is good</p>";
                } else {
                    echo "<p class='warning'>Invalid phone number</p>";
                }
            }
        }


        ?>
        <section class="main-booking" id="bookPage">
            <container class="table1">



                <?php

                    if (isset($_POST["table-bookButton"])) {
                        checkName($fname);
                        PhoneNumberEmptyChecker($phoneNr);
                        if (empty($time)) {
                            echo "<p class='warning'>Time is empty</p>";
                        } else {
                            checkTimeLength($time);
                        }
                        nrGuestsEmptyChecker($nrGuests);
                    } else {


               
                    echo  '<h2>Table booking form</h2>
                        <form class="BookingForm" action="' . $_SERVER["PHP_SELF"] . '" method="POST">
                            <label for="fname">Name</label>
                            <input type="text" id="fname" name="fname">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                            <label for="phoneNr">Phone number</label>
                            <input type="number" id="phoneNr" name="phoneNr">
                            <div class="timeDiv">
                                <label for="bookDate" class="book">Booking date</label>
                                <label for="time" class="time-Label">Time</label>
                            </div>
                            <div class="input-Div">
                                <input type="date" id="bookDate">
                                <input type="text" id="time" name="time">
                            </div>
                            <label for="nrGuests">Number of guests</label>
                            <input type="number" id="nrGuests" name="nrGuests">


                            <button class="tablebook-button" name="table-bookButton" type="submit">
                                <h3>Reserve a table</h3>
                            </button>



                        </form>';
                
                    }
                
                ?>
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