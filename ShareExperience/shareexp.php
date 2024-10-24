<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shareexp</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <section class="ShareExpBox">
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
                <label for="TextCommentsBoxShareXp">Comments:</label>
                <textarea name="TextCommentsBoxShareXp" id="TextCommentsBoxShareXp"></textarea>
        </div>
        <div>
            <input type="checkbox" name="ConsentReview" id="ConsentReview">
            <label for="ConsentReview">I agree that my review can be published on the website</label>
        </div>
            <input type="submit" class="SubmitReview" value="Submit Review">
        </form>
    </section>
</body>
</html>