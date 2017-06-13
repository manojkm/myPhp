<?php
function WhichPage($thepage)
  {
// this gets the name of the php page you are presently on
$page = basename($_SERVER["PHP_SELF"]); 

if ($page == $thepage) {
// style for selected state 
  echo "active";
  
} else {
// default style 
 echo ""; 
}
 }	?>
 
<section id="header"><nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/logo_CreditCardsIndia.svg" onerror="this.onerror=null; this.src='images/logo_CreditCardsIndia.png'" alt="CreditCardsIndia" ></a><small class="website_caption">Credit cards offered by banks & credit unions in India.</small>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php WhichPage("index.php"); ?>"><a href="index.php">Home</a></li>
        <li class="<?php WhichPage("about_us.php"); ?>"><a href="about_us.php">About Us</a></li>
        <li class="<?php WhichPage("contact_us.php"); ?>"><a href="contact_us.php">Contact Us</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
</section>