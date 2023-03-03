<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first php lesson</title>
</head>

<body>

<form action="get">
        <input type="text" name="person">
        <button>Summit</button>
    </form>

<?php

//how to name string
echo "hello Clovis";
print "hi there";
print ("hi there");

//how to name variables
$num = 10;
$a = 5;
$age = 30;
$float = 7.5;
$name = $_GET['person'];
$name = "Danil";
echo $name."is a bad fellow";

//internal function
//count the letters
echo strlen("Hi Clovis");

//count the words
echo str_word_count("how are you?");

//reverse direction
echo strrev("hello Clovis");

//replace a word
echo str_replace("Daniel", "Jason", "hi Daniel");

//repeat
echo str_repeat("Clovis", "clozy", "Clovis");

//comparison operators
$x=5;
$y = 10;

if ($x != $y){
    echo "false!";
}

else {
    echo "true!";
}

//increament and decreament
$x = 10;
echo "+x";
echo "-x";

?>
    
</body>
</html>