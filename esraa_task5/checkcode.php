<?php

use app\models\User;
session_start();
$title = 'checkCode';
include_once "layouts/header.php";
include_once 'app/middlewares/guest.php';
include_once "layouts/breadcrumb.php";
define('ALLOWED_PAGES', ['signup', 'check-email','my-account']);
define('CODE_EXPIRATION_PERIOD_IN_MINUTES', 1);
if (!empty($_GET)) {
    if (isset($_GET['page'])) {
        if (!in_array($_GET['page'], ALLOWED_PAGES)) {
            header('location:layouts/errors/404.php');die;
        }
    } else {
        header('location:layouts/errors/404.php');die;
    }
} else {
    header('location:layouts/errors/404.php'); die;
}
if(empty($_SESSION['email'])){

    header("location:signin.php");die;
}



$userObject = new User;
$user = $userObject->setEmail($_SESSION['email'])->getUserByEmail()->fetch_object();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if (!empty($_POST['submit']) && $_POST['submit'] == 'check-code') { 
        if (!empty($_POST['code'])) {
            $userObject->setEmail($_SESSION['email']);
            if ($_GET['page'] == 'signup' || $_GET['page'] == 'my-account') {
                $userObject->setVerification_code($_POST['code']);
                $result = $userObject->checkCode();
                if ($result->num_rows == 1) {
                    $verificationResult = $userObject->verifyUser();
                    if ($verificationResult) {
                        unset($_SESSION['email']);
                        $success = "<p class='text-success text-center'> <strong> Correct Code </strong> </p>";
                        header("Refresh:3; url=signin.php");
                    } else {
                        $errors['tryAgain'] = 'Please Try Again Later';
                    }
                } else {
                    $errors['wrong'] = 'Code Is Wrong';
                }
            } else {
                $userObject->setForgetCode($_POST['code']);
                $result = $userObject->checkForgetCode();
                // // dd($_SESSION);
                // dd($result);

                if ($result->num_rows == 0) {
                    $user = $result->fetch_object();
                    dd($user);
                    if (date('Y-m-d H:i:s') <= $user->code_expired_at)  {
                        header('location:set-new-password.php');
                        die;
                    } else {
                        $errors['code'] = 'Code Is Expired';
                    }
                } else {
                    $errors['code'] = 'Code Is  Wrong';
                }
            }
        } else {
            $errors['code'] = 'Code Is Required';
        }
    }
}

?>
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> <?= $title ?> </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form method="post">
                                        <input type="number" name="code" placeholder="Verification Code">
                                        <?php
                                        if (!empty($errors)) {
                                            foreach ($errors as $error) {
                                                echo "<p class='text-danger font-weight-bold'>* {$error}</p>";
                                            }
                                        }
                                        echo $success ?? null;
                                        ?>
                                        <div class="button-box">
                                            <button type="submit" name="submit" value="check-code"><span><?= $title ?></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "layouts/footer-scripts.php";
?>