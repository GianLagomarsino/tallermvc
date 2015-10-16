<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sucursal extends CI_Model {
	
	
	function obtenerSucursal()
	{
		$this->db->select('*')->from('sucursales');
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
