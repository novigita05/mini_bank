<div class="container">
	<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Data Pegawai</div>
                    <a href="<?php echo site_url('pegawai/create'); ?>" class="btn btn-primary">Tambah Data</a>
                  	<div class="card-body">
                    	<table class="table table-responsive-sm table-bordered table-striped table-sm">
                      		<thead>
                        		<tr>
                          			<th>No</th>
                          			<th>NIP</th>
                                <th>NUPTK</th>
                          			<th>Nama Lengkap</th>
                          			<th>Email</th>
                          			<th>Jenis Kelamin</th>
                          			<th>Status</th>
                          			<th>No. Telepon</th> 
                          			<th>Aksi</th>
                        		</tr>
                      		</thead>
                      		<tbody>
                        		<?php foreach ($pegawai as $pegawai_item): ?>
                            <tr>
                              <td align="center"><?php echo $pegawai_item['id_pegawai']; ?></td>
                              <td align="center"><?php echo $pegawai_item['nip']; ?></td>
                              <td align="center"><?php echo $pegawai_item['nuptk']; ?></td>
                              <td align="center"><?php echo $pegawai_item['nama']; ?></td>
                              <td align="center"><?php echo $pegawai_item['email']; ?></td>
                              <td align="center"><?php echo $pegawai_item['jenis_kelamin']; ?></td>
                              <td align="center"><?php echo $pegawai_item['status']; ?></td>
                              <td align="center"><?php echo $pegawai_item['no_telp']; ?></td>
                              <td align="center">
                                <a href="<?php echo site_url('pegawai/view/'.$pegawai_item['id_pegawai']); ?>" class="menu2"> View </a> 
                                <a href="<?php echo site_url('pegawai/edit/' .$pegawai_item['id_pegawai']); ?>" class="menu2"> Edit </a>
                                <a href="<?php echo site_url('pegawai/delete/' .$pegawai_item['id_pegawai']); ?>" class="menu2" onClick="return confirm(' Are You Sure Want to delete?')"> Delete </a>
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
