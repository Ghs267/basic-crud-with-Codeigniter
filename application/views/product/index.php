<div class="container">
<?php if($this->session->flashdata('flash')):?>
<div class="col-md-12">
	<div class="col-md-12">
		<div class="alert alert-success alert-dismissible fadeshow">
		Data Product berhasil <?=$this->session->flashdata('flash');?>
		<button type="button" class="close" data-dismiss="alert"
		aria-label="close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
	</div>
</div>
<?php endif;?>

<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url();?>product/tambah" class="btn btn-primary"> Tambah Produk</a>
    </div>
</div>
<table id="example" class="table table-striped table-bordered " style="width:100%">
		<thead>
			<tr>
				<th> ID</th>
				<th> Product Name </th>
				<th> QTY  </th>
                <th> Harga </th>
				<th> Action</th>
			</tr>
		</thead>
		<tbody>	
            <?php foreach ($product as $hm):?>
            <?php echo "<tr>";?>
                <td ><?= $hm['id_product']?></td>
                <td ><?= $hm['product_name']?></td>
                <td ><?= $hm['qty_per_unit']?></td>
                <td ><?= $hm['price']?></td>
				<td><a href="<?=base_url();?>product/detail/<?= $hm['id_product'];
				?>" class="btn btn-primary float-right">Detail</a>
				<a href="<?=base_url();?>product/ubah/<?= $hm['id_product'];
				?>" class="btn btn-success float-right">Ubah </a>
				<a href="<?=base_url();?>product/hapus/<?= $hm['id_product'];
				?>" class="btn btn-danger float-right" 
				onclick="return confirm('Ingin menghapus data?');">Hapus</a>
				</td>
				
            <?php echo "</tr>";?>
            <?php endforeach;?>	
		</tbody>
		<tfoot>
			<tr>
                <th> ID</th>
				<th> Product Name </th>
				<th> QTY  </th>
                <th> Harga </th>
			</tr>
		</tfoot>
	</table>

</div>