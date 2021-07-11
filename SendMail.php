<?PHP
use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();



$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true ;
$mail->Username = "wasimwebsite20@gmail.com";
$mail->Password = 'wassim123';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";



$name = $_POST['name'];
$Email = $_POST['email'];
$tel = $_POST['tel'];
$adresse = $_POST['adresse'];
$size = $_POST['size'];
$quantity = $_POST['product-quantity'] ;
$somme = $_POST['product-quantity'] * 49.99 + 7 ;
$email = "mohamedali.benchikha@esprit.tn";
$subject ="Command For Dictators tshirt v1";
$body= "name : ".$name."\n email : ".$Email."\n tel : ".$tel."\n adresse : ".$adresse."\n size : ".$size."\n quantity : ".$quantity."\n Total : ".$somme." dt" ;



$mail->isHTML(true);
$mail->setFrom($email);
$mail->addAddress("mohamedali.benchikha@esprit.tn");
$mail->Subject = $subject;
$mail->Body = $body;

if($mail->send())
{
	echo '<script type="text/javascript">alert("Merci")</script>';
}
else
{
	echo '<script type="text/javascript">alert("erreur")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Wasimoss</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">
<!-- Page Wrapper -->
<section class="page-wrapper success-msg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        	<i class="tf-ion-android-checkmark-circle"></i>
          <h2 class="text-center">Thank you! For your order</h2>
          <a href="shop.html" class="btn btn-main mt-20">Continue Shopping</a>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.page-warpper -->
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
