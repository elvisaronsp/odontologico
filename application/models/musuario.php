<?php
class MUsuario extends CI_Model {
	function addUsuario($data) {
		$this->db->insert ( 'usuario', $data );
	}
	function listUsuario() {
		$this->db->join ( 'perfil', 'perfil.id_perfil = usuario.perfil' );
		$this->db->where ( 'ativo = "S"' );
		$this->db->order_by ( 'login', 'asc' );
		return $this->db->get ( 'usuario' );
	}
	function listUsuarioInativo() {
		$this->db->join ( 'perfil', 'perfil.id_perfil = usuario.perfil' );
		$this->db->where ( 'ativo = "N"' );
		$this->db->order_by ( 'login', 'asc' );
		return $this->db->get ( 'usuario' );
	}
	function getUsuario($id) {
		return $this->db->get_where ( 'usuario', array (
				'id_usuario' => $id 
		) );
	}
	function updateUsuario($id, $data) {
		$this->db->where ( 'id_usuario', $id );
		$this->db->update ( 'usuario', $data );
	}
	function deleteUsuario($id) {
		$this->db->where ( 'id_usuario', $id );
		$this->db->delete ( 'usuario' );
	}
	function inativarUsuario($id) {
		$data = array (
				'ativo' => 'N' 
		);
		$this->db->where ( 'id_usuario', $id );
		$this->db->update ( 'usuario', $data );
	}
	function ativarUsuario($id) {
		$data = array (
				'ativo' => 'S' 
		);
		$this->db->where ( 'id_usuario', $id );
		$this->db->update ( 'usuario', $data );
	}
}

/* End of file musuario.php */
/* Location: ./system/application/models/musuario.php */