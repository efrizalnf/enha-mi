<main class="main">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/landing/css/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/landing/css/gallery-grid.css">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">ENHAS Image Gallery</li>
        <!-- Breadcrumb Menu-->
    </ol>
    <div class="row p-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i>Input Gallery
                </div>
                <div class="card-body">

                    <section class="gallery" id="section-gallery">
                        <div class="container gallery-container">
                            <div class="row justify-content-center">
                                <div class="title ">
                                    <h3 class="title-section">Preview Gallery</h3>
                                    <hr class="hr-section">
                                </div>
                            </div>
                            <div class="tz-gallery">
                                <div class="row">
                                    <div class="row">
                                        <?php foreach ($gallery as $item) :?>
                                        <div class="col-sm-6 col-md-4 rounded ">
                                            <h4 class="title-gallery align-middle text-center mb-3">
                                                <?= $item['nama_kegiatan']?></h4>
                                            <a class="lightbox"
                                                href="<?php echo base_url() . 'assets/landing/img/gallery/'.$item['foto_kegiatan'];?>">
                                                <img src="<?php echo base_url() . 'assets/landing/img/gallery/'.$item['foto_kegiatan'];?>"
                                                    alt="enha-img-1">
                                            </a>
                                            
                                            <button href="<?php base_url()?>deletegallery/<?php echo $item['id_gallery'];?>" class="btn btn-danger btn-hapus w-100 mb-5"><i
                                                    class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary w-100 mb-4" data-toggle="modal"
                                data-target="#upload-modal"><i class="fa fa-upload"></i>&nbsp; Upload
                                Foto</button>
                    </section>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>

    <!-- Modal upload -->
    <div class="modal fade" id="upload-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('adminpanel/inputgallery');?>
                    <?php for($i=1 ; $i<=5; $i++): ?>
                        <div class="isi border border-success rounded p-3 mt-3">
                        <label for="uploadFoto">Upload Foto Kegiatan <?php echo "#" . $i?></label>
                        <input type="text" class="form-control m-1" id="namakegiatan" name="namakegiatan[]" placeholder="Inputkan nama kegiatan disini">
                        <input type="file" class="form-control m-1" id="fotokegiatan" name="fotokegiatan[]">
                    </div>
                    <?php endfor; ?>
                    <div class="modal-footer w-100 mt-4">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="btn-uploadgallery" value="upload" name="upload">Upload</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
