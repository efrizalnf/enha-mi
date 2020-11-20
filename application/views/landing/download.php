<body onload="hideloader();">
    <div class="loading overlay">
        <div class="ldio-ohmxfizoh9a">
            <div></div>
            <div></div>
            <div>
                <div></div>
            </div>
            <div>
                <div></div>
            </div>
        </div>
    </div>
    <section class="download" id="section-dl">
        <div class="container borderbox mt-3">
            <div class="title justify-content-center">
                <div class="title mb-4 mt-4">
                    <h3 class="title-section mb-1">Unduhan File</h3>
                    <hr class="hr-section">
                </div>
            </div>
            <div class="dl">
                <?php foreach ($download as $dl) :?>
                <div class="dlfiles fas fa-file-pdf-o fa-2x">
                    <a src="<?php echo base_url()?>assets/landing/files/<?php echo $dl['lokasi_file']?>" alt="filepdf" download>
                    <h4><?php echo $dl['nama_file']?></h4>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br><br>
    </section>
</body>