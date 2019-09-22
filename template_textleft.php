<?php
  $current = 'story';
  include 'assets/functions.php';
  include 'partials/header.php';
?>

<section class="d-flex flex-column vh-100 p-3 " >
  <?php include 'partials/nav.php'; ?>
  <div id="IMG__home" class="bg-dark flex-fill mt-3 storyBG blend--multiply" >
    <div class="row h-100">
      <div class="col-md-5 d-flex flex-column justify-content-between p-lg-5 mx-auto h-100">
        <p class="lead font-weight-normal">
          Bacon ipsum dolor amet bacon kevin reprehenderit cupim fatback, nulla cillum. Chicken in buffalo id ad, ullamco jowl porchetta.
          Cillum leberkas jerky nulla. Qui esse boudin, laboris ut pariatur lorem ipsum cupim sausage mollit. Venison laboris meatloaf t-bone
           aliquip magna, pork elit flank. In deserunt do, et reprehenderit short ribs sint ribeye strip steak.
        </p>
        <br>
        <p class="lead font-weight-normal">
             Bacon ipsum dolor amet bacon kevin reprehenderit cupim fatback, nulla cillum. Chicken in buffalo id ad, ullamco jowl porchetta.
             Cillum leberkas jerky nulla. Qui esse boudin, laboris ut pariatur lorem ipsum cupim sausage mollit. Venison laboris meatloaf t-bone
              aliquip magna, pork elit flank. In deserunt do, et reprehenderit short ribs sint ribeye strip steak.
        </p>
        <div class="row">
          <div class="col-12 d-flex justify-content-around">
            <a class="btn btn-outline-light button-width" href="#">Go Left!</a>
            <a class="btn btn-outline-light button-width" href="#">Go Right!</a>
          </div>
        </div>
      </div>
      <div class="col-md-5 d-flex flex-column justify-content-between">
        <!-- empty column here to add more content if needed, just copy and paste sections from above into this div for more text -->
      </div>
    </div>


  </div>
</section>

<?php include 'partials/footer.php'; ?>
