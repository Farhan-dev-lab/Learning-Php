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

/* array spread function (start)*/

$number = [1, 2, 3, 4, 5, 6];
$numberTwo = [7, 8, 9];

$newarray = [...$number, ...$numberTwo];
//print_r($newarray);

/* array spread function (End) */

/* array combine function (start) */


$info = ["Name", "Age", "Gender"];
$ans = ["Farhan", 20, "Male"];

$final =  array_combine($info, $ans);
//print_r($final);
//echo $final["Name"];




/* array combine function (end) */

/* get array keys function (start) */

$hehe = [

   'User' => "Farhan",
   'Age' => 20,
   'Male' => "Male",

];

//print_r(array_keys($hehe));


/* get array keys function (end) */

/* keys and value flip..here keys become values and values become keys (start) */


$test = [
    'ID' => 23678,
    'Name' => "Farhan",
    'Age' => 20,
];
   
$flip = array_flip($test);

//print_r($flip);



/* keys and values flip (end) */


/* array with range of numbers (start) */

$list = range(1, 3);
$winners = ["Farhan", "Dipto", "Nishan", ];
//print_r($list);


/* array with range of numbers (end) */

/* array mapping (start) */

 $map = array_map(

   function($num, $people){
      return "Numbers are :  ${num} ${people}";
   }, $list, $winners);

 //  print_r($map);

   
   


/* array mapping  (end) */

/* ARRAY FUNCTION (END) */

?>


</h1>
    
</body>
</html>