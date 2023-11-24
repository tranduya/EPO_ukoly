<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Jednoduchá kalkulačka</title>
</head>
<body>
    <form name="form" action="" method="get">   
        <label for="a">a: </label>
        <input type="number" name="a" id="a" required/>
        <br />
        <select name="operation" id="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br />
        <label for="b">b: </label>
        <input type="number" name="b" id="b" required/>
        <br />
        <input type="submit"/>
    </form>
    <?php
        require_once("simpleCalculator.class.php");
        $a = checkInput($_GET['a']);
        $b = checkInput($_GET['b']);
        $operation = ($_GET['operation']);

        $calculator = new simpleCalculator();
        
        switch ($operation) {
            case "+":
                $result = $calculator->add($a, $b);
                break;
            case "-":
                $result = $calculator->subtract($a, $b);
                break;
            case "*":
                $result = $calculator->multiply($a, $b);
                break;
            case "/":
                $result = $calculator->divide($a, $b);
                break;
            default:
                $result = "Invalid operation";
                break;
        }
        echo($a . $operation . $b . "=" .$result);

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