<div class="container">
	<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Data Siswa</div>
                    <a href="<?php echo site_url('kelas/create'); ?>" class="btn btn-primary">Tambah Data</a>
                  	<div class="card-body">
                    	<table class="table table-responsive-sm table-bordered table-striped table-sm">
                      		<thead>
                        		<tr>
                          			<th>No</th>
                          			<th>Kelas</th>
                          			<th>Wali Kelas</th>
                          			<th>Jumlah Siswa</th>
                          			<th>SPP</th>
                          			<th>Aksi</th>
                        		</tr>
                      		</thead>
                      		<tbody>
                        		<?php foreach ($kelas as $kelas_item); ?>
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
