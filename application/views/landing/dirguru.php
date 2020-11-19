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
    <section class="guru" id="section-dirguru">
        <div class="container borderbox mt-3">
            <div class="title justify-content-center">
                <div class="title mb-4 mt-4">
                    <h3 class="title-section mb-1">Guru MI Nurul Huda</h3>
                    <hr class="hr-section">
                </div>
            </div>
            <div class="foto">
                <?php foreach ($guru as $gurumapel) :?>
                <div class="imgguru">
                    <h4><?php echo $gurumapel['mapel_ampu']?></h4>
                    <img src="<?php echo base_url()?>assets/landing/img/<?php echo $gurumapel['foto_guru']?>" alt="">
                    <h6><?php echo $gurumapel['nama_guru']?></h6>
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