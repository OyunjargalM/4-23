

<?php
switch ($email) {
    case "oyu9912@gmail.com":
      echo "oyu gmail mun baina";
      break;
    case "nemehee1999@gmail.com":
        echo "nemehee  gmail mun baina";
      break;
    case "":
        echo " gmail hooson  baina";
      break;
    default:
    echo "email shalgaly duuslaa";
  }














// $ogvvlber = "CHI MUU MANGAR AHAHAHAHA";
// $email = $_POST["email"];
// $name = $_POST["name"];
// $message = $_POST["message"];
// if(strlen($email) == 0) {
//     echo "email хаяг хоосон";
//     echo "<br>";
//     die();
// } 
//  else if($name == "") {
//     echo "нэр хоосон";
//     echo "<br>";
//     die();
// }
// else if($message == "") {
//     echo "мессеж хоосон";
//     echo "<br>";
//     die();
// }



// $formiin_medeelel = $_POST;
// $email_hayg = $formiin_medeelel['email'];
// print_r( $email_hayg);
// echo "<hr>";
// print_r($formiin_medeelel);

 if(hoosonbish($_POST["nomer1"]) && hoosonbish($_POST["nomer2"]) && hoosonbish($_POST["uildel"])) {
        $uildel = $_POST["uildel"];

        $hariu = calculate($_POST["nomer1"], $_POST["nomer2"], $_POST["uildel"]);
        if(hoosonbish($_POST["nomer1"]) && hoosonbish($_POST["nomer2"]) && hoosonbish($_POST["uildel"])) {
          $uildel = $_POST["uildel"];
          switch ($uildel) {
            case "+":
              $hariu = $_POST["nomer1"] + $_POST["nomer2"];
              break;
            case "-":
              $hariu = $_POST["nomer1"] - $_POST["nomer2"];
              break;
            case "*":
              $hariu = $_POST["nomer1"] * $_POST["nomer2"];
              break;
            case "/":
              $hariu = $_POST["nomer1"] / $_POST["nomer2"];
              break;
            default:
              $hariu = "aldaa";
          }
?>