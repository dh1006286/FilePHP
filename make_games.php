<?php 
$path = __DIR__ . DIRECTORY_SEPARATOR . "games";


$data = [
    ["name" => "Zelda", "console" => "3DS", "price" => 60],
    ["name" => "Halo", "console" => "Xbox", "price" => 60],
    ["name" => "Call of Duty", "console" => "Xbox", "price" => 80],
    ["name" => "Pokemon Black Version 2", "console" => "DSi", "price" => 30],
];

$filePath = $path . DIRECTORY_SEPARATOR . "games.csv";

echo $filePath;

$file = fopen($filePath, "wb");

foreach($data as $value)
{
    fputcsv($file, [$value['name'], $value['console'], $value['price']]);
}

fclose($file);
echo("finished");
