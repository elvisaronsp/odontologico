<?php
class MPerfil extends CI_Model {
	function listPerfil() {
		return $this->db->get ( 'perfil' );
	}
	function getPerfil($id) {
		return $this->db->get_where ( 'perfil', array (
				'id_perfil' => $id 
		) );
	}
}

/* End of file perfil.php */
/* Location: ./system/application/models/perfil.php */