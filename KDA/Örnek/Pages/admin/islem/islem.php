<?php 
require_once 'baglan.php';
if (isset($_POST['ayarkaydet'])) {
	$duzenle=$baglanti-> prepare("UPDATE ayarlar SET 
		baslik=:baslik,
		aciklama=:aciklama,
		anahtarkelime=:anahtarkelime
		WHERE id=1
		");
 

$update=$duzenle -> execute(array(
'baslik'=>$_POST['baslik'],
'aciklama'=>$_POST['aciklama'],
'anahtarkelime'=>$_POST['anahtarkelime']
));
if ($update) {echo "Başarili";
	
}
else {
	echo "Olmadı";
}
}
?>