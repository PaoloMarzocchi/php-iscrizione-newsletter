<?php 
require_once __DIR__ . '/helper/functions.php';

session_start();

$email = $_GET['email'];
//var_dump($email);
if (isset($email)) {
    $response = checkEmail($email);
    $alertMsg = setResponse($response);

    $_SESSION['response'] = $response;
    $_SESSION['alertMsg'] = $alertMsg;

    header ('Location: ./layout/check-response.php');
}





//var_dump($response,$alertMsg);
?>

<?php include_once __DIR__ . '/layout/head.php'; ?>
    <?php include_once __DIR__ . '/layout/partials/header.php';  ?>

    <main>
        <div class="p-5 mb-4 bg-warning rounded-3 h-25">
            <div class="container py-5">
                <h1 class="display-5 fw-bold">Email Checker</h1>
                <p class="col-md-8 fs-4">
                    We check your email for free!
                </p>
                <p class="col-md-8 fs-4 text-center">
                    HERE <i class="fa-solid fa-arrow-turn-down" style="color: #000000;"></i>
                </p>
            </div>
            
        </div>
        
        <div class="container">
            <form action="" method='get' class="p-4 my-2 rounded-1 bg-secondary">
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="text" class="form-control w-50" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com"/>
                </div>
                <button type="submit" class="btn btn-dark">Send</button>
            </form>
        </div>

        
    </main>

    <?php include_once __DIR__ . '/layout/partials/footer.php';  ?>
<?php include_once __DIR__ . '/layout/foot.php'; ?>