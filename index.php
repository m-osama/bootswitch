<?php

include 'views/header.php';
switch( $_GET['page'] ) {
	case 'themes':
		include 'views/themes.php';
		
		break;
	case 'out':
			include 'views/out.php';
			
			break;	
	case 'upload':
		include 'views/update.php';
		
		break;
	default:
		include 'views/home.php';
}
include 'views/footer.php';