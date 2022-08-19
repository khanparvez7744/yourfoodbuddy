<header>
<nav id="stickyNav">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">
          <img src="images/logoBrown.png" alt="Logo" class="responsive-img">
      </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      <ul class="right hide-on-med-and-down">
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li>
          <a href="#" class="dropdown-trigger" data-target='dropdown1'>RECIPES</a>
          <ul id='dropdown1' class='dropdown-content'>
              <li><a href="instant-recipes.php">INSTANT RECIPES</a></li>
              <li class="divider"></li>
              <li><a href="veg-recipes.php">VEG RECIPES</a></li>
              <li class="divider"></li>
              <li><a href="nonveg-recipes.php">NONVEG RECIPES</a></li>
              <li class="divider"></li>
              <li><a href="beverage-recipes.php">BEVERAGES</a></li>
              <li class="divider"></li>
          </ul>
      </li>
        <li><a href="qna.php">Q&A</a></li>
        <li><a href="contactus.php">CONTACT US</a></li>
        <li>
          <form method="post" action="search.php" class="d-flex searchForm">
            <input type="search" placeholder="Search Recipe..." required name="search" class="browser-default">
            <button class="btn btnSearch" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </li>
      </ul>

    </div>
  </nav>
  <ul class="sidenav" id="mobile-demo">
        <li>
          <form method="post" action="search.php" class="d-flex searchMobile">
            <input type="search" placeholder="Search Recipe..." required name="search" class="browser-default">
            <button class="btn btnMblSearch" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="instant-recipes.php">Instant Recipes</a></li>
        <li><a href="veg-recipes.php">Veg Recipes</a></li>
        <li><a href="nonveg-recipes.php">Nonveg Recipes</a></li>
        <li><a href="beverage-recipes.php">Beverages</a></li>
        <li><a href="qna.php">Q&A</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="privacy.php">Privacy Policy</a></li>
        <li><a href="terms.php">Terms & Condition</a></li>
  </ul>
</header>