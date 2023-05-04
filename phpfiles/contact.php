<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="website icon" type="jpg" href="../img/Björn.jpg">
    <title>Contact</title>
</head>
<body>
<h1>contact</h1>
    <nav>
        <ul class="navul">
            <li><a href="../phpfiles/aboutMe.php">Over mij</a></li>
            <li><a href="../phpfiles/pictures.php">Foto's</a></li>
            <li><a href="../phpfiles/iKnowThis.php">Wat ik kan</a></li>
            <li><a href="../phpfiles/myCV.php">mijn CV</a></li>
            <li><a href="../phpfiles/contact.php">Contact</a></li>
        </ul>
        <a href="../index.php"><img class="profpic" src="../img/Björn.jpg" alt="my profile picture"></a>
        <ul class="logos">
            <a href="#"><img class="logo" src="../img/211904_social_github_icon.png" alt="github"></a>
            <a href="#"><img class="logo" src="../img/4691240_instagram_icon.png" alt="instagram"></a>
        </ul>
    </nav>
    <form action="../phpfiles/contactQuery.php" method="post">
        <div class="elem-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="elem-group">
            <label for="email">Your E-mail</label>
            <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
        </div>
        <div class="elem-group">
            <label for="title">Reason For Contacting Us</label>
            <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
        </div>
        <div class="elem-group">
            <label for="message">Write your message</label>
            <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</body>
</html>