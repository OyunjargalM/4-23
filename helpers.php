<?php
function hr(){
    echo "<hr>";
}
function br() {
    echo "<br>";
}

 if(count($_POST) > 0) {
     hr();
     foreach ($_POST as $index => $medeelel) {
         if(hoosonbaina($medeelel)) {
             echo "$index hooson baina.";
             die;
         }
        echo "$index: $medeelel <br>";
    }
    $password = $_POST['password'];
}
//$too = [2,5,8,85,96,5,6,12];
//foreach($too as $in => $to) {
    //echo "$in: $to <br>";
//}
function hoosonbaina($field) {
    if($field == "") {
        return true;
    }
    return false;
}

?>