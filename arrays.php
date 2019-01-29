<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$favfood = ["Strawberries", "Kiwi", "Raspberries", "Oranges"];

/*
Print every array element in a new line.
*/

echo "<p>" . $favfood[0] . "</p>";
echo "<p>" . $favfood[1] . "</p>";
echo "<p>" . $favfood[2] . "</p>";
echo "<p>" . $favfood[3] . "</p>";



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

echo "<ul>";
echo "<li>" . $favfood[0] . "</li>";
echo "<li>" . $favfood[1] . "</li>";
echo "<li>" . $favfood[2] . "</li>";
echo "<li>" . $favfood[3] . "</li>";
echo "</ul>";



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
$food_assoc = [
    "Strawberries" => "Berry",
    "Kiwi" => "Snack", 
    "Raspberries" => "Dessert", 
    "Oranges" => "Citrus"
    ];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach ($food_assoc as $key => $value) {
    echo "<p>$key | $value</p>";
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

$strawberries = [
        "type" => "Berry",
        "origin" => "France"
    ];
    
$kiwi = [
        "type" => "Snack",
        "origin" => "New Zealand"
    ];
    
$oranges = [
        "type" => "Citrus",
        "origin" => "China"
    ];
    
$raspberries = [
        "type" => "Dessert",
        "origin" => "Greece"
    ];

$food_assoc = [
    "Strawberries" => $strawberries,
    "Kiwi" => $kiwi,
    "Raspberries" => $raspberries,
    "Oranges" => $oranges
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "<ul>";
    foreach ($food_assoc as $key => $fruit) {
        echo "<li>";
            echo "$key"; 
                foreach ($fruit as $fruitkey => $value) {
                    echo " | $value";
                }
        echo"</li>";
    }
echo "</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
    
    
echo "<table>";
    echo "<tr>";
        echo "<th><h2>Food</h2></th>";
        echo "<th><h2>Type</h2></th>";
        echo "<th><h2>Origin</h2></th>";
    echo "</tr>";
    
    foreach ($food_assoc as $key => $fruit) {
        echo "<tr>";
            echo "<th>$key</th>"; 
                foreach ($fruit as $fruitkey => $value) {
                    echo "<th>$value</th>";
                }
        echo"</tr>";
    }

echo "</table>"

?>