<?php include 'header.php';?>

<h1>My first PHP page</h1>

<p>Using POST:</p>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<p>Using GET:</p>
<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
function random_Multiplication() {
    $num1 = rand(10,100);
    $num2 = rand(10,100);
    $num3 = $num1 * $num2;
    
    print($num1 . "*" . $num2 . "=" . $num3);
    
}

random_Multiplication();
?>

<?php include 'footer.php';?>

