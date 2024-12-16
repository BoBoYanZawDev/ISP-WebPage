<link rel="stylesheet" href="../css/footer.css" />
<footer class="mt-5">
  <div
    class="container-fluid footerContent text-white p-4 pt-sm-5 justify-content-center d-flex">
    <!-- for BG animation -->
    <div class="bgAnimation" id="bgAnimation">
      <div class="backgroundAmim">
      </div>
      <?php for ($i = 0; $i < 200; $i++) {
        echo "<div class=colorBox></div>";
      } ?>
    </div>

    <div class="row pageMargin container">
      <!-- first Coloum -->
      <div class="contentColoum logoContainer col-lg-5 col-sm-12 py-5 py-md-2">
        <div class="logo">
          <img src="../assets/logo/mmlink logo final (white).png" alt="mm-link" />
        </div>
      </div>

      <!-- Second Coloum -->
      <div class="contentColoum col-lg-4 col-sm-12">
        <h6>Contact</h6>
        <hr class="headerOutline" />
        <ul>
          <li class="content">
            <img
              src="../assets/logo/icon/Phone Call Center.png"
              class="icon" />
            <a href="tel:09789799799">09 789 799 799</a>
          </li>
          <li class="content">
            <img
              src="../assets/logo/icon/location-pin.png"
              class="icon" />
            <a href="./index.html">No.14/995, 3th Street,<br>Paung Laung Quarter, Pyinmana.</a>
          </li>

          <li class="content">
            <img
              src="../assets/logo/icon/email.png"
              class="icon" />
            <a href="mailto:info@mm-link.net">info@mm-link.net</a>
          </li>
        </ul>


        <!-- Button Collection -->
        <div class="BtnCollection d-flex align-items-center text-center">
          <!-- <h6 class="me-2 mb-0">Social Network  -  </h6> -->
          <button><a href="#">
              <img src="../assets/logo/icon/facebook.png">
            </a></button>
          <button><a href="https://t.me/LinnITSolution">
              <img src="../assets/logo/icon/telegram.png">
            </a></button>
          <button><a href="https://bit.ly/LinnITSolutionViberCommunity">
              <img src="../assets/logo/icon/viber.png">
            </a></button>
          <button><a href="https://www.tiktok.com/@linnitmart">
              <img src="../assets/logo/icon/tik-tok (1).png">
            </a></button>
        </div>
      </div>

      <!-- Third Coloum -->
      <div class="contentColoum col-lg-3 col-6">
        <h6>Usefull Links</h6>
        <hr class="headerOutline" />
        <ul>
          <li><a href="../wifi.php">Wi-Fi</a></li>
          <li><a href="../prepaidCard.php">Prepaid Card</a></li>
          <li><a href="../news.php">News</a></li>
          <li><a href="../howto.php">Guide</a></li>
        </ul>
      </div>

      <!-- coloum End -->
    </div>
  </div>
  <div class="container-fluid Copyright">
    <div class="d-flex justify-content-center container py-2">
      <a href="/" class="fs-6">
        &copy; Copyright 2020 IT Spectrum co.,Ltd | All Rights Reserved.
      </a>
    </div>
  </div>
</footer>