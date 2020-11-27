<?php
/*
Plugin Name: S2F Contact Form Plugin
Plugin URI: http://example.com
Description: Simple non-bloated WordPress Contact Form
Version: 1.0
Author: Serigne Fallou Fall
Author URI: http://w3guy.com
*/
    
    function example_form_plugin()
    {
        $content = '';
       // $content .= '<h2>Contact us!</h2>';

       // $content .= '<label>Nom</label>'; 
       // $content .= '<input class="form-control" type = "text" name = "nom" placeholder = "Saisir votre nom"/>';

        $content .= '<fieldset class="fieldset" id="emp">';
        $content .= '<legend class="legend">Contact us!</legend>';

        $content .= ' <form method="POST" action="http://localhost/mes_projets/wordpress/cfpgtech/wordpress/index.php/thanks-yo/" >';


        $content .= ' <div class="itemFieldset">';

            $content .= ' <div>';
                $content .= '<label for="">Nom</label>';
                $content .= ' <input type="text" name="nom" id="nom" placeholder="Votre nom svp.">';
            $content .= ' </div>';

            $content .= ' <div>';
                $content .= '<label for="">Email</label>';
                $content .= ' <input type="text" name="email" id="email" placeholder="Votre email svp.">';
            $content .= ' </div>';

            $content .= ' <div>';
                $content .= '<label for="">Question ou commentaire</label>';
                $content .= ' <textarea name="commentaire" id="commentaire" placeholder="Commentaire"> </textarea>';
             $content .= ' </div>';

        $content .= ' </div>';

            $content .= '<div class="btnSave">';
                $content .= '<input type="submit" name="btnAjouter" class="btn" value="Envoyer" />';
                $content .= ' </div>';

        $content .= ' </form>';

        $content .= '</fieldset>';

        return $content;
    }

    add_shortcode('s2f_form','example_form_plugin');

   
?>
