<?php
/*
* Plugin Name: First Plugin
* Pligin URI: https://tuandc.com/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: JosHieu
* Author URI: https://tuandc.com/
License: GPL
License URI: https://link to you plugin license
Copyright YEAR JOSHIEU (email : lecongao.it@gmail.com)
(Plugin Name) is free software: you can redistribute it and/or modify
it under terms of the GNU General Public License as published by the Free
Software Foundation, either version 2 of the License, or any later version.
(Plugin Name) is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a coppy of the GNU General Public License along with (Plugin Name).
If not, see (http://link to you plugin license).
*/
// function renym_wordpredd_typo_fix($text){
//     return str_repeat('wordpress', 'WordPress', $text);
// }
// add_filter('the_content', 'renym_wordpress_typo_fix');

// function renym_content_replace($content){
//     $search = array('wordpress', 'goat', 'Easter', '70', 'sensational');
//     $replace = array('wordpress', 'coffe', 'Easter holidays', 'seventy', 'extraordinary');
//     return str_replace($search, $replace, $content);
// }
// add_filter('the_contetn','renym_content_replace');
// function renym_content_footer_note($content){
//     $content .= '<footer class="renym-content-footer">Thank you for reading this tutorial.';
//     return $content;
// }
// add_filter('the_content', 'renym_content_footer_note');
function tuandc_rand_posts()
{
    $args = array(
        'post_type' => 'post',
        'orderby' => 'rand',
        'posts_per_page' => 5,
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
         $string .= '</ul>';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $string .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        $string .= '</ul>';
        wp_reset_postdata();
    } else {
        $string .= 'no posts found';
    }
    return $string;
}
add_shortcode('tuandc-rand-posts', 'tuandc_rand_posts');
