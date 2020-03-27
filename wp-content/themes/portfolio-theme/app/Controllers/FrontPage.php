<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

	//protected $acf = true;

	public function getReasProg()
    {
    	

        $args = array(
        'post_type' => 'portfolio_items',
        'tax_query' => array(
        	array(
        		'taxonomy' => 'item_type',
        		'field' => 'slug', 
        		'terms' => 'reas-prog'
        	),
        	
        )
        
        );
        //$reas_prog_query = new WP_Query($args);
        $reas_prog_query = get_posts($args);
        return $reas_prog_query;
    }

}
