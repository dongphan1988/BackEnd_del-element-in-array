<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h2>DEL CHARACTER IN STRING</h2>
    INPUT STRING
    <input type="text" name="text"/>
    INPUT CHARACTER
    <input type="text" name="num"/>
    <input type="submit" value="FIND"/>
    <?php
    $string = $_POST["text"];
    $array = explode(" ", $string);
    $number = $_POST["num"];
    function checkNumberInAraay($array, $number)
    {
        foreach ($array as $key => $value) {
            if ($number == $value) {
                return true;
            }
        }
        return false;
    }

    function checkIndexNumberInAraay($array, $number)
    {
        foreach ($array as $key => $value) {
            if ($number == $value) {
                return $key;
            }
        }
    }


    if($_SERVER["REQUEST_METHOD"]=="POST") {
        if (checkNumberInAraay($array, $number) == true) {
            $index_Del = checkIndexNumberInAraay($array, $number);
            for ($index = $index_Del; $index < count($array)-1; $index++) {
                $change = $array[$index];
                $array[$index] = $array[$index + 1];
                $array[$index + 1] = $change;
            }
        } else {
            echo "your number not in array";
        }
        $array[count($array)-1] = null;
        print_r($array);
    }
    ?>
</form>
</body>
</html>