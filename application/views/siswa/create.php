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
                      		<label for="nis">NIS</label>
                      		<input class="form-control" id="nis" type="text" placeholder="nis">
                    	</div>

                    	<div class="form-group">
                      		<label for="nik">NIK</label>
                      		<input class="form-control" id="nik" type="text" placeholder="nik">
                    	</div>

                      <div class="form-group">
                          <label for="nisn">NISN</label>
                          <input class="form-control" id="nisn" type="text" placeholder="NISN">
                      </div>

                      <div class="form-group">
                          <label for="nama">Nama Lengkap</label>
                          <input class="form-control" id="nama" type="text" placeholder="nama">
                      </div>

                      <div class="form-group">
                          <label for="email">Email</label>
                          <input class="form-control" id="email" type="text" placeholder="Email">
                      </div>

                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">Please select</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="agama">Agama</label>
                          <select class="form-control" id="agama" name="agama">
                            <option value="">Please select</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                          </select>
                      </div>

                      <div class="form-group">
                        <label for="">Kelas</label>
                          <select class="form-control" id="" name="">
                            <option value="">Please select</option>
                            <option value="X-RPL-1">X-RPL-1</option>
                            <option value="X-RPL-2">X-RPL-2</option>
                          </select>
                      </div>

                      <div class="row">
                      <div class="form-group col-sm-6">
                        <label for="">RT</label>
                        <input class="form-control" id="" type="text" placeholder="RT">
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="">RW</label>
                        <input class="form-control" id="" type="text" placeholder="RW">
                      </div>
                    </div>

                      <div class="form-group">
                          <label for="dusun">Dusun</label>
                          <input class="form-control" id="dusun" type="text" placeholder="Dusun">
                      </div>

                      <div class="form-group">
                          <label for="kelurahan">Kelurahan</label>
                          <input class="form-control" id="kelurahan" type="text" placeholder="Kelurahan">
                      </div>

                      <div class="form-group">
                          <label for="kecamatan">Kecamatan</label>
                          <input class="form-control" id="kecamatan" type="text" placeholder="Kecamatan">
                      </div>

                      <div class="form-group">
                          <label for="">Kode Pos</label>
                          <input class="form-control" id="" type="text" placeholder="Kode">
                      </div>

                      <div class="form-group">
                          <label for="">Jenis Tinggal</label>
                          <input class="form-control" id="" type="text" placeholder="Jenis Tinggal">
                      </div>

                      <div class="form-group">
                          <label for="">Tempat Lahir</label>
                          <input class="form-control" id="" type="text" placeholder="Tempat Lahir">
                      </div>

                      <div class="row">
                      <div class="form-group col-sm-3">
                        <label for="">Tanggal Lahir</label>
                        <select class="form-control" id="">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                          <option>31</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="">Bulan</label>
                        <select class="form-control" id="">
                          <option>Januari</option>
                          <option>Februari</option>
                          <option>Maret</option>
                          <option>April</option>
                          <option>Mei</option>
                          <option>Juni</option>
                          <option>Juli</option>
                          <option>Agustus</option>
                          <option>September</option>
                          <option>Oktober</option>
                          <option>November</option>
                          <option>Desember</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3">
                        <label for="">Tahun</label>
                        <select class="form-control" id="">
                          <option>1998</option>
                          <option>1999</option>
                          <option>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2003</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                          <option>2011</option>
                          <option>2012</option>
                          <option>2013</option>
                          <option>2014</option>
                          <option>2015</option>
                          <option>2016</option>
                          <option>2017</option>
                          <option>2018</option>
                          <option>2019</option>
                          <option>2020</option>
                        </select>
                      </div>
                    </div>

                      <div class="form-group">
                          <label for="">Nama Wali</label>
                          <input class="form-control" id="" type="text" placeholder="Nama Wali">
                      </div>

                      <div class="form-group">
                          <label for="">No. Telepon (Ortu)</label>
                          <input class="form-control" id="" type="text" placeholder="No. Telepon (Ortu)">
                      </div>

                      <div class="form-group">
                          <label for="">Alamat</label>
                          <input class="form-control" id="" type="text" placeholder="Alamat">
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