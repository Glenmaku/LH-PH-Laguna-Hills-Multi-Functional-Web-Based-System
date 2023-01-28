<?php require_once('header.php'); ?>
<?php require_once('includes/connection.php');?>

<!--UPPER BANNER-->
<div class=" Top TopFinder Topbanner container-fluid" >
<div class="text-center container-fluid" >
<h5>Laguna Hills</h5>
<h1>Property Finder</h1>

</div></div>
<!--END-UPPER BANNER-->

<section class="">
<?php
  include 'map-propertyfinder.php';
?>

</section>

<script>

var paths = document.querySelectorAll('.mapping');
  paths.forEach(function(path) {
    path.addEventListener('mouseover', function() {
      this.style.fill = "#085D40";
    });
    path.addEventListener('mouseout', function() {
      this.style.fill = "grey";
    });
  });

  function availData(elementId) {
    const id = elementId;
    fetch(`adminViews/includes/mapsubmit.php?id=${id}&status=available`)
      .then(response => response.text())
      .then(data => {
        document.getElementById("map-data").innerHTML = data;
      });
  }



</script>


<?php require_once('footer.php'); ?>
