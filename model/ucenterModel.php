<?php 

class ucenterModel extends Model{

	protected $table_name = 'addres';

	function __construct(){

		global $C;

		parent::__construct($C, true);
 	}
}

?>