<?php 
function esc_html($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function read_csv_rows($path)
{
    try{
    
    if (is_file($path === false)){
     return [];
    }
    $fp = fopen($path, 'rb');

    while(!feof($fp))
    {
        while (($row = fgetcsv($fp)) !== false)
        {
            $csvArray[] = $row;
        }
    }
    return $csvArray;
    }
    catch(Exception $e){
        echo "Error: " . $e;
        return [];
    }

    fclose($fp);
}

