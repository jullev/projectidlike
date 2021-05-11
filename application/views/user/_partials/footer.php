<footer class="bg-light footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-left my-auto h-100">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><span>⋅</span></li>
          <li class="list-inline-item"><a href="#">Contact</a></li>
          <li class="list-inline-item"><span>⋅</span></li>
          <li class="list-inline-item"><a href="#">Terms of &nbsp;Use</a></li>
          <li class="list-inline-item"><span>⋅</span></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="text-muted small mb-4 mb-lg-0">© Brand 2021. All Rights Reserved.</p>
      </div>
      <div class="col-lg-6 text-center text-lg-right my-auto h-100">
        <ul class="list-inline mb-0">
          <li class="list-inline-item"><a href="#"><i class="bi-facebook" style="color: primary;font-size:2rem"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="bi-twitter" style="color: primary;font-size:2rem"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="bi-instagram" style="color: primary;font-size:2rem"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script src="<?php //echo base_url('assets/assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- bootsrap select search js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<script>
  // Input Only Number
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);

    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
  // Input Only Number End
  
  //Data Tooltip
  $(document).ready(function() {
      $('body').tooltip({
          selector: "[data-tooltip=tooltip]",
          container: "body"
      });
  });
  //Data Tooltip End
</script>