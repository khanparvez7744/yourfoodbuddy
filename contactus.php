<?php
    include('conn.php');
    $conn= new dbconn();
    $pdo=$conn->connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Your Food Body">
    <meta name="keywords" content="Your Food Body">
    <meta name="description" content="Your Food Body">
    <meta name="author" content="Your Food Body">
    <title>Your Food Body</title>
    <link rel="icon" href="images/favicon.png" type="image/icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php include('navbar.php'); ?>
    <section class="contactSec">
        <div class="container">
            <div class="row frsRowCon">
                <div class="col l12 m12 s12">
                <h2 class="Poppins-SemiBold">Contact Us</h2>

                </div>
                <div class="col l6 m6 s12">
                 <div class="row">
                    <form class="col s12" method="post">
                    <div class="row">
                        <div class="col s6">
                            <input name="fname" placeholder="Enter First Name" type="text" required class="browser-default w-100 form-control">
                        </div>
                        <div class="col s6">
                            <input name="lname" placeholder="Enter Last Name" type="text" required class="browser-default w-100 form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <input name="email" placeholder="Enter Email Address" type="email" required class="browser-default w-100 form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <input name="phone" id="phone" placeholder="Enter Phone Number" type="text" required class="browser-default w-100 form-control" maxlength="10">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <input name="website" placeholder="Enter Website" type="text" required class="browser-default w-100 form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <input name="subject" placeholder="Enter Subject" type="text" required class="browser-default w-100 form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <input name="message" placeholder="Enter Message" type="text" required class="browser-default w-100 form-control formMessage">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                          <button name="submit" type="submit" class="btn btnSubmit">Submit</button>
                        </div>
                    </div>
                    </form>
                 </div>
                </div>
                <div class="col s12 m6 l6 center contactRightCol">
                    <img src="images/girlContact.jpg" alt="Girl" class="responsive-img rounded">
                    <h5 class="Poppins-SemiBold">HI! I'M SIMA.</h5>
                    <h4 class="text-grey Poppins-ThinItalic">nice to meet you!</h4>
                    <p class="text-grey">I'm a former 4th grade teacher, now full time blogger. My husband Alok and I live in Noida. Favorite things include my camera, lake days, and dark chocolate.</p>
                    <a href="aboutus.php" class="learnBtn text-orange Poppins-SemiBold">LEARN MORE</a>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.7340238614865!2d77.35401061549489!3d28.607754991951957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1fbeea009d3%3A0x8f1e25d8e7358b34!2sSociapa!5e0!3m2!1sen!2sin!4v1644045747927!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        </div>
    </section>

<?php
if(isset($_POST["submit"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $website=$_POST["website"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    $sql="insert into contact(fname,lname,email,phone,website,subject,message,created_at) values('$fname','$lname','$email','$phone','$website','$subject','$message',NOW())";
    if($pdo->query($sql)){
        echo "<script>swal('Data Saved Successfully', 'I will connect you in soon', 'success');</script>";
        $to = "web@sociapa.com";
        $from       = 'YourFoodBuddy <no-reply@sociapainfluencer.com>';
        $fromname   = 'YourFoodBuddy';
        $subject = "'You\'ve been contacted by $fname";
        $headers = "From: ".$fromname." <".$from."> \r\n";
        $headers   .= "Reply-To: ". $email . "\r\n";
        $headers   .= "MIME-Version: 1.0\r\n";
        $headers   .= "Content-type: text/html; charset=utf-8\r\n";
        $headers   .= "X-Mailer: PHP". phpversion() ."\r\n" ;
        $msg  = "<table style='max-width:600px;width: 100%;'>\r\n\n";
        $msg .= "<tr><td>Name</td><td>:</td><td>".$fname."</td></tr>\r\n\n";
        $msg .= "<tr><td>Email Address</td><td>:</td><td>".$email."</td></tr>\r\n\n";
        $msg .= "<tr><td>Contact</td><td>:</td><td>".$phone."</td></tr>\r\n\n";
        $msg .= "<tr><td>Message</td><td>:</td><td>".$message."</td></tr>\r\n\n";
        $msg .= "-----------------------------------------\r\n";
        $result= mail($to,$subject,$message,$headers);
    }
    else{
       echo "<script>swal('Data Not Saved');</script>";
    }
}
?>
    <?php include('footer.php'); ?>
