
<?php
require_once('./Views/nav.php');
require_once('./Controller/UserController.php');
// require_once('./Controllers/ImagesController.php');
$usercontroller = new UserController;
// $imagescontroler = new ImagesController;
$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
switch ($action) {
	case 'getsignuppage':
		$usercontroller->SignUp();
		break;
	case 'login':
		$usercontroller->GetLoginPage();
		break;
	case 'loginuser':
		$usercontroller->LoginUser($_POST['pseudo'], $_POST['password']);
		break;
	case 'signupuser':
		$usercontroller->SignUpUser($_POST['pseudo'], $_POST['password']);
		break;
	case 'form':
		$usercontroller->form();
		break;

	// default:
	// 	$controller = new AccueilImagesController();
	// 	break;
}

?>
