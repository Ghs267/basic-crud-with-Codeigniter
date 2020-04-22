<?php 

class Product_model extends CI_model{
    public function getAllProduct()
    {
        return $this->db->get('product')->result_array();
    }

    public function TambahDataProduct()
    {
        $data = [
            "product_name"=>$this->input->post('nama'),
            "qty_per_unit"=>$this->input->post('qpu'),
            "price"=>$this->input->post('harga'),
            "stock"=>$this->input->post('stock'),
            "id_supplier" =>$this->input->post('sup'),
            "id_category"=>$this->input->post('cat')
        ];
        
           $insert = $this->db->insert('product',$data);
        
    }
    
    public function hapusData($id){
        //$this->db->where('id_product',$id);
        $this->db->delete('product',['id_product'=>$id]);
    }
    
    public function getProductById($id){
        return $this->db->get_where('product',['id_product'=>$id])->row_array();
    }

    public function ubahDataProduct()
    {
        $data = [
            "product_name"=>$this->input->post('nama'),
            "qty_per_unit"=>$this->input->post('qpu'),
            "price"=>$this->input->post('harga'),
            "stock"=>$this->input->post('stock'),
            "id_supplier" =>$this->input->post('sup'),
            "id_category"=>$this->input->post('cat')
        ];

        $this->db->where('id_product', $this->input->post('id'));
        $this->db->update('product',$data);
        
    }
}


?>