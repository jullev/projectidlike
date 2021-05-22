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
                        <div id="myadstb_wrapper">
                            <table class="table table-striped table-bordered mt-3" aria-describedby="myadstb_info" role="grid" id="myadstb">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Judul</th>
                                        <th width="20%">Publisher</th>
                                        <th width="10%">Deadline</th>
                                        <th width="20%">Status</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
//												var_dump(@$dataIklan);
								$count=0;
								foreach (@$dataIklan as $value) {
									$count++;
								?>
                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><a href="#"><?php echo $value->judul_kerjaan ?></a></td>
                                        <td class="text-center">Anggito Suryo</td>
                                        <td class="text-center"><?php echo $value->deadline ?></td>
										<?php
                                        if($value->status=="hit baru"){ ?>
											<td class="text-center"><span class="btn list-group-item-info" style="pointer-events: none;">Menunggu</span></td>
										<?php } else{ ?>
											<td class="text-center"><span class="btn list-group-item-success" style="pointer-events: none;">Disetujui</span></td>
										<?php }
                                        ?>
                                        <td class="text-center">
											<div class="d-flex">
												<button class="btn btn-success mr-1" data-tooltip="tooltip" data-placement="bottom" title="Lapor Selesai" onclick="window.location='<?php echo site_url("laporkerjaan/$value->idkerjaan");?>'">
													<i class="bi-check"></i>
												</button>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#cancel" data-tooltip="tooltip" data-placement="bottom" title="Batalkan">
                                                    <i class="bi-x"></i>
                                                </button>
											</div>
                                        </td>
                                    </tr>
								<?php } ?>

                                </tbody>
                            </table>                        
                        </div>
                    </div> <!-- Card-Body Main End -->
                </div> <!-- Card Main End -->
            </div> <!-- Col Main End -->
        </div> <!-- Row End -->
    </div> <!-- Container End -->

    <!-- Modal -->
    <div class="modal fade" id="cancel" tabindex="-1" aria-labelledby="cancelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cancelLabel">Batalkan Hit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda yakin ingin membatalkan hit project ini?
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
