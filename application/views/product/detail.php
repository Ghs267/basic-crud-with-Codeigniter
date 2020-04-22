<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <h2>Detail Data Produk</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" disabled class="form-control" id="nama" 
                    name="nama" value="<?= $product['product_name']?>">
                </div>
                <div class="form-group">
                    <label for="sup">Supplier</label>
                    <input type="text" disabled class="form-control" id="nama" 
                    name="nama" value="<?= $product['id_supplier']?>">
                </div>
                <div class="form-group">
                    <label for="sup">Category</label>
                    <input type="text" class="form-control" id="nama" 
                    disabled name="nama" value="<?= $product['id_category']?>">
                </div>
                <div class="form-group">
                    <label for="name">Quantity per Unit</label>
                    <input type="text" disabled class="form-control" id="qpu" name="qpu" value="<?= $product['qty_per_unit']?>">
                </div>
                <div class="form-group">
                    <label for="name">Stock</label>
                    <input type="text" disabled class="form-control" id="stock" name="stock" value="<?= $product['stock']?>">
                </div>
                <div class="form-group">
                    <label for="name"> Price</label>
                    <input type="text" disabled class="form-control" id="harga" name="harga" value="<?= $product['price']?>">
                    <a href= "<?=base_url()?>product"type="submit" name="tambah" class="btn btn-danger">Kembali</a>
                </div>
                
            </form>
        
        
        </div>
    </div>
</div>