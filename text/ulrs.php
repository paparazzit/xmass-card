<?php
if(isset($_GET['loc'])){
    $loc = $_GET['loc'];
    $loc = strtolower($loc);
	switch ($loc){
		case 'graz':
			$loc = "https://www.foxinaboxgraz.at/einzigartige_und_besondere_weihnachtstraditionen_in_der/l-92";
            $linkText = 'ARTIKEL  LESEN';
			break;
        	case 'brisbane':
                $loc = "https://foxinaboxbrisbane.com/articles/article/l_31?lang=eng&preview=1";
                $linkText = 'READ ARTICLE';
                break;
        
	
        case 'gold-coast':
                $loc = "https://foxinaboxgoldcoast.com/articles/article/l_18?lang=eng&preview=1";
                $linkText = 'READ ARTICLE';
                break;
        case 'zagreb':
                $loc = "https://zagreb.roomescape.hr/jedinstveni_boini_obiaji/l-119";
                $linkText = 'PROČITAJ';
            break;

		default: 
        $loc = "https://foxinabox.re/unique-and-peculiar-christmas-traditions-around-the-world/";
        $linkText = 'READ ARTICLE';
	}

   
} else{
    $loc = "https://foxinabox.re/unique-and-peculiar-christmas-traditions-around-the-world/";
    $linkText = 'READ ARTICLE';
}
$link = '<a href="'.$loc.'" target="_BLANK">' . $linkText .'</a>';



?>



