<div class="container">
	<div class="row  mt-3">
		<div class="col-md-6">
			
		<div class="card">
		  <div class="card-header">
		    Form Ubah Data Mahasiswa
		  </div>
		  <div class="card-body">

			<form action="" method="post">	

				<input type="hidden" name="id" id="id" value="<?= $mahasiswa['id']; ?>">

			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
			    <!-- form validasi dengan form_error('name') -->
			    <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
			  </div>			

			  <div class="form-group">
			    <label for="nim">Nim</label>
			    <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa['nim']; ?>">
			    <small id="emailHelp" class="form-text text-danger"><?= form_error('nim'); ?></small>
			  </div>			

			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
			    <small id="emailHelp" class="form-text text-danger"><?= form_error('email'); ?></small>
			  </div>			

			  <div class="form-group">						  	
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			    	<?php foreach ($jurusan as $jrs):?>
			    		<?php if ($jrs == $mahasiswa['jurusan']): ?>			    			
			    			<option value="<?= $jrs; ?>" selected="<?= $jrs; ?>"><?= $jrs; ?></option>
			    		<?php else : ?>
			    			<option value="<?= $jrs; ?>"><?= $jrs; ?></option>
			    		<?php endif; ?>
			    	<?php endforeach ?>
			    </select>
			  </div>
			  <button type="subtmi" name="tambah" class="btn btn-primary float-right">Ubah</button>
			</form>

		  </div>
		</div>

		</div>
	</div>
</div>