<div class="container">
	<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Data Jurusan</div>
                    <a href="<?php echo site_url('kelas_kategori/create'); ?>" class="btn btn-primary">Tambah Data</a>
                  	<div class="card-body">
                    	<table class="table table-responsive-sm table-bordered table-striped table-sm">
                      		<thead>
                        		<tr>
                          			<th>No</th>
                          			<th>Jurusan</th>
                          			<th>Aksi</th>
                        		</tr>
                      		</thead>
                      		<tbody>
                        		<?php foreach ($kelas_kategori as $kelas_kategori_item); ?>
                            <tr>
                              <td align="center"><?php echo $kelas_kategori_item['id_kategori']; ?></td>
                              <td align="center"><?php echo $kelas_kategori_item['kategori_kelas']; ?></td>
                              <td align="center">
                                <a href="<?php echo site_url('kelas_kategori/view/'.$kelas_kategori_item['id_kategori']); ?>" class="menu2"> View </a> 
                                <a href="<?php echo site_url('kelas_kategori/edit/' .$kelas_kategori_item['id_kategori']); ?>" class="menu2"> Edit </a>
                                <a href="<?php echo site_url('kelas_kategori/delete/' .$kelas_kategori_item['id_kategori']); ?>" class="menu2" onClick="return confirm(' Are You Sure Want to delete?')"> Delete </a>
                              </td>
                            </tr>
                      		</tbody>
                    	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
  </div>
