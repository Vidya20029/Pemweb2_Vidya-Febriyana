<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["arkan","ikbal","ali","heri"];
    array_pop($tims);
    foreach($tims as $person) {
        echo $person. '<br>';
    }
?>
</body>
</html>