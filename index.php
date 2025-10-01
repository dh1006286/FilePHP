<?php 
require "includes" . DIRECTORY_SEPARATOR . "functions.php";

$filePath = __DIR__ . DIRECTORY_SEPARATOR . "games" . DIRECTORY_SEPARATOR . "games.csv";

$rows = read_csv_rows($filePath);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <th>
            <tr>
            <td>Name</td>
            <td>Console</td>
            <td>Price</td>
</tr>
        </th>
        <tbody>
            <?php foreach($rows as $row):?>
            <tr>
                <td><?=esc_html($row[0])?></td>
                <td><?=esc_html($row[1])?></td>
                <td>$<?=esc_html(number_format((float)$row[2], 2))?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
 

</body>
</html>