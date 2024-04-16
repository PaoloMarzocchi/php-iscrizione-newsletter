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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="" method='get'>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="text"
                    class="form-control"
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
    <div
        class="alert alert-<?=$alertMsg['alert_class']?> alert-dismissible fade show"
        role="alert"
    >
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    
        <strong><?= $alertMsg['content']?></strong>
    </div>
    <?php endif;?>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>