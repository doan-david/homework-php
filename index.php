<?php
function varDump($param) {
    echo "<pre>";
    print_r($param);
    echo "</pre>";
};

// TODO: Array
// Create Array
echo "<div style='float: left; width: 30%'>";
$arrayCars = array("Volvo", "BMW", "Toyota");
$cars = ["Volvo", "BMW", "Toyota"];
// Index Array
 $cars[1] = "Ford";
 array_push($cars, "KIA");
 varDump($cars);
// Access Array Item
echo "-- Access Array Item --<br>";
echo $cars[1];
foreach ($cars as $x) {
    echo "<br>$x";
}
echo "<br>---------------------------";
foreach ($cars as $index =>$item) {
    echo "<br>$index: $item";
}
// Update Array
echo "<br>----------Update----------";
$cars[2] = "VinFast";
varDump($cars);
//foreach ($cars as &$index) {
//    $index = "Tesla";
//}
unset($x);
varDump($cars);
// Add Array
echo "-----------Add-----------";
$cars[] = "Honda";
varDump($cars);
// Add multiple items
array_push($cars, "Yamaha", "Pagani");
varDump($cars);
// Delete Array
echo "-----------Delete-----------";
//array_splice($cars, 4, 2);
//$newcar = array_diff($cars, ["Volvo", "Yamaha"]);
//varDump($newcar);
array_pop($cars);
array_shift($cars);
varDump($cars);

echo "</div>";
echo "<div style='float: left; width: 30%'> hello";
echo "</div>";
echo "<div style='float: left; width: 30%'>";
// HomeWork: print table
$personInfo = [
    (object) [
        'address' => "Thai Binh",
        'person' => [
            (object)[
                'firstName' => "Andrew",
                'lastName' => "Nguyen",
                'age' => 22,
                'gender' => "Male",
            ],
            (object)[
                'firstName' => "David",
                'lastName' => "Hoang",
                'age' => 24,
                'gender' => "Male",
            ],
            (object)[
                'firstName' => "Fia",
                'lastName' => "Nguyen",
                'age' => 21,
                'gender' => "Female",
            ]
        ]
    ],
    (object) [
        'address' => "Ha Noi",
        'person' => [
            (object)[
                'firstName' => "John",
                'lastName' => "Tran",
                'age' => 20,
                'gender' => "Male",
            ],
            (object)[
                'firstName' => "Ly",
                'lastName' => "Nguyen",
                'age' => 22,
                'gender' => "Female",
            ],
            (object)[
                'firstName' => "Bin",
                'lastName' => "Pham",
                'age' => 23,
                'gender' => "Male",
            ]
        ]
    ]
];
echo "<table>
        <tr>
            <th>Address</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>";
for ($i = 0; $i < count($personInfo); $i++) {
    echo"<tr><td rowspan=".count($personInfo[$i]->person).">".$personInfo[$i]->address."</td>";
    for ($j = 0; $j < count($personInfo[$i]->person);$j++){
        echo
            "<td>".$personInfo[$i]->person[$j]->firstName."</td>
            <td>".$personInfo[$i]->person[$j]->lastName."</td>
            <td>".$personInfo[$i]->person[$j]->age."</td>
            <td>".$personInfo[$i]->person[$j]->gender."</td></tr>";
    }
    echo  "</tr>";
}
echo "</table>";
echo "</div>";