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
          <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo base_url('assets/assets/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script>
    // Input Only Number
    function isInputNumber(evt) {
      var ch = String.fromCharCode(evt.which);

      if (!(/[0-9]/.test(ch))) {
        evt.preventDefault();
      }
    }
    // Input Only Number End
</script>