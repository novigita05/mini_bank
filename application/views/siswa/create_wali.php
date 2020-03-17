<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                  	<div class="card-header">
                    	<strong>Tambah Data Siswa</strong>
                  	</div>
                    <div class="col-sm-4">
                    <a href="<?php echo site_url('siswa/create'); ?>" class="btn btn-primary">Data Diri</a>
                    <a href="<?php echo site_url('siswa/create_orangtua'); ?>" class="btn btn-primary">Orang Tua</a>
                    <a href="<?php echo site_url('siswa/create_wali'); ?>" class="btn btn-primary">Wali</a>
                    <a href="<?php echo site_url('siswa/create_lainnya'); ?>" class="btn btn-primary">Lainnya</a>
                    </div>

                  	<div class="card-body">

                      <div class="form-group">
                          <label><B>Data Diri Wali</B></label>
                      </div>

                    	<div class="form-group">
                      		<label for="">Nama Ayah</label>
                      		<input class="form-control" id="" type="text" placeholder="Nama Ayah">
                    	</div>

                    	<div class="form-group">
                      		<label for="nik">NIK</label>
                      		<input class="form-control" id="nik" type="text" placeholder="nik">
                    	</div>

                      <div class="form-group">
                          <label for="">Tahun Lahir</label>
                          <input class="form-control" id="" type="text" placeholder="Tahun Lahir">
                      </div>

                      <div class="form-group">
                        <label for="">Jenjang Pendidikan</label>
                          <select class="form-control" id="" name="">
                            <option value="">Jenjang Pendidikan</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value=""></option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="">Pekerjaan</label>
                          <select class="form-control" id="" name="">
                            <option value="">Pekerjaan</option>
                            <option value="Pekerjaan 1">Pekerjaan 1</option>
                            <option value="Pekerjaan 2">Pekerjaan 2</option>
                            <option value="Pekerjaan 3">Pekerjaan 3</option>
                            <option value="Pekerjaan 4">Pekerjaan 4</option>
                            <option value="Pekerjaan 5">Pekerjaan 5</option>
                            <option value="Pekerjaan 6">Pekerjaan 6</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="">Penghasilan</label>
                          <select class="form-control" id="" name="">
                            <option value="">Penghasilan</option>
                            <option value="Penghasilan 1">Penghasilan 1</option>
                            <option value="Penghasilan 2">Penghasilan 2</option>
                          </select>
                      </div>

                      <div class="card-footer">
                          <button class="btn btn-sm btn-success" type="submit">
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