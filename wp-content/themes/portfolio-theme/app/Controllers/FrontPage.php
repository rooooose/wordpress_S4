<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

	protected $acf = true;

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

        $query = get_posts($args);
        return $query;
    }


    public function getReasArt()
    {
    	

        $args = array(
        'post_type' => 'portfolio_items',
        'tax_query' => array(
        	array(
        		'taxonomy' => 'item_type',
        		'field' => 'slug', 
        		'terms' => 'reas-art'
        	),	
        )
        
        );

        $query = get_posts($args);
        return $query;
    }

    




}
