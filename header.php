<?php 
require 'text/ulrs.php';

if(isset($_GET['lang'])){
	$lang = $_GET['lang'];
	switch ($lang){
		case 'en':
			$lang = $_GET['lang'];
			break;
		case 'fr':
				$lang = $_GET['lang'];
			break;
		case 'de':
				$lang = $_GET['lang'];
			break;
			case 'us':
				$lang = $_GET['lang'];
			break;
			case 'hr':
				$lang = $_GET['lang'];
			break;
		default: $lang ='en';
	}
}else{
	$lang = 'en';
}


require "text/text_".$lang.".php";
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

function addLang($actual_link, $myLang){

if(isset($_GET['loc'])){
	$loc= $_GET['loc'];
}else{
	$loc='';
}
$actual_link = strtok($actual_link, '?');

return $actual_link . '?lang=' . $myLang . '&loc=' . $loc;

}



?>

<!DOCTYPE html>
<html lang=<?php echo $lang?>>
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N4T5TZH');</script>
		<!-- End Google Tag Manager -->
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0 user-scalable=no"
		/>
	
		<link rel="stylesheet" href="css/style_final.css" />
		<link rel="icon" href="./assets/fav.png" type="image/gif" sizes="16x16" />

		

		<!-- META -->
		<meta property="og:url" content="https://foxinabox.rs/xmass" />
		<meta property="og:image" content="assets/shareImage.png" />
		<meta property="og:site_name" content="Interactive Christmas Card" />
		<meta property="og:description" content="Merry Christmas and Happy New Year" />
		<meta property="og:title" content="Interactive Christmas Card: by Fox in a Box" />

		

		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
			integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="mobile-web-app-capable" content="yes" />
		
		<intelxdk:crosswalk xwalk-command-line="--disable-pull-to-refresh-effect" />

		<title>Christmas Interactive Card</title>

		
	</head>
	<body>

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4T5TZH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
