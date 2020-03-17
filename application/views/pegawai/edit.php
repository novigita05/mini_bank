<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                  	<div class="card-header">
                    	<h3><?php echo $title; ?></h3>
                  	</div>

                    <?php echo validation_errors(); ?>

                    <?php echo form_open('pegawai/edit/'.$pegawai_item['id_pegawai']); ?>

                  	<div class="card-body">

                    	<div class="form-group">
                      		<label for="nip">NIP</label>
                      		<input class="form-control" id="nip" type="input" value="<?php echo $pegawai_item['nip'] ?>">
                    	</div>

                    	<div class="form-group">
                      		<label for="nuptk">NUPTK</label>
                      		<input class="form-control" id="nuptk" type="input" value="<?php echo $pegawai_item['nuptk'] ?>">
                    	</div>

                      <div class="form-group">
                          <label for="nama">Nama Lengkap</label>
                          <input class="form-control" id="nama" type="input" value="<?php echo $pegawai_item['nama'] ?>">
                      </div>

                      <div class="form-group">
                          <label for="email">Email Pegawai</label>
                          <input class="form-control" id="email" type="input" value="<?php echo $pegawai_item['email'] ?>">
                      </div>

                      <div class="form-group">
                        <label for="status">Status Pegawai</label>
                          <select class="form-control" id="status" name="status">
                            <option value="<?php echo $pegawai_item['status'] ?>"><?php echo $pegawai_item['status'] ?></option>
                            <option value="GTY">GTY</option>
                            <option value="PTY">PTY</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="<?php echo $pegawai_item['jenis_kelamin'] ?>"><?php echo $pegawai_item['jenis_kelamin'] ?></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label for="no_telp">No. Telepon</label>
                          <input class="form-control" id="no_telp" type="input" value="<?php echo $pegawai_item['no_telp'] ?>">
                      </div>

                      <div class="card-footer">
                          <button class="btn btn-sm btn-success" name="submit" type="submit">
                            <i class="fa fa-dot-circle-o"></i> Simpan</button>
                          <button class="btn btn-sm btn-danger" type="reset">
                            <i class="fa fa-ban"></i> Batal</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>