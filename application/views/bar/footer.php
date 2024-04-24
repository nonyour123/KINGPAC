
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>KINGPAC</span>
          </a>
          <p>As the largest plastic bag manufacturer in the Asian continent, King Pac Industrial Co.,Ltd is a full-fledged plastic bag supplier located nearby Laem Chabang Port in Thailand.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-line"></i></a>
            <a href="https://www.facebook.com/KingpacCareer/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="<?php echo base_url('Dashboard/dashboard'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('About/about');?>">About</a></li>
            <li><a href="<?php echo base_url('News/news'); ?>">News</a></li>
            <li><a href="<?php echo base_url('Event/event'); ?>">Event</a></li>
            <li><a href="<?php echo base_url('contact/contact'); ?>">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Organization chart</h4>
          <ul>
            <li><a href="<?php echo base_url('Organization/organization'); ?>">Executive management</a></li>
            <li><a href="<?php echo base_url('commercial/commercial'); ?>">Domestic sales</a></li>
            <li><a href="<?php echo base_url('Sale/sale4'); ?>">Sale and marketing</a></li>
            <li><a href="<?php echo base_url('Operation/operation13'); ?>">Operation</a></li>
            <li><a href="<?php echo base_url('Financial/Financial19'); ?>">FINANCE AND INVESTMENT</a></li>
            <li><a href="<?php echo base_url('hr/hr1'); ?>">HUMAN RESOURCE</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            333 Moo 4 <br>
            Nongmaidaeng<br>
            Muangchonburi Chonburi 20000 <br><br>
            <strong>Phone:</strong> 038 458 500<br>
            <strong>Email:</strong> sales@king-pac.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; 2024 <strong><span>KINGPAC</span></strong>. Industrial Co.,Ltd.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Sripatum Chonburi</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <!-- ============================================================== -->
  <!-- Create function baseUrl  -->
  <!-- ============================================================== -->

  <script>
        let baseUrl = '{base_url}';

        function base_url(url) {
          if (url == '') {
            return baseUrl;
          } else {
            return baseUrl + url;
          }
        }
  </script>

</body>

</html>