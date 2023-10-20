<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Řešitel kvadratické rovnice</title>
</head>
<body>
    <form name="form" action="" method="get">   
        <label for="a">a: </label>
        <input type="number" name="a" id="a" required/>
        <br />
        <label for="b">b: </label>
        <input type="number" name="b" id="b" required/>
        <br />
        <label for="c">c: </label>
        <input type="number" name="c" id="c" required/>
        <br />
        <input type="submit"/>
    </form>
    <?php
        $a = checkInput($_GET['a']);
        $b = checkInput($_GET['b']);
        $c = checkInput($_GET['c']);

        $solutions = solveQuadratic($a, $b, $c);
        
        if (count($solutions) == 0) {
            echo ("Nejde vypočítat v oboru reálných čísel!");
        }
    
        for ($i = 0; $i < count($solutions); $i++) {
            echo($solutions[$i]);
            echo('<br />');
        }
        
        function isSolvable($a, $b, $c) {
            $discriminant = ($b*$b)-(4*$a*$c);
            
            if($discriminant < 0) {
                return -1;
            } else {
                return $discriminant;
            }
        }

    function solveQuadratic($a, $b, $c) {
        $d = isSolvable($a,$b,$c);
        $array = array();

        if($d > 0) {
            $solution1 = (-$b + sqrt($d))/(2*$a);
            $solution2 = (-$b - sqrt($d))/(2*$a);
            
            $array = array($solution1, $solution2);
        } elseif ($d == 0) {
            $solution = (-$b + sqrt($d))/(2*$a);
            $array = array($solution);
        }

        return $array;
    }

    function checkInput($input) {
        if (isNumber($input) == false) {
            echo("Špatně vyplněné pole");
            exit;
        }

        return secure($input);
    }

    function secure($input): string {
        $input = trim($input);
        $input = addslashes($input);
        return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }

    function isNumber($input) {
        return is_numeric($input);
    }
    ?>
</body>
</html>