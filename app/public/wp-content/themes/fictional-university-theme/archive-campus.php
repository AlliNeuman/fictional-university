<?php

get_header();
pageBanner(array(
  'title' => 'Our Campuses',
  'subtitle' => 'We have several convenient locations.'
))
?>


<div class="container container--narrow page-section">


  <?php
  $mapWest = get_field("map_west_location");

  echo "<h3>Downtown West Location</h3>";
  echo $mapWest;
?>
</div>
<?php

echo paginate_links();
?>


</div>
<?php
get_footer();
?>
