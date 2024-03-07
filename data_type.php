<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 23.32;
    $male = true;
    $students = array('reza', 'ali', 'mehran', 'gholam');
    echo $students[0];
    $subj = NULL;

    class Test{
        public $name;
        public $age;
    }
    $test = new Test;
    $test->name = 'mehdi';
    $test->age = 19;

    echo $test->name;
    ?>
</body>
</html>