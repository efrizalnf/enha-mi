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
    <section class="info" id="section-info">
        <div class="container borderbox mt-3">
            <div class="title justify-content-center">
                <div class="title mb-4 mt-4">
                    <h3 class="title-section mb-1">Informasi Terkini</h3>
                    <hr class="hr-section">
                </div>
            </div>
            <?php foreach ($informasi as $info) :?>
            <div class="container-info mb-3">
               <div class="info">
                   <h5><?php echo $info['judul_info']?></h5>
                    <h7><?php echo $info['isi_info']?></h7> 
                    <p>Diposting pada : <?php echo $info['tgl_info']?></p>
               </div>
            </div>
            <?php endforeach; ?>
        </div>
        <br>
        <br>
        <br>
        <br><br>
    </section>
</body>