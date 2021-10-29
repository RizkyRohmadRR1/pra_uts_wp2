<?php

class M_data extends CI_Model 
{

	function get_data()
	{
	return $this->db->get('user');
	}
	function simpan_data($data)
	{
	$this->db->insert('user', $data);
	}
	function edit_data($where,$table)
	{
	return $this->db->get_where($table, $where);
	}
	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
