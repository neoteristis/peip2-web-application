<?php
function factorial($n) {
    if ($n == 1) {
        return 1;
    } else {
        return $n * factorial($n-1);
    }
}

echo(factorial(6));
?>

<html>
    <br>
</html>

<?php
function divisors($n) {
   $output = array();
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $output[] = $i;
        }
    }
    return $output;
}
echo json_encode(divisors(60)); # affiche [1,2,3,4,5,6,10,12,15,20,30,60]
?>

<html>
    <br>
</html>

<?php
function median($tab) {
    sort($tab);
    $size = count($tab);
    if ($size % 2 == 0) {
        $middleLeft = (int) $size / 2;
        return $tab[(2 * $middleLeft + 1) / 2];
    }
    return $tab[$size / 2];
}
echo median([3, 4, 1, -2, 9, 9, 2, 42]);
?>

<html>
    <br>
</html>

<?php
function countOccurrences($s, $c) {
    if (strlen($s) == 0) {
        return 0;
    }
    else {
        if ($s[1] == $c) {
            return 1 + countOccurrences(substr($s, 1), $c);
        }
    return countOccurrences(substr($s, 1), $c);
    }
}
echo countOccurrences("Bonjour", "o");
?>