<?php
    include('conn.php');
    $conn= new dbconn();
    $pdo=$conn->connect();
?>
<?php
    $sql_i="select * from recipe where category='INSTANT' and festivalCheck='n'";
    $result_i=$pdo->query($sql_i);
    $data_i=$result_i->fetchAll();
?>
<?php
    $sql_v="select * from recipe where category='VEG' and festivalCheck='n'";
    $result_v=$pdo->query($sql_v);
    $data_v=$result_v->fetchAll();
?>
<?php
    $sql_n="select * from recipe where category='NONVEG' and festivalCheck='n'";
    $result_n=$pdo->query($sql_n);
    $data_n=$result_n->fetchAll();
?>
<?php
    $sql_b="select * from recipe where category='BEVERAGES' and festivalCheck='n'";
    $result_b=$pdo->query($sql_b);
    $data_b=$result_b->fetchAll();
?>
<?php
    $sql_f="select * from recipe where festivalCheck='y'";
    $result_f=$pdo->query($sql_f);
    $data_f=$result_f->fetchAll();
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
</head>
<body>
<?php include('navbar.php'); ?>
<section class="bnrSec">
  <div class="row">
      <div class="col s12 center">
        <h1 class="findRecH1 Poppins-SemiBold">Find a Recipe</h1>
        <form method="post" action="search.php" class="d-flex bigSearch">
            <input type="search" name="search" required placeholder="Search Recipe..." class="browser-default">
            <button class="btn btnBigSearch" type="submit"><i class="fa fa-search"></i></button>
        </form>
     </div>
  </div>
