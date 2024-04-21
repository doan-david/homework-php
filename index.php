<?php
function varDump($param) {
    echo "<pre>";
    print_r($param);
    echo "</pre>";
};

// TODO: Array
// Create Array
echo "<div style='float: left; width: 30%'>";
echo "---- Array ----";
$arrayCars = array("Volvo", "BMW", "Toyota");
$cars = ["Volvo", "BMW", "Toyota"];
// Index Array
 $cars[1] = "Ford";
 array_push($cars, "KIA");
 varDump($cars);
// Access Array Item
echo "-- Access Array Item --<br>";
echo $cars[1];
echo "<br>-- Access The Last Array Item  --<br>";
echo $cars[count($cars) - 1];
echo "<br>-- Show array  --";
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
// Remove Array
echo "-----------Remove-----------";
// Xoa 1 phan tu
//unset($cars[2]);
// Xoa nhieu phan tu
//array_splice($cars, 4, 2);
//$newcar = array_diff($cars, ["Volvo", "Yamaha"]);
//varDump($newcar);
// Xoa phan tu dau
array_pop($cars);
// Xoa phan tu cuoi
array_shift($cars);
varDump($cars);
// Sort Array
echo "-----------Sort-----------";
$age = [17,58,31,12,42];
varDump($age);
echo "-- sort - sort arrays in ascending order";
//sort($age);
usort($age, function ($a, $b){
    return $a > $b;
});
varDump($age);
echo "-- rsort - sort arrays in descending order";
rsort($age);
varDump($age);
echo "-- asort() - sort associative arrays in ascending order, according to the value";
asort($age);
varDump($age);
echo "-- ksort() - sort associative arrays in ascending order, according to the key";
$agePeople = ["Peter" => 12, "Ben" => 17, "John" => 18, "David" => 16];
varDump($agePeople);
krsort($agePeople);
varDump($agePeople);
ksort($age);
varDump($agePeople);
// Multidimensional Array
echo "-- Multidimensional Array --";
$carsMul = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
varDump($carsMul);
echo "<table><tr>
    <th>Car</th>
    <th>In stock</th>
    <th>Sold</th>
    </tr>";
for ($i=0; $i < count($carsMul); $i++) {
    echo "<tr>";
    for ($j=0; $j < count($carsMul[$i]); $j++) {
        echo "<td>".$carsMul[$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>";
// TODO: Object
echo "<div style='float: left; width: 30%'>";
echo "---- Object ---- <br>";
// Create Object
$kitchenUmtensils = (object) [
    "burner" => 2,
    "bowl" => 5,
    "fork" => 6
];
varDump($kitchenUmtensils);
// Index Object
echo "burner: ".$kitchenUmtensils->burner."<br>";
// Access Object Item
echo "-- Access Object Item --";
varDump($kitchenUmtensils->{"fork"});
echo "<br>-- Show Object  --";
foreach ($kitchenUmtensils as $x => $y){
    echo $x." : ".$y."<br>";
}
// Update Object
echo "<br>----------Update----------";
$kitchenUmtensils->burner = 10;
varDump($kitchenUmtensils);
// Add Object
echo "-----------Add-----------<br>";
echo "-- Add one item <br>";
$kitchenUmtensils->grill = 4;
varDump($kitchenUmtensils);
// Remove Object
echo "-----------Remove-----------";
unset($kitchenUmtensils->grill);
unset($kitchenUmtensils->{'fork'});
varDump($kitchenUmtensils);
// Sort Object
$kitchenUmtensils = (object) [
    "burner" => 2,
    "knife" => 10,
    "bowl" => 5,
    "fork" => 6,
    "far" => 4
];
varDump($kitchenUmtensils);
// Multidimensional Object
$room = (object) [
    "bedroom" => (object) [
        "bed" => 2,
        "table" => 1,
        "chair" => 1
    ],
    "living_room" => (object) [
        "bed" => 3,
        "table" => 1,
        "chair" => 4
    ]
 ];
varDump($room);
echo "-- access object items";
varDump($room->bedroom->bed);
echo "<table><tr>";
foreach ($room as $x=>$y){
    echo "<td>".$x."</td>";
    echo "<td>".$y->bed."</td></tr>";

//    foreach ($room->$x as $i => $j){
//        echo "<tr><td>""</td></tr>";
//    }
//    echo "</tr>";
}
echo "</tr></table>";
echo "</div>";

// TODO: HomeWorkprint table
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
echo "<div style='float: left; width: 30%'>";
// Cách 1:
echo "-- Loop for --";
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
//    echo  "</tr>";
}
echo "</table>";
// Cách 2:
echo  "-- Loop foreach --";
echo "<table>
        <tr >
            <th>Address</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>";
foreach ($personInfo as $x){
    echo "<tr><td rowspan=".count($x->person)." style='border: 2px solid black'>".$x->address."</td>";
    foreach ($x->person as $y){
        echo
            "<td style='border: 2px solid black'>".$y->firstName."</td>
            <td style='border: 2px solid black'>".$y->lastName."</td>
            <td style='border: 2px solid black'>".$y->age."</td>
            <td style='border: 2px solid black'>".$y->gender."</td></tr>";
    }
//    echo  "</tr>";
}
echo "</table>";
echo "</div>";