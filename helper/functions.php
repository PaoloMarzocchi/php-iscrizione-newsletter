<?php 
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
?>