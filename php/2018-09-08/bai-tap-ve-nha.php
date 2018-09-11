<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bài tập php 1</title>
</head>
<body>
    <h1>PHONGDVH - Bài tập PHP 1</h1>
    <?php
    
    // Phongdvh - Bài tập PHP 1
    // demo

    echo "text 1";
    echo ("<br>text 2");
    print "<br>text 3";
    print ("<br>text 4");
    print_r ("<br>text 5");
    $myName = 'Phongdvh';
    $mytitle = 'Bai tap ve nha';
    echo "<br>$myName - $mytitle";
    print_r ('<br>' . $myName . ' - ' . $mytitle);

    define("MY_NAME", "DO VIET HONG PHONG", true);
    define("MY_AGE", "25", true);
    echo "<br>" . my_name;
    print ('<br>' . MY_AGE);
    $arr = [1, '2', 'phong'];
    echo "<br>";
    print_r ($arr[2]);
    ?>
</body>
</html>