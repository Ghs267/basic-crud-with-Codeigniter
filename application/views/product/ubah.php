<div class="container">
    <div class="row mt-3 ">
        <div class="col-md-6">
        <h2>Form Ubah Data Produk</h2>
            <form action="" method="post">
            
                <input type="hidden" name="id" value="<?= $product['id_product']?>">
                  <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $product['product_name']?>">
                    <small class="form-text text-danger"><?=form_error('nama')?></small>
                </div>
                <div class="form-group">
                    <label for="sup">Supplier</label>
                    <input type="text"  class="form-control" id="sup" 
                    name="sup" value="<?= $product['id_supplier']?>">
                </div>
                <div class="form-group">
                    <label for="sup">Category</label>
                    <input type="text"  class="form-control" id="cat" 
                    name="cat" value="<?= $product['id_category']?>">
                </div>
                <div class="form-group">
                    <label for="name">Quantity per Unit</label>
                    <input type="text" class="form-control" id="qpu" name="qpu"value="<?= $product['qty_per_unit']?>">
                    <small class="form-text text-danger"><?=form_error('qpu')?></small>
                </div>
                <div class="form-group">
                    <label for="name">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock" value="<?= $product['stock']?>">
                    <small class="form-text text-danger"><?=form_error('stock')?></small>
                </div>
                <div class="form-group">
                    <label for="name"> Price</label>
                    <input type="text" class="form-control" id="harga" name="harga"value="<?= $product['price']?>">
                    <small class="form-text text-danger"><?=form_error('harga')?></small>
                    <button type="submit" name="tambah" class="btn btn-primary">Ubah Data</button>
                    <a href= "<?=base_url()?>product"type="submit" name="tambah" class="btn btn-danger">Kembali</a>
                </div>
                
            </form>
        </div>
    </div>
</div>