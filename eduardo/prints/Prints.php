<?php
/**
 * User: Eduardo Kraus
 * Date: 07/09/2023
 * Time: 10:43
 */

class Prints
{
    public static function load( $pasta )
    {
        //static $send = false;
        //if( !$send ) {
        //    $send = true;
        //    echo "
        //        <script src=\"/js/vendor/jquery.min.js\"></script>
        //        <link href=\"/eduardo/lightbox/style.css\" rel=\"stylesheet\"/>
        //        <script src=\"/eduardo/lightbox/lightbox.js\"></script>";
        //}

        $imagens = glob( __DIR__ . "/{$pasta}/mini/*.png" );

        echo "<div class='lightbox-galery'>";
        foreach( $imagens as $imagem ) {

            $thumbnail = str_replace( __DIR__, "prints", $imagem );
            $image     = str_replace( "/mini/", "/max/", $thumbnail );
            $texto     = file_get_contents( "{$imagem}.txt" );

            if( strpos( $texto, "href" ) ) {
                $texto_html = htmlentities( $texto );
                $texto_alt  = strip_tags( $texto );

                $link = preg_replace( '/.*href="(.*?)".*/', '$1', $texto );
            } else {
                $texto_html = htmlentities( $texto );
                $texto_alt  = strip_tags( $texto );
                $link       = $image;
            }

            echo "
                <div class='image-lightbox-galery' 
                     data-href='{$image}' 
                     data-lightbox='{$pasta}' 
                     data-title='{$texto_html}'
                     style='page-break-inside: avoid'>
                    <a href='{$link}' target='_blank'>
                        <img src='{$thumbnail}' alt='{$texto_alt}' />
                    </a>
                    <span class='caption'>{$texto}</span>
                </div>";

        }

        echo "</div>";
    }
}


