

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $page=$_SERVER['REQUEST_URI']; require_once('layouts/head.php');?>
</head>
<body>



<?php 


switch ($page) {
	case '/':
	    require_once('layouts/header1.php');
		require_once('pages/index.php');
		break;
	case '/about':
	    require_once('layouts/header.php');
		require_once('pages/about.php');
		break;
	case '/contact':
	    require_once('layouts/header.php');
		require_once('pages/contact.php');
		break;
	case '/services':
	    require_once('layouts/header.php');
		require_once('pages/services.php');
		break;
	case '/gallery':
	    require_once('layouts/header.php');
		require_once('pages/gallery.php');
		break;	
	case '/ru':
	    require_once('layouts/header1.php');
		require_once('pages/ru.php');
		break;								
	
	default:
	    require_once('layouts/header1.php');
		require_once('pages/index.php');
		break;
}



 ?>



<?php require_once('layouts/footer.php');?>
	
</body>
</html>