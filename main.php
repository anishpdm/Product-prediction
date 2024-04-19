<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Productly </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.php">
          <img src="assets/img/logo.svg" height="31" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" aria-current="page" href="#feature">Home</a></li>
             
            </ul>
            <div class="d-flex ms-lg-4">
              <a class="btn btn-warning ms-3" href="index.php">Log Out</a>
            </div>
          </div>
        </div>
      </nav>
      <section class="pt-7">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-md-start text-center py-6">
              <h1 class="mb-4 fs-9 fw-bold">The Design Thinking Superpowers of ML</h1>
              <p class="mb-6 lead text-secondary">Harnessing the power of machine learning to forecast product demand.
                <br class="d-none d-xl-block" />Let data science guide your inventory management: predicting product needs with ML.<br class="d-none d-xl-block" /></p>
                <form method="post" action="">

                <div class="text-center text-md-start">
                <label for="" class="form-label">Select a Product</label>

                <select name="product_id" class="form-control">
                  <option value="4">Maggi</option>

                  <option value="2"> KitKat</option>
                  <option value="5">Diary Milk </option>
                  <option value="9">Oreo Biscuit</option>
                </select>
                <br>
                <label for="" class="form-label">Select a Date</label>

<input type="date" name="date" class="form-control">
                <br>

                <button class="btn btn-warning me-3 btn-lg" type="submit" name="predictBtn">Forecast product demand</button>

                <!-- <a class="btn btn-warning me-3 btn-lg" href="#!" role="button"> Forecast product demand</a> -->
               
                </div>

              </form>

            </div>
            <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="assets/img/hero/hero-img.png" alt="" /></div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pt-md-9 mb-6" id="feature">

        <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block" style="background-image:url(assets/img/category/shape.png);opacity:.5;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <h1 class="fs-9 fw-bold mb-4 text-center"> We design tools to unveil <br class="d-none d-xl-block" />your superpowers</h1>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon1.png" width="75" alt="Feature" />
              <h4 class="mb-3">Machine Learning for Demand Forecasting</h4>
              <p class="mb-0 fw-medium text-secondary">Machine learning models allows for dynamic adjustments to changing market conditions.</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon2.png" width="75" alt="Feature" />
              <h4 class="mb-3">Custom Model Development</h4>
              <p class="mb-0 fw-medium text-secondary">Customization enhances the accuracy and reliability of the forecasting system.</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon3.png" width="75" alt="Feature" />
              <h4 class="mb-3">Data Security</h4>
              <p class="mb-0 fw-medium text-secondary">Implement robust security measures to protect sensitive inventory data stored in the cloud.</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon4.png" width="75" alt="Feature" />
              <h4 class="mb-3">Continuous Improvement</h4>
              <p class="mb-0 fw-medium text-secondary">Continuous monitoring  ensure that the inventory management system remains effective and delivers ongoing value.</p>
            </div>
          </div>
          <div class="text-center"><a class="btn btn-warning" href="#!" role="button">SIGN UP NOW</a></div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="validation">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h5 class="text-secondary">Effortless Validation for</h5>
              <h2 class="mb-2 fs-7 fw-bold">Design Professionals</h2>
              <p class="mb-4 fw-medium text-secondary">
              Analyzing historical sales data, seasonality, <br/> market trends the system will predict future inventory requirements.
              </p>
              <h4 class="fs-1 fw-bold">Cost Savings</h4>
              <p class="mb-4 fw-medium text-secondary">Avoiding stockouts reduces missed sales opportunities, while minimizing overstock situations prevents excess inventory costs, </p>
              <h4 class="fs-1 fw-bold">Alterationists</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you money,</p>
              <h4 class="fs-1 fw-bold">Custom Design designers</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you more money.</p>
            </div>
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/validation/validation.png" alt="" /></div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="manager">

        <div class="container">
          <div class="row">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/manager/manager.png" alt="" /></div>
            <div class="col-lg-6">
              <h5 class="text-secondary">Easier decision making for</h5>
              <p class="fs-7 fw-bold mb-2">Product Managers</p>
              <p class="mb-4 fw-medium text-secondary">
              The system can generate accurate demand forecasts, helping businesses make informed decisions about their inventory.
              </p>
              <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">Never worry about overpaying for your<br />energy again.</p>
              </div>
              <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">We will only switch you to energy <br />that we trust and will treat you right</p>
              </div>
              <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary"> We track the markets daily and know where the<br />inventory requirements are.</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="marketer">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h5 class="text-secondary">Optimisation for</h5>
              <p class="mb-2 fs-8 fw-bold">Marketers</p>
              <p class="mb-4 fw-medium text-secondary">A  marketer can develop and implement an effective inventory management system tailored to the specific needs of managing marketing assets and materials.                .</p>
               <h4 class="fw-bold fs-1">Accessory makers</h4>
              <p class="mb-4 fw-medium text-secondary">If a specific tool or software for creating assembly diagrams or processes.</p>
              <h4 class="fw-bold fs-1">Alterationists</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you money,</p>
              <h4 class="fw-bold fs-1">Custom Design designers</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you more money,</p>
            </div>
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/marketer/marketer.png" alt="" /></div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
     
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
    
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
     
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <iframe class="rounded" style="width:100%;height:500px;" src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
  </body>

</html>

<?php
  if (isset($_POST['predictBtn1'])) {
    echo "tets";
    $url = 'http://127.0.0.1:5001/test';
    $response = file_get_contents($url);

    // Check if the request was successful
    if ($response === FALSE) {
        // Handle error
        echo "Error occurred while fetching data from Flask endpoint";
    } else {
        // Display the response from the Flask endpoint
        echo "Response from Flask endpoint: " . $response;
    }


  }
    // Check if the form is submitted


    if (isset($_POST['predictBtn'])) {
      // Get input values
   // Get input values
$date = $_POST['date']; // Assuming the input date is in the format "YYYY-MM-DD"
$product_id = $_POST['product_id'];

// Display input values
echo "Input Date: " . $date . "<br>";
echo "Product ID: " . $product_id . "<br>";

// Convert date format from YYYY-MM-DD to MM/DD/YYYY
$converted_date = date("m/d/Y", strtotime($date));

// Display converted date
echo "Converted Date: " . $converted_date . "<br>";

      // Make sure required data is set
      if (!empty($converted_date) && !empty($product_id)) {
          // Make API call
          $url = "http://51.21.25.53:5001/predict?date=$converted_date&product_id=$product_id";
          // $data = array('date' => $converted_date, 'product_id' => $product_id);
  
       echo $response=file_get_contents($url);
  
          // Execute the request

          $decoded_response = json_decode($response, true);
          $value=$decoded_response['predictions'][0];
          $final=intval($value);
  
          echo "<script> alert('Predicted sales: " . $final . "') </script>";
  
          // Check for errors


         
      } else {
          // Handle missing data error
          echo "Error: Missing required data (date or product_id)";
      }
  }
  
  
    
?>
