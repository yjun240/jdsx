<?php 

class User_xinxiModel extends Model{

	protected $table_name = 'addres';

	function __construct(){

		global $C;

		parent::__construct($C, true);
 	}
}

?>