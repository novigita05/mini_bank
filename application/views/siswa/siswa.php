<div class="container">
	<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Data Siswa</div>
                    <a href="<?php echo site_url('siswa/create'); ?>" class="btn btn-primary">Tambah Data</a>
                  	<div class="card-body">
                    	<table class="table table-responsive-sm table-bordered table-striped table-sm">
                      		<thead>
                        		<tr>
                          			<th>No</th>
                          			<th>NIS</th>
                          			<th>Nama Lengkap Siswa</th>
                                <th>Email</th>
                          			<th>Jenis Kelamin</th>
                                <th>Alamat</th>
                          			<th>Aksi</th>
                        		</tr>
                      		</thead>
                      		<tbody>
                        		<?php foreach ($siswa as $siswa_item): ?>
                            <tr>
                              <td align="center"><?php echo $siswa_item['id_siswa']; ?></td>
                              <td align="center"><?php echo $siswa_item['nis']; ?></td>
                              <td align="center"><?php echo $siswa_item['nama']; ?></td>
                              <td align="center"><?php echo $siswa_item['email']; ?></td>
                              <td align="center"><?php echo $siswa_item['jenis_kelamin']; ?></td>
                              <td align="center"><?php echo $siswa_item['alamat']; ?></td>
                              <td align="center">
                                <a href="<?php echo site_url('siswa/view/'.$siswa_item['id_siswa']); ?>" class="menu2"> View </a> 
                                <a href="<?php echo site_url('siswa/edit/' .$siswa_item['id_siswa']); ?>" class="menu2"> Edit </a>
                                <a href="<?php echo site_url('siswa/delete/' .$siswa_item['id_siswa']); ?>" class="menu2" onClick="return confirm(' Are You Sure Want to delete?')"> Delete </a>
                              </td>
                            </tr>
                            <?php endforeach; ?>
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
