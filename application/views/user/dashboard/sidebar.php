<style>
    .icon-rotate{
        transition: all 0.2s linear;
    }
    .icon-rotate.rotate{
        transform: rotate(90deg);
    }
</style>

<!-- Card -->
<div class="card">
    <div class="card-body bg-light">
        <!-- My Account -->
        <div class="row mb-2">
            <div class="col text-left">
                AKUN SAYA
            </div>
            <div class="col text-right">
                <a href="#myAccount" role="button" aria-expanded="false" aria-controls="myAccount" data-toggle="collapse">
                    <i class="fa fa-chevron-down icon-rotate" style="color: black;" onclick="rotateIcon('myAccountIcon')" id="myAccountIcon"></i>
                </a>
            </div>
        </div>
        <div class="collapse show" id="myAccount">
            <div class="list-group" style="font-size: 12px;">
                <a href="<?php echo site_url('dashboard') ?>" class="list-group-item list-group-item-action">
                    <i class="bi bi-house-fill"></i> Beranda Saya
                </a>
            </div>
        </div>
        <hr>
        <!-- My Account End -->

        <!-- MY ADS -->
        <div class="row mb-2">
            <div class="col text-left">
                IKLAN SAYA
            </div>
            <div class="col text-right">
                <a href="#myAds" role="button" aria-expanded="false" aria-controls="myAds" data-toggle="collapse">
                    <i class="fa fa-chevron-down icon-rotate" style="color: black;" onclick="rotateIcon('myAdsIcon')" id="myAdsIcon"></i>
                </a>
            </div>
        </div>
        <div class="collapse show" id="myAds">
            <div class="list-group" style="font-size: 12px;">
                <a href="<?php echo site_url('iklansaya') ?>" class="list-group-item list-group-item-action d-flex justify-content-between">
                    <div>
                        <i class="bi bi-badge-ad"></i> Iklan Saya
                    </div>
                    <span class="badge badge-secondary">12</span>
                </a>
                <a href="<?php echo site_url('menunggu-persetujuan') ?>" class="list-group-item list-group-item-action d-flex justify-content-between">
                    <div>
                        <i class="bi bi-clock"></i> Menunggu Persetujuan 
                    </div>
                    <span class="badge badge-secondary">0</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between">
                    <div>
                        <i class="bi bi-cash"></i> Transaksi 
                    </div>
                    <span class="badge badge-secondary">0</span>
                </a>
            </div>
        </div>
        <hr>
        <!-- My Ads End -->

        <!-- Hit Project -->
        <div class="row mb-2">
            <div class="col-9 text-left">
                HIT PROJECT
            </div>
            <div class="col text-right">
                <a href="#hitProject" role="button" aria-expanded="false" aria-controls="hitProject" data-toggle="collapse">
                    <i class="fa fa-chevron-down icon-rotate" style="color: black;" onclick="rotateIcon('hitProjectIcon')" id="hitProjectIcon"></i>
                </a>
            </div>
        </div>
        <div class="collapse show" id="hitProject">
            <div class="list-group" style="font-size: 12px;">
                <a href="<?php echo site_url('hitproject') ?>" class="list-group-item list-group-item-action d-flex justify-content-between">
                    <div>
                        <i class="bi bi-hand-index-thumb"></i> Hit Project
                    </div>
                    <span class="badge badge-secondary">3</span>
                </a>
            </div>
        </div>
        <hr>
        <!-- Hit Project End -->

    </div> <!-- Card-Body -->
</div> <!-- Card -->
<!-- Card End -->

<!-- JS for Icon Rotate -->
<script>
    function rotateIcon(id){
        let icon = document.getElementById(id);
        if(!icon.classList.contains("rotate")){
            icon.classList.add("rotate");
        }else{
            icon.classList.remove("rotate");
        }
    }
</script>