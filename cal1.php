

<form action="" method="POST">
<input type="number" required="required" name="number1" />
<input type="number" required="required" name="number2" />
</br>
<input type="submit" name="action" value="Add" />
<input type="submit" name="action" value="Subtract" />
<input type="submit" name="action" value="Multiply" />
<input type="submit" name="action" value="Divide" />
</form>

<?php


$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$action  = $_POST['action'];

if(!isset($number1)){
        echo 'Plz input your number';
}
else if(!isset($number2)){
        echo 'Plz input your number';
}


if(!empty($action)){
        if($action == "Add"){
                $result = $number1 + $number2;
        }
        else if($action == "Subtract"){
                $result = $number1 - $number2;
        }
        else if($action == "Multiply"){
                $result = $number1 * $number2;
        }
        else if($action == "Divide"){
                $result = $number2 != 0 ? $number1 / $number2 : "NaN";
        }

        if(isset($result)){
                echo "Your result is: ".$result;
        }
}
?>
