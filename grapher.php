<?php


renderPhpToString("http://eque-e.cl/backend/specialcharacter.php");

function renderPhpToString($file, $vars=null)
{
    if (is_array($vars) && !empty($vars)) {
        extract($vars);
    }
    ob_start();
    include $file;
    return ob_get_clean();
}


?>