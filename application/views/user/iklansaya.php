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
                        <h3><i class="bi-badge-ad-fill mr-1"></i> Iklan Saya</h3>
                    </div>
                    <div class="card-body">
                        <div id="myadstb_wrapper">
                            <table class="table table-striped table-bordered mt-3" aria-describedby="myadstb_info" role="grid" id="myadstb">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Judul</th>
                                        <th width="17%">Hitter</th>
                                        <th width="13%">Tanggal Submit</th>
                                        <th width="20%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td><a href="#">Kacang Godok</a></td>
                                        <td class="text-center">Anggito Suryo</td>
                                        <td class="text-center">03 Mei 2021</td>
                                        <td class="text-center"><span class="btn list-group-item-success">Disetujui</span></td>
                                        <td class="text-center">
                                            <button onclick="window.location='<?php echo site_url('editiklan');?>'" class="btn btn-primary" data-tooltip="tooltip" data-placement="bottom" title="Edit Iklan">
                                                <i class="bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#delete" data-tooltip="tooltip" data-placement="bottom" title="Hapus Iklan">
                                                <i class="bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td><a href="#">Tape Khas Bondowoso</a></td>
                                        <td class="text-center"><span class="btn list-group-item-info">Menunggu</span></td>
                                        <td class="text-center">17 Mei 2021</td>
                                        <td class="text-center"><span class="btn list-group-item-success">Disetujui</span></td>
                                        <td class="text-center">
                                            <button onclick="window.location='<?php echo site_url('editiklan');?>'" class="btn btn-primary" data-tooltip="tooltip" data-placement="bottom" title="Edit Iklan">
                                                <i class="bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#delete" data-tooltip="tooltip" data-placement="bottom" title="Hapus Iklan">
                                                <i class="bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Nasi Goreng</td>
                                        <td></td>
                                        <td class="text-center">10 Mei 2021</td>
                                        <td class="text-center"><span class="btn list-group-item-danger">Ditolak</span></td>
                                        <td class="text-center">
                                            <button onclick="window.location='<?php echo site_url('editiklan');?>'" class="btn btn-primary" data-tooltip="tooltip" data-placement="bottom" title="Edit Iklan">
                                                <i class="bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#delete" data-tooltip="tooltip" data-placement="bottom" title="Hapus Iklan">
                                                <i class="bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                        
                        </div>
                    </div> <!-- Card-Body Main End -->
                </div> <!-- Card Main End -->
            </div> <!-- Col Main End -->
        </div> <!-- Row End -->
    </div> <!-- Container End -->

    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel">Hapus Iklan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus iklan ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Iya</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
    </div>
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