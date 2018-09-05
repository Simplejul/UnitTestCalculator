<?php

class Calculator
{
    public function calculate($a){
        if ($a === null || $a === ""){
            return $a = '0';
        }else{
            $a = eval("return ".$a.";");
            return $a;
        }
        
    }
}

?>

<h1>Calculator</h1>
<form action="Calculator.php" method="get">
<label for="calcul">
Put your calculation:
</label>
<input type="text" name="calcul">
<button type="submit">Calculate</button>
</form>

<label for="result">
Result:

    <?php


            $x =  $_GET["calcul"];
            $obj = new Calculator();
            echo $obj->calculate($x);


    ?>

</label>