<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my php lesson</title>
</head>

<body>

<form>
    <input type="text" name="Num1" placeholder="Number 1">
    <input type="text" name="Num2" placeholder="Number 2">
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="Submit" value="Submit">Calculat</button>
</form>   
<p>the Answer is:</p>
<?php
      if(isset($_GET['Submit'])) {
          $result1 = $_GET['Num1'];
          $result2 = $_GET['Num2'];
          $operator = $_GET['operator'];
          switch ($operator) {
              case "None":
                   echo "You need to select a method!";
                break;
                case "Add":
                    echo $result1 + $result2;
                 break;   
                 case "Subtract":
                    echo $result1 - $result2;
                 break;          
                 case "Multiply":
                    echo $result1 * $result2;
                 break;          
                 case "Divide":
                    echo $result1 / $result2;
                 break;          
          }

      }
?>
    
</body>
</html>