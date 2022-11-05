<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<select>
<?php
for ($i = 2000; $i >= 1900; $i--){
    echo "<option>$i</option>";
}
?>

</select>
</body>
</html>






<?php
echo "<br>";

for ($i = 1; $i <= 5; $i++){
    echo str_repeat("*", $i) . "<br>";
}

for ($i = 5; $i >= 1; $i--){
    echo str_repeat("*", $i) . "<br>";
}




$savings = [200, 300,400,500,1000, 2000];
$array = [];
$sum = 0;
for($i = 0; $i < count($savings); $i++) {
    $sum = $savings[$i] + $sum;

    array_push($array, $sum);
}


echo "<pre>";
print_r($array);
echo "</pre>";



$num = 10;
$factorial = 10;
for ($i = 10; $i >= $num; $i--) {
    $factorial *= $i;
};

echo $factorial;



echo "<br>";
for($i = 1; $i <= 20; $i++) {
    for($time = 1; $time <= 10; $time++) {
        $result = $i * $time;
        echo " $i * $time = $result <br>";
    } 
    echo "finish line <br>";
}


$flowers = [
    'lotus',
    'rose',
    'lily',
    'sunflower',
];

echo "<ul>";
foreach ( $flowers as $flower) {
    echo "<li>$flower</li>";
}
echo "</ul>";


$users = [
    [
        'id' => 1,
        'name' => 'sabbir',
        'email' => '12345@gmail.com',
    ],
    [
        'id' => 2,
        'name' => 'anas',
        'email' => '123451@gmail.com',
    ],
    [
        'id' => 3,
        'name' => 'najmul',
        'email' => '123452@gmail.com',
    ],
    [
        'id' => 4,
        'name' => '0pi',
        'email' => '123453@gmail.com',
    ], [
        'id' => 5,
        'name' => 'zisan',
        'email' => '123455@gmail.com',
    ],
    [
        'id' => 6,
        'name' => 'hridoy',
        'email' => '123455@gmail.com',
    ],
    [
        'id' => 7,
        'name' => 'zim',
        'email' => '123456@gmail.com',
    ],

];
echo "<pre>";
print_r($users);
echo "</pre>";
foreach($users as $key => $user) {
    if ( $key < 3) {
        echo $user['name'] . "<br>";
    }
    else{
        break;
    }

    
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<div class="col-5 mx-auto mt-5">
    <from action="./Controller/test.php" method="post">
        <label class="w-100">
            First name
            <input type="text" class="from-control" name="FName">
</label>
        <label class="w-100">
            Last name
            <input type="text" class="from-control" name="LName">
</label>
<label class="w-100">
            Birth date
            <input type="text" class="from-control" name="Birthdate">
            
</label>
        <button class="btn btn-primary mt-2 w-50 rounded-0">submit</button>
    </from>
</div>


</body>
</html>

