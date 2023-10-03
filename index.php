<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>EPO - 2. úkol</title>
</head>
<body>
    <?php
    $n = array(2, 5, 6, 8, 11);
    $k = 2;

    $allCombinations = generateCombinations($n, $k);
    for ($i = 0; $i < count($allCombinations); $i++) {
        echo "[ " . implode(', ', $allCombinations[$i]) . " ]";
        echo ('<br />');
    }

    function generateCombinations($numbers, $combinationNumber) {
        $combinations = [];

        if ($combinationNumber == 0) {
            return [[]];
        }
    
        if (count($numbers) == 0) {
            return [];
        }
    
        $first = $numbers[0];
        $rest = array_slice($numbers, 1);
    
        $combinationsWithoutFirst = generateCombinations($rest, $combinationNumber);
        $combinationsWithFirst = generateCombinations($rest, $combinationNumber - 1);
    
        foreach ($combinationsWithFirst as $combination) {
            array_unshift($combination, $first);
            $combinations[] = $combination;
        }
    
        foreach ($combinationsWithoutFirst as $combination) {
            $combinations[] = $combination;
        }
    
        return $combinations;
    }
    ?>
</body>
</html>