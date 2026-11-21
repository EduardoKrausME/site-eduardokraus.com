<?php
/**
 * User: Eduardo Kraus
 * Date: 07/09/2023
 * Time: 11:27
 */


$imagens = glob( "./mini/*.png" );

foreach( $imagens as $imagem ) {
    echo "{$imagem}\n";

    if( !file_exists( "{$imagem}.txt" ) ) {
        file_put_contents( "{$imagem}.txt", "" );
    }
}