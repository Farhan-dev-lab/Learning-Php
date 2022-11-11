<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>
    <?php

/*
   
    
 $names = [

  [
   "Farhan", "20", "Male",
  ],

 [
  "Nasim", "20", "Male",
 ]
];




for ($i=0; $i < count($names) ; $i++) { 
   for ($a=0; $a < count($names[0]); $a++) { 
       echo $names[$i][$a]."<br>";
   };
};





$names = [

    [
      'name' => 'Farhan',
      'age' => 20,
      'gender' => "Male",
    ],
    [
      'name' => 'Dipto',
      'age' => 20,
      'gender' => "Male",
    ]

];

$lol =  [
    'name' => 'Farhan',
    'age' => 20,
    'gender' => "Male",
];

foreach ($lol as $key => $value) {
    echo $key . " => " . $value . "<br>";
}


for ($i=0; $i < count($names); $i++){
    foreach ($names[$i] as $key => $value) {
        echo $key . " => " . $value . "<br>";
    }
}




$run = fn($n, $s) => $n . " " . $s;
echo $run("Farhan", "Nasim");

*/


/* ARRAY FUNCTION */

$number = [1, 2, 3];
$numberTwo = [4, 5, 6];

$new = array_merge($number, $numberTwo);
print_r($new);

echo "Hello World";




/* ARRAY FUNCTION (END) */

?>


</h1>
    
</body>
</html>