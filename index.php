
<?php
define('VIEW', 'Views/');
define('CONTROLLER', 'Controllers/');
require_once(VIEW . 'nav.php');
$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';
switch ($action) {
	case 'signup':
		require_once(CONTROLLER . 'SignupFormController.php');
		$controller = new SignupFormController();
		break;
	case 'accueil':
		require_once(CONTROLLER . 'AccueilImagesController.php');
		$controller = new AccueilImagesController();
		break;
	case 'upload':
		require_once(CONTROLLER . 'UploadImagesController.php');
		$controller = new UploadImagesController();
		break;
	default:
		require_once(CONTROLLER . 'AccueilImagesController.php');
		$controller = new AccueilImagesController();
		break;
}

?>
