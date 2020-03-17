<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                  	<div class="card-header">
                    	<h3><?php echo $title; ?></h3>
                  	</div>
                    <?php echo validation_errors(); ?>

                    <?php echo form_open('kelas_kategori/edit/'.$kelas_kategori_item['id_kategori']); ?>
                  	<div class="card-body">

                      <div class="form-group">
                          <label for="id_jurusan">ID Jurusan</label>
                          <input class="form-control" name="id_jurusan" type="input" value="<?php echo $kelas_kategori_item['kategori_kelas'] ?>">
                      </div>

                      <div class="form-group">
                        <label for="kategori_kelas">Jurusan</label>
                          <select class="form-control" name="kategori_kelas">
                            <option value="<?php echo $kelas_kategori_item['kategori_kelas'] ?>"><?php echo $kelas_kategori_item['kategori_kelas'] ?></option>
                            <option value="RPL">RPL</option>
                            <option value="TKJ">TKJ</option>
                          </select>
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