<?php 

class Product extends CI_Controller{
    public function __construct(){
        parent ::__construct();
        $this->load->model('Product_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['judul']='Daftar Product';
        $data['product']=$this->Product_model->getAllProduct();
        $this->load->view('templates/header', $data);
        $this->load->view('product/index',$data);
        $this->load->view('templates/footer');
    }
    
    public function tambah()
    {
        $data['judul']='Form Tambah Data Product';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('stock','Stock','required|numeric');
        $this->form_validation->set_rules('qpu','Quantitiy per Unit','required');
        $this->form_validation->set_rules('harga','Harga','required|numeric');

        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('product/tambah',$data);
            $this->load->view('templates/footer');
        }else{
            $this->Product_model->TambahDataProduct();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('product');
        }
    }
    
    public function hapus($id)
    {
        $this->Product_model->hapusData($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('product');
    }

    public function detail($id){
        $data['judul']="Detail Judul Mahasiswa";
        $data['product']=$this->Product_model->getProductById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('product/detail',$data);
        $this->load->view('templates/footer');
    }
    public function ubah($id)
    {
        $data['judul']='Form Ubah Data Product';
        $data['product']= $this->Product_model->getProductById($id);
    
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('stock','Stock','required|numeric');
        $this->form_validation->set_rules('qpu','Quantitiy per Unit','required');
        $this->form_validation->set_rules('harga','Harga','required|numeric');
    
        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('product/ubah',$data);
            $this->load->view('templates/footer');
        }else{
            $this->Product_model->ubahDataProduct();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('product');
        }
    }
}

?>