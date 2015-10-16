<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class producto extends CI_Model {
	
	
	function obtenerProducto()
	{
		$this->db->select('*')->from('productos');
		$query= $this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
		
		
	}
}
