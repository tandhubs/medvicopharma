<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include"includes/head.php" ?>
    <title>Contact</title>
</head>
<body>
<?php include"includes/header.php" ?>


<section class="contact">
<div class="bot-nav">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-main">

    <div class="contact-form">
        
        <form action="">
            <input type="text" name="fullname" id="fullname" placeholder="Full Name">
            <input type="email" name="email" id="email" placeholder="Email">

    <select class="form-control" id="subject" name="subject" required>
      <option value="" selected disabled>Choose Country </option>
        <option value="subject-one">+91 India</option>
        <option value="subject-two">+997 Nepal</option>
        <option value="subject-three">+971 Dubai (UAE)</option>
    </select>


            <input type="text" name="pnumber" id="pnumber" placeholder="Phone Number">
            <textarea name="message" id="" ></textarea>
        </form>
        <a href=""><button>Submit</button></a>
    </div>

    <div class="contact-details">
        <div class="con-det">
        <h3>Location</h3>
        <p>Gandhi Chwok, Kushinagar 274203 <br>Uttar Pradesh - INDIA</p>
        </div>

        <div class="con-det">
        <h3>Contact</h3>
        <p>+91 888 111 8389</p>
        </div>

        <div class="con-det">
        <h3>Mail</h3>
        <p>medvicopharma@gmail.com</p>
        </div>
    </div>

    </div>
</section>

<?php include"includes/footer.php" ?>
<?php include"includes/copyright.php" ?>
</body>
</html>