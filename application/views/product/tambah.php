<div class="container">
    <div class="row mt-3 ">
        <div class="col-md-6">
        <h2>Form Penambahan Data Produk</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    <small class="form-text text-danger"><?=form_error('nama')?></small>
                </div>
                <div class="form-group">
                    <label for="sup">Supplier</label>
                    <select class="form-control" id="sup" name="sup">
                        <option value="1">PT Anu</option>
                        <option value="2">CV Blabla</option>
                        <option value="3">PT Chitchat</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="sup">Category</label>
                    <select class="form-control" id="cat" name="cat">
                        <option value="1">Makanan</option>
                        <option value="2">Minuman</option>
                        <option value="3">Snack</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Quantity per Unit</label>
                    <input type="text" class="form-control" id="qpu" name="qpu">
                    <small class="form-text text-danger"><?=form_error('qpu')?></small>
                </div>
                <div class="form-group">
                    <label for="name">Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock">
                    <small class="form-text text-danger"><?=form_error('stock')?></small>
                </div>
                <div class="form-group">
                    <label for="name"> Price</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                    <small class="form-text text-danger"><?=form_error('harga')?></small>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                    <a href= "<?=base_url()?>product"type="submit" name="tambah" class="btn btn-danger">Kembali</a>
                </div>
                
            </form>
        </div>
    </div>
</div>