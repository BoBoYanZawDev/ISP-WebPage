<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mm-link</title>
  <link rel="icon" type="image/x-icon" href="./assets/logo/mm-linkIcon.png" sizes="16x16" />
  <!-- CDN Links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <!-- for Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- CDN Links End -->
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/ScrollTopButton.css">
</head>

<body>
  <?php include './components/header.html'; ?>
  <section class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
      <div class="carousel-inner ratio ratio-21x9">
        <div class="carousel-item active">
          <img src="./assets/mm-link Vinyl For stage Car op1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/mm-link Vinyl For stage Car op1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./assets/mm-link Vinyl For stage Car op1.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section class="card-group bg-light py-5 px-4 main-pkg">
    <div class="container">
      <h2 class="section__Header text-center mb-4">CHOOSE <span class="text-gradient">YOUR PACKAGE</span></h2>
      <div class="row">
        <div class="col-12 col-lg-3 col-md-6 d-flex justify-content-center align-items-center p-3 card-container">
          <div class="card card-Hover w-100 shadow-md" >
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h5 class="card-title mb-3 text-center">WIFI INTERNET</h5>
              <span class="Header-Outline mb-3 "></span>
              <ul class="card-text fs-5">
                <li class="mb-2">Unlimited Data</li>
                <li class="mb-2">High Speed Internet</li>
                <li class="mb-2">24x7 Service Available</li>
              </ul>
              <a href="./wifi.php" class="text-center btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <?php include './components/footer.php'; ?>
  <button id="scrollTop" onclick="scrolltoTop()">
    <i class="fa-solid fa-angles-up"></i>
  </button>
  <!-- Bootstrapjs Link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="./js/ScrollTopComponent.js"></script>
</body>

</html>