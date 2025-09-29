<?php 
function esc_html($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function read_csv_rows($path)
{
    if (is_file($path === false)){
     return [];
    }
    $fp = fopen($path, 'rb');

    while(!feof($fp))
    {
        
    }
}