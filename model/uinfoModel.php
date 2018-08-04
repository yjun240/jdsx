<?php

class uinfoModel extends Model{

	protected $table_name = 'uinfo';

	function __construct()
	{
		global $C;

		parent::__construct($C, true);
	}
}

?>