<?php 
$email = $_GET['email'];
//var_dump($email);
if (isset($email)) {
    $response = checkEmail($email);
    $alertMsg = setResponse($response);
}



function checkEmail($mail){
    if (str_contains($mail,'@')&&str_contains($mail,'.')) {
        return true;
    }
    return false;
}

function setResponse($resp){
    if ($resp) {
       return 
       [
        'alert_class' => 'success',
        'content'=>'👍 Your email is correct!!'
       ];
    }
    return 
       [
        'alert_class' => 'danger',
        'content'=>'👎 Error!! Your email is incorrect!!'
       ];
}

//var_dump($response,$alertMsg);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav
            class="navbar navbar-expand-sm navbar-dark bg-dark"
        >
            <div class="container">
                <a class="navbar-brand" href="#">NEWSLETTER</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mt-2 ms-auto mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page"
                                >Home
                                <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>

    <main>
        <div class="p-5 mb-4 bg-warning rounded-3">
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
                    <input
                        type="text"
                        class="form-control w-50"
                        name="email"
                        id="email"
                        aria-describedby="emailHelpId"
                        placeholder="abc@mail.com"
                    />
                </div>
                <button type="submit" class="btn btn-dark">Send</button>
            </form>
        </div>

        <?php if (isset($email)) :?>
            <div class="alert alert-<?=$alertMsg['alert_class']?> alert-dismissible fade show position-fixed top-50 start-50 p-5" role="alert" style="transform: translateX(-50%);">
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
            
                <strong><?= $alertMsg['content']?></strong>
            </div>
        <?php endif;?> 
    </main>
    
    <footer class="bg-dark text-light text-center py-2 mt-5">
        <div class="container">
            <span>
                <i class="fa fa-copyright" aria-hidden="true" style="color: #ffffff;"></i>
                All Rights Reserved. Paolo Marzocchi
            </span>
        </div>
        
    </footer>
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>