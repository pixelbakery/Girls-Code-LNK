<?php
function isPage($pageQuery, $thisPage){
  $query = $pageQuery;
  $page = $thisPage;
  if (strcmp($query, $page) !== 0) {
      return 'nav-item';
  }
  else{
      return 'nav-item active';
  }
}
?>
