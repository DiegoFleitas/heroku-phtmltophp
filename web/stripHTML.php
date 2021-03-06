<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 22/05/2018
 * Time: 21:52
 */


//$fichero = file_get_contents($_FILES['fichero_usuario']['name']);
$fichero = $_POST["text"];


/*
OR

    $dir_subida = '/';
    $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
    $fichero = file_get_contents($fichero_subido, true);

OR

    $gestor = fopen($_FILES['fichero_usuario']['name'], "r") or die("Unable to open file!");
    $fichero = fread($gestor,filesize($_FILES['fichero_usuario']['name']));
//    fclose($gestor);

BOTH DON'T WORK SINCE WE HAVE READ ONLY FILESYSTEM ON HEROKU
*/


//    highlight_string($fichero);
//    die();

    $tokens = token_get_all($fichero);

    $echothis = FALSE;
    $istag = FALSE;
    $newsource = '';
    $newsource .= '<?php /* Pega esto en PHPStorm y apreta CTRL + ALT + SHIFT + L */ ?>' . PHP_EOL . PHP_EOL;

    foreach ($tokens as $token){
        $token_name = is_array($token) ? $token[0] : null;
        $token_data = is_array($token) ? $token[1] : $token;

        if($token_name == T_OPEN_TAG || $token_name == T_OPEN_TAG_WITH_ECHO || $token_name == T_CLOSE_TAG){
            if($token_name == T_OPEN_TAG || $token_name == T_OPEN_TAG_WITH_ECHO){

                $newsource .= '<?php ';
                $echothis = TRUE;
                $istag = TRUE;
            }
            elseif($token_name == T_CLOSE_TAG){

                $newsource .= ' ?>';
                $newsource .= PHP_EOL;
                $echothis = FALSE;
                $istag = TRUE;
            }
        } else { $istag = FALSE; }

        //  istag fixes php being commentend
        // since <? and  ? > mark comments in HTML we cant echo php tags inside php tags
        if($echothis && !$istag){
            $newsource .= $token_data;
        }
    }

    highlight_string($newsource);
