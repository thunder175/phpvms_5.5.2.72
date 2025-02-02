<?php

include_once 'ofc_bar_base.php';

class bar_filled_value extends bar_value
{
	public function construct( $top, $bottom=null )
	{
		parent::bar_value( $top, $bottom );	
	}
	
	public function set_outline_colour( $outline_colour )
	{
		$tmp = 'outline-colour';
		$this->$tmp = $outline_colour;	
	}
}

class bar_filled extends bar_base
{
	public function __construct( $colour=null, $outline_colour=null )
	{
		$this->type      = "bar_filled";
		parent::bar_base();
		
		if( isset( $colour ) )
			$this->set_colour( $colour );
		
		if( isset( $outline_colour ) )
			$this->set_outline_colour( $outline_colour );
	}
	
	public function set_outline_colour( $outline_colour )
	{
		$tmp = 'outline-colour';
		$this->$tmp = $outline_colour;	
	}
}

