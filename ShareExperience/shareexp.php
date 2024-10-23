<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shareexp</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="ShareExpBox">
        <h1>Share your experience</h1>
        
        <div class="ShareExpStarBox">
            <p>How was your expreience at our coffee shop?</p>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <input type="checkbox" name="1star" id="1star">
                <input type="checkbox" name="2star" id="2star">
                <input type="checkbox" name="3star" id="3star">
                <input type="checkbox" name="4star" id="4star">
                <input type="checkbox" name="5star" id="5star">
             </form>
        </div>
        <p>Your feedback is important to us! Please share your experience below</p>
        <div class="ShareExpCommentBox">
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <label for="Comments">Comments:</label>
                <input type="text" name="Comments" id="Comments">
            </form>
        </div>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <input type="checkbox" name="ConsentReview" id="ConsentReview">
            <label for="ConsentReview">I agree that my review can be published on the website</label>
            <input type="submit" class="SubmitReview" value="Submit Review">
        </form>
    </div>
</body>
</html>