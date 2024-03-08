<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>

<body>
     <?php

     
    // $num1 = 10;
    // $num2 = 4;
    // Total
    // $total = $num1 + $num2;
    // echo "$num1 + $num2 = $total <br>";

    // Minus
    // $minus = $num1 - $num2;
    // echo "$num1 - $num2 = $minus <br>";

    // Beat
    // $beat = $num1 * $num2;
    // echo "$num1 * $num2 = $beat <br>";

    // Split
    // $split = $num1 / $num2;
    // echo "$num1 / $num2 = $split <br>";

    // Can
    // $can = $num1 ** $num2;
    // echo "$num1 ** $num2 = $can"; -->




    // Define some variables
		$num1 = 10;
		$num2 = 5;
		$str1 = "hello";
		$str2 = "world";

		// Use the equal to operator
		if ($num1 == $num2) {
			echo "<p>$num1 is equal to $num2</p>";
		} else {
			echo "<p>$num1 is not equal to $num2</p>";
		}

		// Use the identical to operator
		if ($num1 === "10") {
			echo "<p>$num1 is identical to 10</p>";
		} else {
			echo "<p>$num1 is not identical to 10</p>";
		}

		// Use the not equal to operator
		if ($str1 != $str2) {
			echo "<p>$str1 is not equal to $str2</p>";
		} else {
			echo "<p>$str1 is equal to $str2</p>";
		}

		// Use the not equal to operator (alternative syntax)
		if ($num1 <> $num2) {
			echo "<p>$num1 is not equal to $num2</p>";
		} else {
			echo "<p>$num1 is equal to $num2</p>";
		}

		// Use the not identical to operator
		if ($num1 !== "10") {
			echo "<p>$num1 is not identical to 10</p>";
		} else {
			echo "<p>$num1 is identical to 10</p>";
		}

		// Use the less than operator
		if ($num1 < $num2) {
			echo "<p>$num1 is less than $num2</p>";
		} else {
			echo "<p>$num1 is not less than $num2</p>";
		}

		// Use the greater than operator
		if ($num1 > $num2) {
			echo "<p>$num1 is greater than $num2</p>";
		} else {
			echo "<p>$num1 is not greater than $num2</p>";
		}

		// Use the less than or equal to operator
		if ($num1 <= $num2) {
			echo "<p>$num1 is less than or equal to $num2</p>";
		} else {
			echo "<p>$num1 is not less than or equal to $num2</p>";
		}

		// Use the greater than or equal to operator
		if ($num1 >= $num2) {
			echo "<p>$num1 is greater than or equal to $num2</p>";
		} else {
			echo "<p>$num1 is not greater than or equal to $num2</p>";
		}


    ?>
</body>

</html>