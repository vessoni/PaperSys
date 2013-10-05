<?php
class AlbumModel extends DataMapper{
	var $table = "album";
	var $has_many = array('foto' => array('class' => 'FotoModel','other_field' => 'album'));
	var $auto_populate_has_many = TRUE;
	
	function AlbumModel(){
		parent::DataMapper();
	}	
}
