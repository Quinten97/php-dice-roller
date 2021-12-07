<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='styles.css'>
    <title>Document</title>
</head>
<body>
<h1>Dice Roller</h1>
<h3>Enter die to roll: (d4, d6, d8, d10, d12, d20, d100)</h3>
<form class='container' action="index.php" method="get">
    <input type="text" name='diceValue' placeholder='d4'>
    <input type="submit" value='Submit'> 
</form>
    <?php
        class Dice {
            public $minNum;
            public $maxNum;
    
            function set_min($min) {
                $this -> minNum = $min;
            }
            function set_max($max) {
                $this -> maxNum = $max;
            }
    
            function __construct($aMin, $aMax) {
                $this->minNum = $aMin;
                $this->maxNum = $aMax;
            }
        }
    
        $d4 = new Dice(1, 4);
        $d6 = new Dice(1, 6);
        $d8 = new Dice(1, 8);
        $d10 = new Dice(1, 10);
        $d12 = new Dice(1, 12);
        $d20 = new Dice(1, 20);
        $d100 = new Dice(1, 100);
    
        function rollDice($die) {
            return rand($die->minNum, $die->maxNum);
        }
    
        function pickDice($choice) {
            global $d4, $d6, $d8, $d10, $d12, $d20, $d100;
            if ($choice == "d4") {
                return rollDice($d4);
            } else if ($choice == "d6") {
                return rollDice($d6);
            } else if ($choice == "d8") {
                return rollDice($d8);
            } else if ($choice == "d10") {
                return rollDice($d10);
            } else if ($choice == "d12") {
                return rollDice($d12);
            } else if ($choice == "d20") {
                return rollDice($d20);
            } else if ($choice ==  "d100") {
                return rollDice($d100);
            } else {
                return "invalid parameter.";
            }
        }
    
        echo "<div class='container'>" . pickDice($_GET['diceValue']) . "</div>" ;
    ?>
</body>
</html>