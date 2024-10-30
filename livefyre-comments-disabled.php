<?php
/*
Plugin Name: Livefyre Comments Have Been Disabled For This Post
Plugin URI: http://www.diywebmastery.com/livefyre-comments-disabled
Description: Hides LiveFyre when comments are disabled, suppressing unwanted LiveFyre messages and images.
Version: 0.2
Author: Russell Jamieson
Author URI: http://www.russelljamieson.com

Copyright 2011 Russell Jamieson (russell.jamieson@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//jQuery is loaded in the footer by design. However, if your WordPress theme does support the wp_footer hook you should uncomment the following line.

//add_action('wp_header', 'livefyre_comments_disabled_message_hidden');

add_action('wp_footer', 'livefyre_comments_disabled_message_hidden');

add_action('wp_enqueue_scripts', 'livefyre_comments_disabled_message_jquery');

function livefyre_comments_disabled_message_jquery() {
    wp_enqueue_script( 'jquery' );  //make sure jQuery is installed
}    
 
function livefyre_comments_disabled_message_hidden() {
//hide LiveFyre if comments are disabled
?>
<script type="text/javascript">
jQuery(document).ready(function($){
 	$('#livefyre').has('.lf_comments_disabled').hide();
});
</script>
<?
}