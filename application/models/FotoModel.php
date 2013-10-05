<?php

class FotoModel extends DataMapper{
	var $table = "foto";	
	var $has_one = array('album' => array('class' => 'AlbumModel','other_field' => 'foto'));
	var $auto_populate_has_one = TRUE;
	
	function FotoModel()
	{
		parent::DataMapper();
	}
}
