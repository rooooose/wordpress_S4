<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

	public function getReasProg()
    {
        $args = array(
        'post_type' => 'portfolio_items',
        'tax_query' => array(
        	'taxonomy' => 'item_type',
        	'field' => 'slug', 
        	'terms' => 'reas-prog'
        )
        
        );
        $reas_prog_query = new \WP_Query($args);
        return $reas_prog_query;
        //return get_bloginfo('name');
    }

}
