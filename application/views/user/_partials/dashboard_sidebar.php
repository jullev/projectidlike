<!-- Card -->
<style>
    .icon-rotate{
        transition: all 0.2s linear;
    }
    .icon-rotate.rotate{
        transform: rotate(90deg);
    }
</style>
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
<div class="card">
    <div class="card-body bg-light">
        <!-- My Account -->
        <div class="row">
            <div class="col text-left">
                AKUN SAYA
            </div>
            <div class="col text-right">
                <a href="#myAccount" role="button" aria-expanded="false" aria-controls="myAccount" data-toggle="collapse">
                    <i class="fa fa-chevron-down icon-rotate" onclick="rotateIcon('myAccountIcon')" id="myAccountIcon"></i>
                </a>
            </div>
        </div>
        <div class="collapse show" id="myAccount">
            <div class="list-group" style="font-size: 12px;">
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="bi bi-house-fill"></i> Beranda Saya
                </a>
            </div>
        </div>
        <hr>
        <!-- MY ADS -->
        <div class="row">
            <div class="col text-left">
                IKLAN SAYA
            </div>
            <div class="col text-right">
                <a href="#myAds" role="button" aria-expanded="false" aria-controls="myAds" data-toggle="collapse">
                    <i class="fa fa-chevron-down icon-rotate" onclick="rotateIcon('myAdsIcon')" id="myAdsIcon"></i>
                </a>
            </div>
        </div>
        <div class="collapse show" id="myAds">
            <div class="list-group" style="font-size: 12px;">
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="bi bi-badge-ad"></i> Iklan Saya <div class="badge badge-secondary">0</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="bi bi-clock"></i> Menunggu Persetujuan <div class="badge badge-secondary">0</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <i class="bi bi-cash"></i> Transaksi <div class="badge badge-secondary">0</div>
                </a>
            </div>
        </div>
    </div>
</div>