<?php
  $current = 'story';
  include 'assets/functions.php';
  include 'partials/header.php';
?>

<section class="d-flex flex-column vh-100 p-3 " >
  @*<?php include 'partials/nav.php'; ?>*@
  <div id="IMG__home" class="bg-dark flex-fill mt-3 storyBG blend--multiply justify-content-center" >
    <div class="row">
      <div class="col-md-12"> <h1 class="text-center header-padding">Put your title here!</h1> </div>
      <div class="col-md-5 d-flex flex-column justify-content-center p-lg-5 mx-auto h-100">
        <h3 class="h3-subtitle-centered">Put a subtitle here!</h3>
          <p class="lead font-weight-normal bottom-margin" >
            Bacon ipsum dolor amet bacon kevin reprehenderit cupim fatback, nulla cillum. Chicken in buffalo id ad, ullamco jowl porchetta.
            Cillum leberkas jerky nulla. Qui esse boudin, laboris ut pariatur lorem ipsum cupim sausage mollit. Venison laboris meatloaf t-bone
             aliquip magna, pork elit flank. In deserunt do, et reprehenderit short ribs sint ribeye strip steak.
          </p>
          <span class="two-button-span-centered">
              <div class="button-div-spacing"><button class="btn btn-outline-light button-width" href="#">Stay?</button></div>
              <div class="button-div-spacing"><button class="btn btn-outline-light button-width" href="#">Run?</button></div>
          </span>
        <h3 class="h3-second-subtitle-centered">Put a subtitle here!</h3>
          <p class="lead font-weight-normal bottom-margin">
               Bacon ipsum dolor amet bacon kevin reprehenderit cupim fatback, nulla cillum. Chicken in buffalo id ad, ullamco jowl porchetta.
               Cillum leberkas jerky nulla. Qui esse boudin. Venison laboris meatloaf t-bone
                aliquip magna, pork elit flank. In deserunt do, et reprehenderit short ribs sint ribeye strip steak.
          </p>
        <span class="one-button-span-centered">
          <div class="button-div-spacing"><button class="btn btn-outline-light button-width" href="#">Disappear?</button></div>
        </span>
      </div>
      <div class="col-md-5 d-flex flex-column justify-content-center p-lg-5 mx-auto h-100 text-center">
        <!-- empty column here to add more content if needed -->
      </div>
  </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>
