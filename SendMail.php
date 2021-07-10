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
$email = "Wasim.dieb@gmail.com";
$subject ="Command For Dictators tshirt v1";
$body= "name : ".$name."\n email : ".$Email."\n tel : ".$tel."\n adresse : ".$adresse."\n size : ".$size."\n quantity : ".$quantity."\n Total : ".$somme." dt" ;



$mail->isHTML(true);
$mail->setFrom($email);
$mail->addAddress("Wasim.dieb@gmail.com");
$mail->Subject = $subject;
$mail->Body = $body;

if($mail->send())
{
	echo '<script type="text/javascript">alert("c bon")</script>';
}
else
{
	echo '<script type="text/javascript">alert("erreur")</script>';
}
header('location: confirmation.html');

?>