<?php
    include('conn.php');
    $conn= new dbconn();
    $pdo=$conn->connect();
?>
<?php
    $id=$_GET['id'];
    $sql="select * from recipe where id='$id'";
    $result=$pdo->query($sql);
    $data=$result->fetch();
    $nm = strip_tags($data["name"]);
    $desc = strip_tags($data["description"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Your Food Buddy">
    <meta name="keywords" content="Your Food Buddy">
    <meta name="description" content="Your Food Buddy">
    <meta name="author" content="Your Food Buddy">
    <title>Your Food Buddy</title>
    <link rel="icon" href="images/favicon.png" type="image/icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <?php include('navbar.php'); ?>
    <section class="ingreBnrToprSec">
        <div class="row">
            <img src="images/pizza1920.jpg" alt="pizza" class="responsive-img">
        </div>
    </section>
    <section class="ingBannerSec">
        <div class="row">
            <div class="col s6 center imgProduct">
                <img src="images/<?php echo $data['image']; ?>" alt="" class="responsive-img">
            </div>
            <div class="col s6">
                <div class="divOpa">
                    <p class="category Poppins-SemiBold"><?php echo $data['category']; ?></p>
                    <h2 class="Poppins-SemiBold"><?php echo substr($nm,0,20); ?></h2>
                    <div class="row timRowIng">
                        <div class="col s4">
                            <p><span class="Poppins-SemiBold">Prep:</span> <span><?php echo $data['prep']; ?> min</span></p>
                        </div>
                        <div class="col s4">
                            <p><span class="Poppins-SemiBold">Cook:</span> <span><?php echo $data['cook']; ?> min</span></p>
                        </div>
                        <div class="col s4">
                            <p><span class="Poppins-SemiBold">Serving:</span> <span><?php echo $data['serving']; ?></span></p>
                        </div>
                    </div>
                    <p class="text-justify desc"><?php echo substr($desc,0,170); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ingreBotSec">
        <div class="container">
            <div class="row">
                <div class="col m4 s12">
                    <h2 class="Poppins-SemiBold ingredient ">Ingredients</h2>
                    <ul class="text-justify">
                    <?php echo $data['ingredient']; ?>
                    </ul>
                </div>
                <div class="col m8 s12">
                    <h2 class="Poppins-SemiBold method center">Method</h2>
                    <ul class="text-justify">
                    <?php echo $data['method']; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>