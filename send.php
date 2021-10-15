<?php 
    $fcounter = 0;
foreach($_GET as $key => $value) {
    if($_GET[$key] != null){
        $fcounter += 1;
    }
}
    if ($fcounter == 5) {
        header('Location: success.php');
    } else {
        header('Location: form.php?checker=false');
    }
?>