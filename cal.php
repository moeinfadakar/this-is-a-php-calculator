<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="UTF-8">
    <title>php calculator</title>
</head>
<body>
<form >
    <input type="text" name=" num1" placeholder="Number 1">
    <input type="text" name=" num2" placeholder="Number 2">
<select name="operator">
<option>none</option>
<option>Add</option>
<option>Subtract</option>
<option>Multiply</option>
<option>Divide</option>
</select>
<br>
<button type="submit" name="submit" value="submit">calculate</button>
</form>
<p>the answer is:</p>
<?php
if (isset($_GET[ 'submit' ])) {
$result1 =  $_GET[ 'num1' ];
$result2 =  $_GET[ 'num2' ];
$operator =  $_GET[ 'operator' ];
switch ($operator) { 
    case "none" : 
echo "you need to select a method !";
break;
    case "Add" : 
echo $result1 + $result2 ;
break;
    case "Subtract" : 
echo $result1 - $result2 ;
break;
    case "Multiply" : 
echo $result1 * $result2 ;
break;
    case "Divide" : 
echo $result1 / $result2 ;
break;
}
}


?>


</body>
</html>