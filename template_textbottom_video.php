<?php
  $current = 'story';
  include 'assets/functions.php';
  include 'partials/header.php';
?>

<section class="d-flex flex-column vh-100 p-3 " >
  <?php include 'partials/nav.php'; ?>
  <div id="IMG__home" class="bg-dark flex-fill mt-3 storyBG" >
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video> <!-- Set your id to something unique to this page, and then create the id in the css to link the background image -->
    <div class="row h-100 mx-5 videoStory">
      <div class="col-8 d-flex flex-column justify-content-end p-lg-5 mx-auto h-100">
        <p class="lead font-weight-normal text-center"> Synergistically target B2B processes through user-centric deliverables. Globally architect distinctive human capital vis-a-vis client-based synergy. Progressively whiteboard backward-compatible bandwidth via frictionless information. Efficiently pursue enabled functionalities with team driven.
        </p>
        <div class="row">
          <div class="col-12 d-flex justify-content-around">
            <a class="btn btn-outline-light button-width" href="#">Go Left!</a>
            <a class="btn btn-outline-light button-width" href="#">Go Right!</a>
          </div>
        </div>
      </div>
  </div>
  </div>
</section>

<?php include 'partials/footer.php'; ?>
