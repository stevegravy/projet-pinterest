<?php
require_once 'bootstrap.php';

$usercontroller = new UserController;
$imagecontroller = new ImageController;

$action = isset($_GET['action']) ? htmlentities($_GET['action']) : '';
?>

<?php
include "./Views/nav.php";

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
    case 'logout':
        $usercontroller->LogoutUser();
        break;
    case 'signupuser':
        $usercontroller->SignUpUser($_POST['pseudo'], $_POST['password']);
        break;
    case 'form':
        $usercontroller->form();
        break;
    case 'imageupload':
        $imagecontroller->uploadImage();
        break;
    case 'admin':
        $imagecontroller->getAdminPage();
        break;
    case 'adminEdit':
        $imagecontroller->getAdminEditPage();
        break;
    case 'deleteImage':
        $imagecontroller->deleteImage();
        break;
    case 'editImage':
        $imagecontroller->editImage();
        break;
    default:
        $imagecontroller->getImages();
        break;
}

include "./Views/footer.php";
?>
