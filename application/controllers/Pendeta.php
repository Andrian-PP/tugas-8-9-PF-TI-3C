<?php

class Pendeta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendeta_model');
    
    }
     public function index()
    {   
        $data['judul'] = 'Halaman Pendeta';
            $data['pendeta']=$this->Pendeta_model->getAllPendeta();
            if($this->input->post('keyword')){
                $data['pendeta']= $this->Pendeta_model->cariDataPendeta();
            }
    $this->load->view('templates/header',$data);
    $this->load->view('Pendeta/index',$data);
    $this->load->view('templates/footer');
    }
    public function Tambah()
    {
        $data['judul'] = 'Form Tambah Data Pendeta';
        $this->form_validation->set_rules('ntlp','Ntlp','required|is_unique[Pendeta.ntlp]');
        $this->form_validation->set_rules('namapendeta','NamaPendeta','required|is_unique[Pendeta.namapendeta]');
        if($this->form_validation->run()==false){    
            $this->load->view('templates/header',$data);
            $this->load->view('pendeta/tambah',$data);
            $this->load->view('templates/footer');
        }else {
            $this->Pendeta_model->tambahDataPendeta();
            $this->session->set_flashdata('flash', 'Ditambahkan.');
            redirect('pendeta');
        }
    }   


    public function Ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pendeta';
        $data['pendeta'] = $this->Pendeta_model->getPendetaById($id);

        $this->form_validation->set_rules('ntlp','Ntlp','required|is_unique[Pendeta.ntlp]');
        $this->form_validation->set_rules('namapendeta','NamaPendeta','required|is_unique[Pendeta.namapendeta]');
        if($this->form_validation->run()==false){    
            $this->load->view('templates/header',$data);
            $this->load->view('pendeta/ubah',$data);
            $this->load->view('templates/footer');
        }else {
            $this->Pendeta_model->ubahDataPendeta($id);
            $this->session->set_flashdata('flash', 'Diubah.');
            redirect('pendeta');
        }
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pendeta';
        $data['pendeta'] = $this->Pendeta_model->getPendetaById($id);
                $this->load->view('templates/header',$data);
                $this->load->view('pendeta/detail',$data);
                $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Pendeta_model->hapusDataPendeta($id);
        $this->session->set_flashdata('flash','Dihapus.');
        redirect('pendeta');
    }
 }