<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Input Gallery</li>
        <!-- Breadcrumb Menu-->
    </ol>
    <div class="row p-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Input Gallery
                </div>
                 <?php echo form_open_multipart('adminpanel/inputgallery');?>
                 <?php for ($i=1; $i<=5 ; $i++) : ?>
                	<div class="card-body border border-success rounded m-3 p-4">
                    <div class="custom-file">
                        <label for="uploadGallery">Nama Kegiatan</label>
                        <input type="text" class="form-control mb-2" id="namakegiatan" name="nama_kegiatan" placeholder="Masukan nama kegiatan">
                        <input type="file" class="form-control" id="fotokegiatan" name="foto_kegiatan<?php echo $i;?>">
                    </div>
                	</div>
               <?php endfor; ?>
                   <div class="card-body">
                        <button type="submit" class="btn btn-primary"><i
                            class="fa fa-upload"></i>&nbsp; Upload</button>
                   </div>
                   <?php echo form_close(); ?>
            </div>
        </div><!--/.col-->
    </div>
</main>