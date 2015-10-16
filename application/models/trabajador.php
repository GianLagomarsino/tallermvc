<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class trabajador extends CI_Model {
	
	
	function obtenerTrabajador()
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
