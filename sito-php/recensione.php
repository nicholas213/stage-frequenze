<?php 
$PAGE = 'recensione';
include('header.php'); ?>
<div class="grid-x">
  <div class="cell small-12 cell-text">
    <h1><center>Recensioni Videogiochi</center></h1></div>  
</div>
  
<div class="grid-x grid-margin-x grid-margin-y ">
  <?php 
  foreach($recensioni as $k => $v){
      echo '<div class="cell small-12 medium-4">';
      echo '<div class="grid-x">';
      echo'<div class="cell">';
      echo '<img src="'.$v['image'].'">';
      echo '</div>';
      echo '<div class="cell cell-text b">';
      echo sprintf('<h4><a href="gioco.php?id=%d">%s</a></h4>', $k, $v['title']);
      #echo '<h4>'.$v['title'].'</h4>';
      echo '<p>'.$v['text'].'</p>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
  }
  ?>
</div>

<nav aria-label="Pagination">
  <ul class="pagination text-center">
    <li class="pagination-previous disabled">Previous</li>
    <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
    <li><a href="#" aria-label="Page 2">2</a></li>
    <li><a href="#" aria-label="Page 3">3</a></li>
    <li><a href="#" aria-label="Page 4">4</a></li>
    <li class="ellipsis"></li>
    <li><a href="#" aria-label="Page 12">12</a></li>
    <li><a href="#" aria-label="Page 13">13</a></li>
    <li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
  </ul>
</nav>




</div>

<?php include('footer.php'); ?>










