<?php
if(isset($_GET['loc'])){
    $loc = $_GET['loc'];
    $loc = strtolower($loc);
	switch ($loc){
		case 'graz':
			$loc = "https://www.foxinaboxgraz.at/";
            $linkText = 'Grazz Locaiton';
			break;
		case 'florence':
            $loc = "https://foxinaboxfirenze.com/";
            $linkText = 'florence Locaiton';
			break;
		case 'london':
            $loc = "https://www.foxinaboxlondon.uk/";
            $linkText = 'London Locaiton';
			break;
         case 'munchen':
            $loc = "https://foxinaboxmuenchen.de/";
            $linkText = 'munchen Locaiton';
            break;
        case 'zupthen':
                $loc = "https://foxinaboxzutphen.com/";
                $linkText = 'zupthen Locaiton';
                break;
        case 'chicago':
                $loc = "https://www.foxinaboxchicago.com/articles";
                $linkText = 'chicago Locaiton';
                break;

		default: 
        $loc = "https://foxinabox.re/";
        $linkText = 'FOX IN ABOX MAIN';
	}

   
} else{
    $loc = "https://foxinabox.re/";
    $linkText = 'FOX IN A BOX MAIN';
}
$link = '<a href="'.$loc.'" target="_BLANK">' . $linkText .'</a>';



?>



