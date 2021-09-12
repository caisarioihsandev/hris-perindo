<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo $data['judul']; ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"><?php echo $data['judul']; ?></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
	<div class="container-fluid">
    	<div class="row">
    		<div class="col-12">
	        	<!-- Horizontal Form -->
	        	<div class="card card-info">
		        	<div class="card-header">
		            	<h3 class="card-title"><?php echo $data['sub-judul']; ?></h3>
		          	</div>
		          	<!-- /.card-header -->
		          	<!-- form start -->
		          	<form action="<?= BASE_URL; ?>/staff/add_process" method="post" enctype="multipart/form-data" class="form-horizontal">
		          		<?php Flasher::flash(); ?>
		            	<div class="card-body">
		            		<!-- Nama Karyawan -->
			              	<div class="form-group row">
			                	<label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
				                <div class="col-sm-10">
			                	  	<input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Nama Lengkap">
	                			</div>
		              		</div>
		              		<!-- /.Nama Karyawan -->

		              		<!-- Jenis Kelamin -->
			              	<div class="form-group row">
			                	<label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			                	<div class="col-sm-10">
			                		<select class="form-control select2" name="jenis_kelamin" style="width: 100%;">
			                			<option value="laki-laki">Laki-laki</option>
			                			<option value="perempuan">Perempuan</option>
			                		</select>
			                	</div>
			              	</div>
			              	<!-- /.Jenis Kelamin -->

			              	<!-- Tempat Lahir -->
			              	<div class="form-group row">
			                	<label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Kota/Kabupaten Tempat Lahir">
			                	</div>
			              	</div>
			              	<!-- /.Tempat Lahir -->

			              	<!-- Tanggal Lahir -->
			                <div class="form-group row">
			                  <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir:</label>
			                 	<div class="input-group date col-sm-10" id="tanggal_lahir" data-target-input="nearest">
	                        <input type="text" class="form-control datetimepicker-input" data-target="#tanggal_lahir" name="tanggal_lahir" placeholder="Format: dd-mm-yyyy" />
	                        <div class="input-group-append" data-target="#tanggal_lahir" data-toggle="datetimepicker">
	                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
	                        </div>
		                    </div>
					            </div>
			                <!-- /.Tanggal Lahir -->

			              	<!-- Agama -->
			              	<div class="form-group row">
			                	<label for="agama" class="col-sm-2 col-form-label">Agama</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="agama" name="agama" placeholder="Agama">
			                	</div>
			              	</div>
			              	<!-- /.Agama -->

			              	<!-- Status -->
			              	<div class="form-group row">
			                	<label for="status" class="col-sm-2 col-form-label">Status</label>
			                	<div class="col-sm-10">
			                		<select class="form-control select2" name="status" style="width: 100%;">
			                			<option value="pkwtt">PKWTT (Tetap)</option>
			                			<option value="pkwt">PKWT (Kontrak)</option>
			                			<option value="pkh">PKH (Harian Lepas)</option>
			                			<option value="outsourcing">Alih Daya</option>
			                		</select>
			                	</div>
			              	</div>
			              	<!-- /.Status -->
		              		
		              		<!-- No. Induk Karyawan -->
			              	<div class="form-group row">
			                	<label for="no_induk_karyawan" class="col-sm-2 col-form-label">No. Induk Karyawan</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="no_induk_karyawan" name="no_induk_karyawan" placeholder="No. Induk Karyawan atau PKWT/PKH/Alih Daya">
			                	</div>
			              	</div>
			              	<!-- /.No. Induk Karyawan -->

			              	<!-- Peringkat Karyawan -->
			              	<div class="form-group row">
			                	<label for="peringkat" class="col-sm-2 col-form-label">Peringkat/Golongan</label>
			                	<div class="col-sm-10">
			                		<select class="form-control select2" name="peringkat" style="width: 100%;">
			                			<option value="None">None</option>
			                			<option value="I">Peringkat I</option>
			                			<option value="II">Peringkat II</option>
			                			<option value="III">Peringkat III</option>
			                			<option value="IV">Peringkat IV</option>
			                			<option value="V">Peringkat V</option>
			                			<option value="VI">Peringkat VI</option>
			                			<option value="VII">Peringkat VII</option>
			                			<option value="VIII">Peringkat VIII</option>
			                			<option value="IX">Peringkat IX</option>
			                			<option value="X">Peringkat X</option>
			                			<option value="XI">Peringkat XI</option>
			                			<option value="XII">Peringkat XII</option>
			                			<option value="XIII">Peringkat XIII</option>
			                			<option value="XIV">Peringkat XIV</option>
			                			<option value="XV">Peringkat XV</option>
			                		</select>
			                	</div>
			              	</div>
			              	<!-- /.Peringkat Karyawan -->

			              	<!-- SK Pengangkatan Karyawan Tetap -->
			              	<div class="form-group row">
			                	<label for="sk_pengangkatan" class="col-sm-2 col-form-label">SK Pengangkatan</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="sk_pengangkatan" name="sk_pengangkatan" placeholder="No. SK Pengangkatan">
			                	</div>
			              	</div>
			              	<!-- /.SK Pengangkatan Karyawan Tetap -->

			              	<!-- Jabatan -->
			              	<div class="form-group row">
			                	<label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
			                	</div>
			              	</div>
			              	<!-- /.Jabatan -->

			              	<!-- No KTP -->
			              	<div class="form-group row">
			                	<label for="no_ktp" class="col-sm-2 col-form-label">No. KTP</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No Induk Kependudukan">
			                	</div>
			              	</div>
			              	<!-- /.No KTP -->

			              	<!-- No NPWP -->
			              	<div class="form-group row">
			                	<label for="no_npwp" class="col-sm-2 col-form-label">No. NPWP</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="no_npwp" name="no_npwp" placeholder="No NPWP">
			                	</div>
			              	</div>
			              	<!-- /.No NPWP -->

			              	<!-- Alamat KTP -->
			              	<div class="form-group row">
			                	<label for="alamat_ktp" class="col-sm-2 col-form-label">Alamat KTP</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="provinsi_ktp" name="provinsi_ktp" placeholder="Provinsi">
			                  		<input type="text" class="form-control" id="kota_ktp" name="kota_ktp" placeholder="Kota/Kabupaten">
			                  		<input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" placeholder="Alamat">
			                	</div>
			              	</div>
			              	<!-- /.Alamat KTP -->

			              	<!-- Alamat Domisili -->
			              	<div class="form-group row">
			                	<label for="alamat_domisili" class="col-sm-2 col-form-label">Alamat Domisili</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="provinsi_domisili" name="provinsi_domisili" placeholder="Provinsi">
			                  		<input type="text" class="form-control" id="kota_domisili" name="kota_domisili" placeholder="Kota/Kabupaten">
			                  		<input type="text" class="form-control" id="alamat_domisili" name="alamat_domisili" placeholder="Alamat">
			                	</div>
			              	</div>
			              	<!-- /.Alamat Domisili -->

			              	<!-- Pendidikan Terakhir -->
			              	<div class="form-group row">
			                	<label for="pendidikan_terakhir" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" placeholder="SD, SMP, SMA, D3, S-1, ...">
			                	</div>
			              	</div>
			              	<!-- /.Pendidikan Terakhir -->

			              	<!-- No. Ijazah -->
			              	<div class="form-group row">
			                	<label for="no_ijazah" class="col-sm-2 col-form-label">No. Ijazah</label>
			                	<div class="col-sm-10">
			                  		<input type="text" class="form-control" id="no_ijazah" name="no_ijazah" placeholder="Nomor Ijazah">
			                	</div>
			              	</div>
			              	<!-- /.No. Ijazah -->

			              	<!-- Foto Karyawan -->
			              	<div class="form-group row">
			                	<label for="foto_karyawan" class="col-sm-2 col-form-label">Foto Karyawan</label>
			                	<div class="col-sm-10">
			                  		<input type="file" class="form-control" id="foto_karyawan" name="foto_karyawan">
			                	</div>
			              	</div>
			              	<!-- /.Foto Karyawan -->

		            	</div>
			            <!-- /.card-body -->
		            	<div class="card-footer">
			              	<button type="submit" class="btn btn-info float-right ml-4">Submit</button>
			              	<button type="reset" class="btn btn-default float-right">Cancel</button>
			            </div>
		            	<!-- /.card-footer -->
		          	</form>
		        </div>
		        <!-- /.card -->
		    </div>
		    <!-- /.col-12 -->
	    </div>
	    <!-- /.row -->
  	</div>
  	<!-- /.container-fluid -->
</section>
<!-- /.content