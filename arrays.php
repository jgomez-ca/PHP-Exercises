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
	"Cuchuco de Trigo",
	"Arequipe",
	"Arepa de Maiz Amarillo"
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
	"Cuchuco de Trigo"	=>	"Super Powerful Soup",
	"Arequipe"			=>	"A piece of heaven on earth",
	"Arepa de Maiz Amarillo"	=>	"Great Snack"
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
	"Name" => array(
	"Name1"	=>	"Ajiaco",
	"Name2"	=>	"Cuchuco de Trigo",
	"Name3"	=>	"Arequipe",
	"Name4"	=>	"Arepa de Maiz Amarillo"
		),
	
	"Type" => array(
	"Name1"	=>	"Special Soup",
	"Name2"	=>	"Super Powerful Soup",
	"Name3"	=>	"Dessert",
	"Name4"	=>	"Great Snack"
		),
	
	"Origin" => array(
	"Name1"	=>	"Bogota",
	"Name2"	=>	"Eastern Mountain Range",
	"Name3"	=>	"From Heaven!",
	"Name4"	=>	"Eastern Mountain Range"
	)
	);
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo $food_assoc['Name']['Name1']," | ",$food_assoc['Type']['Name1']," | ", $food_assoc['Origin']['Name1']," | <br>";
echo $food_assoc['Name']['Name2']," | ",$food_assoc['Type']['Name2']," | ", $food_assoc['Origin']['Name2']," | <br>";
echo $food_assoc['Name']['Name3']," | ",$food_assoc['Type']['Name3']," | ", $food_assoc['Origin']['Name3']," | <br>";
echo $food_assoc['Name']['Name4']," | ",$food_assoc['Type']['Name4']," | ", $food_assoc['Origin']['Name4']," | <br>";

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
<table>
  <tr>
    <th>FOOD</th>
    <th>TYPE</th>
    <th>ORIGIN</th>
  </tr>
  <tr>
    <td><?php echo $food_assoc['Name']['Name1']; ?></td>
    <td><?php echo $food_assoc['Type']['Name1']; ?></td>
    <td><?php echo $food_assoc['Origin']['Name1']; ?></td>
  </tr>
  <tr>
    <td><?php echo $food_assoc['Name']['Name2']; ?></td>
    <td><?php echo $food_assoc['Type']['Name2']; ?></td>
    <td><?php echo $food_assoc['Origin']['Name2']; ?></td>
  </tr>
    <td><?php echo $food_assoc['Name']['Name3']; ?></td>
    <td><?php echo $food_assoc['Type']['Name3']; ?></td>
    <td><?php echo $food_assoc['Origin']['Name3']; ?></td>
  <tr>
    <td><?php echo $food_assoc['Name']['Name4']; ?></td>
    <td><?php echo $food_assoc['Type']['Name4']; ?></td>
    <td><?php echo $food_assoc['Origin']['Name4']; ?></td>
  </tr>
</table>