</section>
<section class="foodTabSec">
    <div class="container">
        <h2 class="center Poppins-SemiBold">OUR RECIPES</h2>
        <div class="row circleRec">
            <div class="col s6 m6 l3 center">
                <div class="ouRecDiv">
                    <a href="instant-recipes.php" id="insClick">
                        <img src="images/instantFood400.jpg" alt="Instant Food" class="responsive-img rounded-10">
                    </a>
                    <div class="ourFood">Instant Recipe</div>
                </div>
            </div>
            <div class="col s6 m6 l3 center">
                <div class="ouRecDiv">
                    <a href="veg-recipes.php" id="vegClick">
                        <img src="images/vegFood400.jpg" alt="Instant Food" class="responsive-img rounded-10">
                    </a>
                    <div class="ourFood">Veg Recipe</div>
                </div>
            </div>
            <div class="col s6 m6 l3 center">
                <div class="ouRecDiv">
                    <a href="nonveg-recipes.php" id="nonvegClick">
                        <img src="images/nonvegFood400.jpg" alt="Instant Food" class="responsive-img rounded-10">
                    </a>
                    <div class="ourFood">Non Veg Recipe</div>
                </div>
            </div>
            <div class="col s6 m6 l3 center">
                <div class="ouRecDiv">
                    <a href="beverage-recipes.php" id="levClick">
                        <img src="images/beverages400.jpg" alt="Instant Food" class="responsive-img rounded-10">
                    </a>
                    <div class="ourFood">Beverages</div>
                </div>
            </div>
        </div>
        <div class="row circleRec">
            <div class="col s12">
            <div class="owl-carousel instantCarousel">
                <?php foreach($data_i as $val_i){ ?>
                <div class="item center">
                    <a href="ingredient.php?id=<?php echo $val_i['id'] ?>" class="text-black">
                        <img src="images/<?php echo $val_i['image'] ?>" alt="<?php echo $val_i['name'] ?>" class="responsive-img circle">
                        <h6 class="Poppins-SemiBold"><?php echo $val_i['name'] ?></h6>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="owl-carousel vegCarousel">
            <?php foreach($data_v as $val_v){ ?>
                <div class="item center">
                    <a href="ingredient.php?id=<?php echo $val_v['id'] ?>" class="text-black">
                        <img src="images/<?php echo $val_v['image'] ?>" alt="<?php echo $val_v['name'] ?>" class="responsive-img circle">
                        <h6 class="Poppins-SemiBold"><?php echo $val_v['name'] ?></h6>
                    </a>
                </div>
                <?php } ?></div>
            <div class="owl-carousel nonvegCarousel">
            <?php foreach($data_n as $val_n){ ?>
                <div class="item center">
                    <a href="ingredient.php?id=<?php echo $val_n['id'] ?>" class="text-black">
                        <img src="images/<?php echo $val_n['image'] ?>" alt="<?php echo $val_n['name'] ?>" class="responsive-img circle">
                        <h6 class="Poppins-SemiBold"><?php echo $val_n['name'] ?></h6>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="owl-carousel beverageCarousel">
            <?php foreach($data_b as $val_b){ ?>
                <div class="item center">
                    <a href="ingredient.php?id=<?php echo $val_b['id'] ?>" class="text-black">
                        <img src="images/<?php echo $val_b['image'] ?>" alt="<?php echo $val_b['name'] ?>" class="responsive-img circle">
                        <h6 class="Poppins-SemiBold"><?php echo $val_b['name'] ?></h6>
                    </a>
                </div>
                <?php } ?>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="fasFoodSec" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <h2 class="center Poppins-SemiBold">FESTIVE SPECIAL RECIPES</h2>
        <div class="row">
        <?php
         foreach($data_f as $val_f){
            $totalTime=$val_f['prep']+$val_f['cook'];
            ?>
            <div class="col s12 m6 l6 xl3">
                <a href="ingredient.php?id=<?php echo $val_f["id"]; ?>" class="text-black">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="images/<?php echo $val_f['image'] ?>" alt="Bhang" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <div class="row">
                        <div class="col s12">
                        <p class="text-orange Poppins-SemiBold fesName"><?php echo $val_f['festivalName'] ?></p>
                        <p class="Poppins-Bold fooName"><?php echo $val_f['name'] ?></p>
                        </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">PREP</p>
                        <p class="Poppins-SemiBold cookTime text-grey"><?php echo $val_f['prep'] ?> MINS</p>
                        </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">COOK</p>
                        <p class="Poppins-SemiBold cookTime text-grey"><?php echo $val_f['cook'] ?> MINS</p>
                       </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">TOTAL</p>
                        <p class="Poppins-SemiBold cookTime text-grey"><?php echo $totalTime; ?> MINS</p>
                       </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            <!-- <div class="col s12 m6 l6 xl3">
                <a href="ingredients.php" class="text-black">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="images/sabudana400.jpg" alt="Sabudana" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <div class="row">
                        <div class="col s12">
                        <p class="text-orange Poppins-SemiBold fesName">DUSSEHRA</p>
                        <p class="Poppins-Bold fooName">SABUDANA KHICHDI</p>
                        </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">PREP</p>
                        <p class="Poppins-SemiBold cookTime text-grey">20 MINS</p>
                        </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">COOK</p>
                        <p class="Poppins-SemiBold cookTime text-grey">45 MINS</p>
                       </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">TOTAL</p>
                        <p class="Poppins-SemiBold cookTime text-grey">1 H 5 MINS</p>
                       </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col s12 m6 l6 xl3">
                <a href="ingredients.php" class="text-black">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="images/sandesh400.jpg" alt="Sandesh" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <div class="row">
                        <div class="col s12">
                        <p class="text-orange Poppins-SemiBold fesName">DURGA PUJA</p>
                        <p class="Poppins-Bold fooName">SANDESH</p>
                        </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">PREP</p>
                        <p class="Poppins-SemiBold cookTime text-grey">20 MINS</p>
                        </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">COOK</p>
                        <p class="Poppins-SemiBold cookTime text-grey">45 MINS</p>
                       </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">TOTAL</p>
                        <p class="Poppins-SemiBold cookTime text-grey">1 H 5 MINS</p>
                       </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col s12 m6 l6 xl3">
                <a href="ingredients.php" class="text-black">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="images/seviyan400.jpg" alt="Seviyan" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <div class="row">
                        <div class="col s12">
                        <p class="text-orange Poppins-SemiBold fesName">EID AL-FITR</p>
                        <p class="Poppins-Bold fooName">SEVIYAN</p>
                        </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">PREP</p>
                        <p class="Poppins-SemiBold cookTime text-grey">20 MINS</p>
                        </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">COOK</p>
                        <p class="Poppins-SemiBold cookTime text-grey">45 MINS</p>
                       </div>
                       <div class="col s4">
                        <p class="Poppins-SemiBold preCooTot">TOTAL</p>
                        <p class="Poppins-SemiBold cookTime text-grey">1 H 5 MINS</p>
                       </div>
                    </div>
                    </div>
                </div>
                </a>
            </div> -->
            <?php } ?>
        </div>
    </div>
</section>
<section class="chefSlidSec" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <h2 class="center Poppins-SemiBold">BEHIND THE SCENES</h2>
        <div class="row">
            <div class="col s12">
                <div class="carousel testCarousel">
                    <a class="carousel-item center">
                        <img src="images/chef1.jpg" alt="Chef" class="responsive-img">
                        <h6 class="text-black Poppins-SemiBold">Rahul Kumar</h6>
                        <p class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quia.</p>
                    </a>
                    <a class="carousel-item center">
                        <img src="images/chef2.jpg" alt="Chef" class="responsive-img">
                        <h6 class="text-black Poppins-SemiBold">Puja Sharma</h6>
                        <p class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quia.</p>

                    </a>
                    <a class="carousel-item center">
                        <img src="images/chef3.jpg" alt="Chef" class="responsive-img">
                        <h6 class="text-black Poppins-SemiBold">Shyam Sexena</h6>
                        <p class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quia.</p>

                    </a>
                    <a class="carousel-item center">
                        <img src="images/chef4.jpg" alt="Chef" class="responsive-img">
                        <h6 class="text-black Poppins-SemiBold">Anurag Srivastava</h6>
                        <p class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quia.</p>

                    </a>
                    <a class="carousel-item center">
                        <img src="images/chef5.jpg" alt="Chef" class="responsive-img">
                        <h6 class="text-black Poppins-SemiBold">Karishma Thakur</h6>
                        <p class="text-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quia.</p>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
