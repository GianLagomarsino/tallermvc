<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario extends CI_Model {
	
	
	function obtenerUsuario()
	{
		$this->db->select('*')->from('trabajadores');
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
