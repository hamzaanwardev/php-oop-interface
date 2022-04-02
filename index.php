<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Interface</title>
</head>
<body>
    
  
<h1>PHP OOP Interface</h1>
<p>Interface are used to inherite more than one classes (properties and methods) in a class. </p>
<p>Interface exactly works like Abstract Class. So we can not make its own Object.</p>
<p>we can not either make properties or variables in interface and can not assign them value.</p>
<p>In interface we can declare methods but we can not implement them. we use them for drived class.</p>

<?php
interface parent1 {
    function calc($a , $b);
}
interface parent2 {
    function sub($c , $d);
}

class childclass implements parent1 , parent2 {
    public function calc ($a , $b) {
        echo $a + $b;
    }

    public function sub ($c , $d) {
        echo $c - $d;
    }
}
?>
<!-- NOw making Objects of child class and using methods of parent class.  -->
<?php

$h = new childclass();
$h->calc(70,5);
echo "<br>";
$h->sub(60,9);

?>
</body>
</html>