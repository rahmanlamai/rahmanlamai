<div class="container">
	<div class="row  mt-3">
		<div class="col-md-6">
			
		<div class="card">
		  <div class="card-header">
		    Form Tambah Data Mahasiswa
		  </div>
		  <div class="card-body">

			<form action="" method="post">				
			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" name="nama" class="form-control" id="nama">
			    <!-- form validasi dengan form_error('name') -->
			    <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
			  </div>			

			  <div class="form-group">
			    <label for="nim">Nim</label>
			    <input type="text" name="nim" class="form-control" id="nim">
			    <small id="emailHelp" class="form-text text-danger"><?= form_error('nim'); ?></small>
			  </div>			

			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" name="email" class="form-control" id="email">
			    <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
			  </div>			

			  <div class="form-group">						  	
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik Informatika">Teknik Informatika</option>
			      <option value="Sistem Infotmasi">Sistem Infotmasi</option>
			      <option value="Teknik Elektro">Tenik Elektro</option>
			    </select>
			  </div>
			  <button type="subtmi" name="tambah" class="btn btn-primary float-right">Tambah</button>
			</form>

		  </div>
		</div>

		</div>
	</div>
</div>