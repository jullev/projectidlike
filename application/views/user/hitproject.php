<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("user/_partials/head.php"); ?>

<body>
    <!-- Navbar -->
    <?php $this->load->view("user/_partials/navbar") ?> 

    <div class="container mb-5" style="margin-top: 100px;">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-sm-12 col-md-12 col-lg-3 mb-3">
                <?php $this->load->view("user/dashboard/sidebar") ?>
            </div>

            <!-- Main Content -->
            <div class="col-sm-12 col-md-12 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="bi-hand-index-thumb-fill mr-1"></i> Hit Project</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group form-inline">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pickall">
                                            <label for="pickall" class="custom-control-label">Pilih Semua</label>
                                        </div>
                                    </div>
                                    <button class="ml-2 btn btn-light"><i class="bi-trash"></i>Hapus</button>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                            </div>
                        </div>
                        <div id="myadstb_wrapper">
                            <table class="table table-striped table-bordered mt-3" aria-describedby="myadstb_info" role="grid" id="myadstb">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Judul</th>
                                        <th width="30%">Publisher</th>
                                        <th width="20%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td><a href="#">Ini Judul 1</a></td>
                                        <td class="text-center">Anggito Suryo</td>
                                        <td class="text-center"><span class="btn list-group-item-success">Disetujui</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td><a href="#">Ini Judul 2</a></td>
                                        <td class="text-center">Nur Hidayatulloh</td>
                                        <td class="text-center"><span class="btn list-group-item-info">Menunggu</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td><a href="#">Ini Judul 3</a></td>
                                        <td class="text-center">Akhmad</td>
                                        <td class="text-center"><span class="btn list-group-item-danger">Ditolak</span></td>
                                    </tr>
                                </tbody>
                            </table>                        
                        </div>
                    </div> <!-- Card-Body Main End -->
                </div> <!-- Card Main End -->
            </div> <!-- Col Main End -->
        </div> <!-- Row End -->
    </div> <!-- Container End -->

    <!-- Footer -->
    <?php $this->load->view("user/_partials/footer") ?>
    <script>
		$(function() {
			$("#myadstb").DataTable({
				"responsive": true,
				"lengthChange": false,
				"autoWidth": false,
				//"buttons": [ "excel", "pdf", "print"]
			}).buttons().container().appendTo('#myadstb_wrapper .col-md-6:eq(0)');
		});
	</script>
</body>
</html>