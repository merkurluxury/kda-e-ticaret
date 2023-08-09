<?php 
try {
	$baglanti=new PDO ("mysql:host=localhost; dbname=e-ticaret", 'root','');
	#echo "Bağlantı başarılı";
	
} catch (Exception $e) {
	echo $e-> getMessage();
}
?>