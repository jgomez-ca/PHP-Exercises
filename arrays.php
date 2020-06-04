<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = array(
	"Ajiaco",
	"Bandeja Paisa",
	"Arequipe",
	"Arepa"
);

/*
Print every array element in a new line.
*/

print_r($food);

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/


echo $food[0],"<br>";
echo $food[1],"<br>";
echo $food[2],"<br>";
echo $food[3],"<br>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = array(
	"Ajiaco"			=>	"Special Soup",
	"Bandeja Paisa"	=>	"Super Powerful Soup",
	"Arequipe"			=>	"A piece of heaven on earth",
	"Arepa"	=>	"Great Snack"
);


/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach ($food_assoc as $key => $value) {
    echo "$key | $value\n<br>";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc = array(
	"Ajiaco" => array(
		"Name"		=> "Ajiaco",
		"Type" 		=> "Special Soup", 
		"Origin" 	=> "Bogota"
	),
	
	"Bandeja Paisa"	=> array(
		"Name"		=> 	"Bandeja Paisa",
		"Type"		=>	"Main Course",
		"Origin" 	=>	"Antioquia"
		),
	
	"Arequipe"		=> array(
		"Name"		=> "Arequipe",
		"Type"		=>	"Desert",
		"Origin"	=>	"Heaven!"
		),
	"Arepa"		=> array(
		"Name"		=> "Arepa",
		"Type"		=>	"Snack",
		"Origin"	=>	"Anywhere in Colombia"
		)
);
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "{$food_assoc['Ajiaco']['Name']} | {$food_assoc['Ajiaco']['Type']} | {$food_assoc['Ajiaco']['Origin']} <br>";
echo "{$food_assoc['Bandeja Paisa']['Name']} | {$food_assoc['Bandeja Paisa']['Type']} | {$food_assoc['Bandeja Paisa']['Origin']} <br>"; 
echo "{$food_assoc['Arequipe']['Name']} | {$food_assoc['Arequipe']['Type']} | {$food_assoc['Arequipe']['Origin']} <br>";
echo "{$food_assoc['Arepa']['Name']} | {$food_assoc['Arepa']['Type']} | {$food_assoc['Arepa']['Origin']} <br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";
?>
<!--
/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
-->
<table style = "border: 4px solid black;">
  <tr>
    <th>FOOD</th>
    <th>TYPE</th>
    <th>ORIGIN</th>
  </tr>
  <tr>
    <td><?php echo $food_assoc['Ajiaco']['Name']; ?></td>
    <td><?php echo $food_assoc['Ajiaco']['Type']; ?></td>
    <td><?php echo $food_assoc['Ajiaco']['Origin']; ?></td>
  </tr>
  <tr>
    <td><?php echo $food_assoc['Bandeja Paisa']['Name']; ?></td>
    <td><?php echo $food_assoc['Bandeja Paisa']['Type']; ?></td>
    <td><?php echo $food_assoc['Bandeja Paisa']['Origin']; ?></td>
  </tr>
    <td><?php echo $food_assoc['Arequipe']['Name']; ?></td>
    <td><?php echo $food_assoc['Arequipe']['Type']; ?></td>
    <td><?php echo $food_assoc['Arequipe']['Origin']; ?></td>
  <tr>
    <td><?php echo $food_assoc['Arepa']['Name']; ?></td>
    <td><?php echo $food_assoc['Arepa']['Type']; ?></td>
    <td><?php echo $food_assoc['Arepa']['Origin']; ?></td>
  </tr>
</table>
