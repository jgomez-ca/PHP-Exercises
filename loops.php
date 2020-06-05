<?php 
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$i = 0;
while ($i <= 10){
	echo $i.", ";
	$i++;
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
$range = 0; // Always initialize a variable
foreach (range(0, 100, 5) as $range) {
    echo $range .", ";
}
echo "<br><br><br>";
/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/
echo "The following numbers are odd: ";
for ($counter = 0; $counter <=100; $counter++){
	if(($counter % 2) == 1){
		echo $counter.", ";
	}
	if ($counter === 100){
		echo "and stay tuned for more odd numbers!";
	}
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = array("Pizza", "Veggies", "Meat", "Brownies");
/*
Use while-loop to print array elements (every food in a new row).
*/
echo "<br>Use <strong>while-loop</strong> to print array elements (every food in a new row).<br>";
$i = 0;
while($i < sizeof($food)){
	echo $food[$i]."<br>";
	$i++;
}
/*
Use for-loop to print array elements (every food in a new row).
*/
echo "<br>Use <strong>for-loop</strong> to print array elements (every food in a new row).<br>";
for($i = 0; $i < count($food); $i++ ){
	echo $food[$i]."<br>";
}

/*
Use foreach-loop to print array elements (every food in a new row).
*/
echo "<br>Use <strong>foreach-loop</strong> to print array elements (every food in a new row).<br>";
foreach($food as $key => $value){
	echo $value."<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
echo "<ul>";
for($i = 0; $i < count($food); $i++ ){
	echo "<li>".$food[$i]."</l>";
}
echo "</ul>";
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/
$food_assoc = [	//Pizza", "Veggies", "Meat", "Brownies");
	"Pizza" => [
		"type" => "Main Course",
		"origin" => "Italy"
	],
	"Veggies" => [
		"type" => "Veggies!",
		"origin" => "Colombia"
	],
	"Meat" => [
		"type" => "Side Dish",
		"origin" => "A Cow!"
	],
	"Brownies" => [
		"type" => "Desert",
		"origin" => "Home... :'("
	]
];
/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

echo "<br>Loop through THE ARRAY and use print_r() to print the entire meal course 
(entire array that includes type and origin).<br><br>";

foreach ($food_assoc as $k => $v){
	for ($i = 0; $i < count($food_assoc); $i++){
		print_r($k);
		echo "	=>	";
		print_r($v);
		echo "<br>";
	}
	echo "<br>";
}
echo "<br>";
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/

echo "<br><br>Loop through THE ARRAY and print the meal names (keys of THE ARRAY)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below)<br><br>";

$k = array_keys($food_assoc);
for($i = 0; $i < sizeof($food_assoc); $i++) {
    echo "<ul><li>$k[$i]";
    foreach($food_assoc[$k[$i]] as $key => $value) {
        echo "  <ol style = 'list-style-type: circle;'>
					<li>$key: $value</li>
				</ol>";
    }
    echo "</li></ul>";
}
?>