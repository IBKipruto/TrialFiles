<?php
echo "Sigmund Feud's Stages of Psycho-sexual Development";
echo "<br>";
//if statement.
echo "If Statement";
echo "<br>";
$age=14;
if ($age>11){
    echo "Genital Stage";
}
echo "<br>";

// if else statement
echo "If Else Statement";
echo "<br>";
$age2=7;
if ($age2<2 && $age2>=0){
    echo "Oral stage";
}elseif ($age2>1 && $age2<=3){
    echo "Anal Stage";
}elseif ($age2>2 && $age2<=6){
    echo "Phalic Stage";
}elseif ($age2>5 && $age2<=11){
    echo "Latent Stage";
}elseif ($age2>11 && $age2<=110){
    echo "Genital Stage";
}
else{
    echo "Input a Valid age";
}
echo "<br>";
//Switch Statement
echo "Switch Statement";
echo "<br>";
$favteam= "Williams";

switch ($favteam) {
    case "Mercedes":
        echo "Your favorite team is Mercedes!";
        break;
    case "RedBull":
        echo "Your favorite team is RedBull";
        break;
    case "Ferrari":
        echo "Your favorite team is Ferrari";
    default:
        echo "Your favorite team is neither Mercedes, RedBull nor Ferrari, Check the middle field";

}
?>



