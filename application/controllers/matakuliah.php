<?php
class Matakuliah extends CI_Controller
{
	public function index(){
		$this->load->view('view-form-matakuliah');
	}

	public function cetak(){
		$this->form_validation->set_rules('kode','Kode Matakuliah','required|min_length[3]',[
			'required'=>'Kode Matakuliah Harus diisi',
			'min_leght'=>'Kode terlalu pendek']);

		$this->form_validation->set_rules('matkul','Nama Matakuliah','required|min_length[3]',[
			'required'=>'Nama Matakuliah Harus diisi',
			'min_leght'=>'Nama terlalu pendek']);

		$this->form_validation->set_rules('kelas','Kelas Matakuliah','required|min_length[3]',[
			'required'=>'Kelas Matakuliah Harus diisi',
			'min_leght'=>'Kelas terlalu pendek']);

		$this->form_validation->set_rules('nama','Nama Mahasiswa','required|min_length[3]',[
			'required'=>'Nama Mahasiswa Harus diisi',
			'min_leght'=>'Nama terlalu pendek']);

		if ($this->form_validation->run() != true) {
			$this->load->view('view-form-matakuliah');
		} else{
			$data = [
				'kode' => $this->input->post('kode')
				'matkul' => $this->input->post('matkul')
				'kelas' => $this->input->post('kelas')
				'nama' => $this->input->post('nama')];

			$this->load->view('view-data-matakuliah', $data);
		}
	}
}
?>