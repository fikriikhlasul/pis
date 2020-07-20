                  <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2020</span> Copyright Predatech Information System, Template by 
                <a
                  class="text-primary"
                  href="#"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="<?= base_url('sleek/')?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/toaster/toastr.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/charts/Chart.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/ladda/spin.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/ladda/ladda.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/daterangepicker/moment.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url('sleek/')?>assets/plugins/jekyll-search.min.js"></script>
<script src="<?= base_url('sleek/')?>assets/js/sleek.js"></script>
<script src="<?= base_url('sleek/')?>assets/js/chart.js"></script>
<script src="<?= base_url('sleek/')?>assets/js/date-range.js"></script>
<script src="<?= base_url('sleek/')?>assets/js/map.js"></script>
<script src="<?= base_url('sleek/')?>assets/js/custom.js"></script>
<script src="<?= base_url();?>assets/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url();?>assets/sweetalert/dist/myscript.js"></script>
<script>
  function sampul(){
    const img = document.querySelector('#image');
    const labelz = document.querySelector('.custom-file-label');
    labelz.textContent = img.files[0].name;

  }
</script>

<?php
	if (isset($_SESSION['message']))
	{
		echo '<script>';
		echo $_SESSION['message'];
		echo '</script>';
		unset($_SESSION['message']);
	}
	?>



  </body>
</html>
