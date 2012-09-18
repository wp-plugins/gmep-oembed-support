<?php
/*
Plugin Name:    GMEP oEmbed Support
Plugin URI:     http://gmep.imeducate.com/contact
Description:    Adds support for http://gmep.imeducate.com/ to the internal oEmbed parser
Author:         The Frontier Group
Author URI:     http://www.thefrontiergroup.com.au/
Version:        0.5
*/

/*  Copyright 2012  The Frontier Group  (email : info@thefrontiergroup.com.au)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function gmep_add_oembed_support() {
  wp_oembed_add_provider('http://gmep.imeducate.com/*', 'http://gmep.imeducate.com/oembed');
  wp_oembed_add_provider('https://gmep.imeducate.com/*', 'https://gmep.imeducate.com/oembed');
}
add_filter('init', 'gmep_add_oembed_support');

?>
