<?php
    include('conn.php');
    $conn= new dbconn();
    $pdo=$conn->connect();
?>
<?php
    $sql="select * from recipe where category='INSTANT' and festivalCheck='n'";
    $result=$pdo->query($sql);
    $data=$result->fetchAll();
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php include('navbar.php'); ?>
<section class="imgNonv">
    <div class="row">
         <img src="images/instant.jpg" alt="Banner 1" class="responsive-img">
    </div>
</section>
<section class="instantRecContSec" data-aos="fade-up" data-aos-duration="1000">
    <div class="container center">
        <div class="divOpa">
        <h2 class="center Poppins-SemiBold">INSTANT RECIPES</h2>
        <p class="">Our quick and easy recipes are perfect for days when you are in no mood of elaborate cooking or to soothe away those untimely hunger pangs.</p>
        </div>
    </div>
</section>
<section class="instRecBoxSec" data-aos="fade-up" data-aos-duration="1000">
<div class="container">
        <h2 class="center Poppins-SemiBold">RECIPES</h2>
        <div class="row">
            <?php
                foreach($data as $value){
                    $totalTime=$value['prep']+$value['cook'];
                    $nm = strip_tags($value["name"]);
                    $desc = strip_tags($value["description"]);
            ?>
            <div class="col s12 m6 l4 xl3">
                <a href="ingredient.php?id=<?php echo $value['id']; ?>" class="text-black">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="images/<?php echo $value["image"]; ?>" alt="Greek Farro Salad" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <div class="row">
                        <div class="col s12">
                        <p class="text-orange Poppins-SemiBold fesName" id="recipeCat"><?php echo $value["category"]; ?></p>
                        <p class="Poppins-Bold fooName" id=""><?php echo substr($nm,0,20); ?></p>
                        <p class="recipeDesc"><?php echo substr($desc,0,115); ?>...</p>
                        <div class="row chefNameRow">
                            <div class="col s8">
                     <p class="chefName">By <span id="chefName" class=" Poppins-SemiBold"><?php echo $value["chefname"]; ?></span></p>
                            </div>
                            <div class="col s4 right-align">
                                <p class="time"><i class="fa fa-clock text-lightbrown"></i> <?php echo $totalTime; ?> Min</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            <?php
               }
            ?>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

