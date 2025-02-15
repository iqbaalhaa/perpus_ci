<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	//home default
	public function index(){
		$data['title']='Petugas Home';
		$data['pointer']="Home";
		$data['classicon']="fa fa-home";
		$data['main_bread']="Home";
		$data['sub_bread']="Dashboard";
		$data['desc']="Overview";
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		
		$year=date('Y');
		$result = $this->Buku_model->get_jml_peminjaman(''.$year.'-01-01', ''.$year.'-01-31');
		$data['januari'] = ($result && isset($result->total)) ? $result->total : 0;
		$data['februari'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-02-01', ''.$year.'-02-31')) ? $result->total : 0;
		$data['maret'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-03-01', ''.$year.'-03-31')) ? $result->total : 0;
		$data['april'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-04-01', ''.$year.'-04-31')) ? $result->total : 0;
		$data['mei'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-05-01', ''.$year.'-05-31')) ? $result->total : 0;
		$data['juni'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-06-01', ''.$year.'-06-31')) ? $result->total : 0;
		$data['juli'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-07-01', ''.$year.'-07-31')) ? $result->total : 0;
		$data['agustus'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-08-01', ''.$year.'-08-31')) ? $result->total : 0;
		$data['september'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-09-01', ''.$year.'-09-31')) ? $result->total : 0;
		$data['oktober'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-10-01', ''.$year.'-10-31')) ? $result->total : 0;
		$data['november'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-11-01', ''.$year.'-11-31')) ? $result->total : 0;
		$data['desember'] = ($result = $this->Buku_model->get_jml_peminjaman(''.$year.'-12-01', ''.$year.'-12-31')) ? $result->total : 0;

		// /*line chart */
    	$data['buku_pinjam']=$this->Buku_model->buku_pinjam();
    	$data['kategori_pinjam']=$this->Buku_model->kategori_pinjam();
    	$data['kelas_pinjam']=$this->Buku_model->kelas_pinjam();
    
    	$data['warna']=	array('#f56954','#00a65a','#f39c12','#00c0ef','#3c8dbc','#d2d6de', '#d9f442','#561d84','#f90ec3', '#31f7a4');
		$tmp['content']=$this->load->view('petugas/home',$data, TRUE);
		$this->load->view('petugas/layout',$tmp);
	}
}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */