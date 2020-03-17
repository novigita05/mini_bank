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
                          <label><B>Data Lainnya</B></label>
                      </div>

                    	<div class="form-group">
                      		<label for="">No. Akta</label>
                      		<input class="form-control" id="" type="text" placeholder="No. Akta">
                    	</div>

                      <div class="form-group">
                        <label for="">Jenis Pendaftaran</label>
                          <select class="form-control" id="" name="">
                            <option value="">Jenis Pendaftaran</option>
                            <option value="Peserta Didik Baru">Peserta Didik Baru</option>
                            <option value="Peserta">Peserta</option>
                            <option value="Peserta">Peserta</option>
                            <option value="Peserta">Peserta</option>
                          </select>
                      </div>

                      <div class="row">
                      <div class="form-group col-sm-3">
                        <label for="">Tanggal Masuk</label>
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
                      		<label for="">Sekolah Asal</label>
                      		<input class="form-control" id="nik" type="text" placeholder="Sekolah Asal">
                    	</div>

                      <div class="form-group">
                          <label for="">No. Ijazah</label>
                          <input class="form-control" id="" type="text" placeholder="No. Ijazah">
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