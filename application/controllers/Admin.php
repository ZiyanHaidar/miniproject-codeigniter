<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

 function __construct(){
  parent::__construct();
$this->load->model('m_model');
$this->load->helper('my_helper');
if ($this->session->userdata('logged_in')!=true) {
    redirect(base_url().'auth');
}
 }

 public function index()
  {
    $data['mapel'] = $this->m_model->get_data('mapel')->num_rows();
    $data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
    $data['guru'] = $this->m_model->get_data('guru')->num_rows();
    $data['kelas'] = $this->m_model->get_data('kelas')->num_rows();
    $this->load->view('admin/index', $data);
  }
 
 public function siswa()
 {
    $data['siswa'] = $this->m_model->get_data('siswa')->result();
  $this->load->view('admin/siswa', $data);
 }
 public function hapus_siswa($id)
{
    $this->m_model->delete('siswa', 'id_siswa', $id);
    $this->session->set_flashdata('success', 'Siswa berhasil dihapus!');
    redirect(base_url('admin/siswa'));
}

 public function tambah_siswa()
 {
    $data['kelas'] = $this->m_model->get_data('kelas')->result();
  $this->load->view('admin/Tambah_siswa', $data);
 }
 
 public function aksi_Tambah_siswa()
 {
    $data = [
        'nama_siswa' => $this->input->post('nama'),
        'nisn' => $this->input->post('nisn'),
        'gender' => $this->input->post('gender'),
        'id_kelas' => $this->input->post('kelas'),
    ];
    $this->m_model->tambah_data('siswa', $data);
    redirect(base_url('admin/siswa'));
 }

 public function ubah_siswa($id){ 
  $data['siswa']=$this->m_model->get_by_id('siswa', 'id_siswa', $id)->result(); 
  $data['kelas']=$this->m_model->get_data('kelas')->result(); 
  $this->load->view('admin/ubah_siswa', $data); 
}

 public function aksi_ubah_siswa()
 {
    $data = array (
        'nama_siswa' => $this->input->post('nama'),
        'nisn' => $this->input->post('nisn'),
        'gender' => $this->input->post('gender'),
        'id_kelas' => $this->input->post('kelas'),
    );
    $eksekusi=$this->m_model->ubah_data
    ('siswa', $data, array('id_siswa'=>$this->input->post('id_siswa')));
    if($eksekusi)
    {
      $this->session->set_flashdata('sukses', 'berhasil');
      redirect(base_url('admin/siswa'));
    }
    else{
      $this->session->set_flashdata('error', 'gagal..');
      redirect(base_url('admin/ubah_siswa/'.$this->input->post('id_siswa')));
    }
  }
 public function guru()
 {
    $data['guru'] = $this->m_model->get_data('guru')->result();
  $this->load->view('admin/guru', $data);
 }
 public function hapus_guru($id)
{
    $this->m_model->delete('guru', 'id_guru', $id);
    $this->session->set_flashdata('success', 'Guru berhasil dihapus!');
    redirect(base_url('admin/guru'));
}

 public function tambah_guru()
 {
    $data['mapel'] = $this->m_model->get_data('mapel')->result();
  $this->load->view('admin/Tambah_guru', $data);
 }
 
 public function aksi_Tambah_guru()
 {
    $data = [
        'nama_guru' => $this->input->post('nama'),
        'nisn' => $this->input->post('nisn'),
        'gender' => $this->input->post('gender'),
        'id_mapel' => $this->input->post('mapel'),
    ];
    $this->m_model->tambah_data('guru', $data);
    redirect(base_url('admin/guru'));
 }

 public function ubah_guru($id){ 
  $data['guru']=$this->m_model->get_by_id('guru', 'id_guru', $id)->result(); 
  $data['mapel']=$this->m_model->get_data('mapel')->result(); 
  $this->load->view('admin/ubah_guru', $data); 
}

 public function aksi_ubah_guru()
 {
    $data = array (
        'nama_guru' => $this->input->post('nama'),
        'nisn' => $this->input->post('nisn'),
        'gender' => $this->input->post('gender'),
        'id_mapel' => $this->input->post('mapel'),
    );
    $eksekusi=$this->m_model->ubah_data
    ('guru', $data, array('id_guru'=>$this->input->post('id_guru')));
    if($eksekusi)
    {
      $this->session->set_flashdata('sukses', 'berhasil');
      redirect(base_url('admin/guru'));
    }
    else{
      $this->session->set_flashdata('error', 'gagal..');
      redirect(base_url('admin/ubah_guru/'.$this->input->post('id_guru')));
    }
  }
 public function kelas()
 {
    $data['kelas'] = $this->m_model->get_data('kelas')->result();
  $this->load->view('admin/kelas', $data);
 }
 public function hapus_kelas($id)
{
    $this->m_model->delete('kelas', 'id', $id);
    $this->session->set_flashdata('success', 'Kelas berhasil dihapus!');
    redirect(base_url('admin/kelas'));
}

 public function tambah_kelas()
 {
    $data['kelas'] = $this->m_model->get_data('kelas')->result();
  $this->load->view('admin/Tambah_kelas', $data);
 }
 
 public function aksi_Tambah_kelas()
 {
    $data = [
      'tingkat_kelas' => $this->input->post('tingkat'),
      'jurusan_kelas' => $this->input->post('jurusan'),
    ];
    $this->m_model->tambah_data('kelas', $data);
    redirect(base_url('admin/kelas'));
 }

 public function ubah_kelas($id){ 
  $data['kelas']=$this->m_model->get_by_id('kelas', 'id', $id)->result(); 
  
  $this->load->view('admin/ubah_kelas', $data); 
}

 public function aksi_ubah_kelas()
 {
    $data = array (
        'tingkat_kelas' => $this->input->post('tingkat'),
        'jurusan_kelas' => $this->input->post('jurusan'),
        
    );
    $eksekusi=$this->m_model->ubah_data
    ('kelas', $data, array('id'=>$this->input->post('id')));
    if($eksekusi)
    {
      $this->session->set_flashdata('sukses', 'berhasil');
      redirect(base_url('admin/kelas'));
    }
    else{
      $this->session->set_flashdata('error', 'gagal..');
      redirect(base_url('admin/ubah_kelas/'.$this->input->post('id')));
    }
  }
 public function mapel()
 {
    $data['mapel'] = $this->m_model->get_data('mapel')->result();
  $this->load->view('admin/mapel', $data);
 }
 public function hapus_mapel($id)
{
    $this->m_model->delete('mapel', 'id', $id);
    $this->session->set_flashdata('success', 'Mapel berhasil dihapus!');
    redirect(base_url('admin/mapel'));
}

 public function tambah_mapel()
 {
    $data['mapel'] = $this->m_model->get_data('mapel')->result();
  $this->load->view('admin/Tambah_mapel', $data);
 }
 
 public function aksi_Tambah_mapel()
 {
    $data = [
        'nama_mapel' => $this->input->post('nama'),
        'nama_guru' => $this->input->post('namaguru'),
        
    ];
    $this->m_model->tambah_data('mapel', $data);
    redirect(base_url('admin/mapel'));
 }

 public function ubah_mapel($id){ 
  $data['mapel']=$this->m_model->get_by_id('mapel', 'id', $id)->result();  
  $this->load->view('admin/ubah_mapel', $data); 
}

 public function aksi_ubah_mapel()
 {
    $data = array (
        'nama_mapel' => $this->input->post('nama'),
        'nama_guru' => $this->input->post('namaguru'),
        
    );
    $eksekusi=$this->m_model->ubah_data
    ('mapel', $data, array('id'=>$this->input->post('id')));
    if($eksekusi)
    {
      $this->session->set_flashdata('sukses', 'berhasil');
      redirect(base_url('admin/mapel'));
    }
    else{
      $this->session->set_flashdata('error', 'gagal..');
      redirect(base_url('admin/ubah_mapel/'.$this->input->post('id')));
    }
  }
}
?>