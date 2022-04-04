<?php 
$PAGE = 'gioco';
include('header.php'); ?>
<div class="grid-x">
  <div class="cell small-12 cell-text cell-text-gioco">
    <h1><?php echo $recensioni[$_GET['id']]['title']; ?></h1>
</div>  
</div>
  
<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-12">
    <div class="grid-x">
      <div class="cell">
        <img src="<?php echo $recensioni[$_GET['id']]['image']; ?>">
      </div>
    </div>
  </div>
</div>

<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-12 large-8 ">
    <div class="grid-x">
      <div class="cell cell-text cell-text-gioco">
        <?php echo $recensioni[$_GET['id']]['text']; ?>
      </div>
    </div>
  </div>
</div>

<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-12">
    <div class="grid-x">
      <div class="cell">
        <img src="<?php echo $recensioni[$_GET['id']]['image1']; ?>">
      </div>
    </div>
  </div>
</div>

<div id="toc_container" class="no_bullets">
  <p class="toc_title">
    Indice 
  </p>
  <ul class="toc_list">
    <?php
      foreach ($recensioni[$_GET['id']]['toc'] as $key => $value) {
        echo '<li>';
        echo '<a href="#La_ricetta_segreta">';
        echo '<span class="toc_number toc_depth_1">'.$key.'</span> ';
        echo $value;
        echo '</a>';
        echo '</li>';
        }
    ?>
  </ul>
</div>

<?php $a = '1';

if($recensioni[$_GET['id']]['title1']):
?>

<div class="grid-x">
  <div class="cell small-12 cell-text cell-text-gioco">
    <h1>
      <?php echo $recensioni[$_GET['id']]['title1']; ?>
    </h1>
  </div>  
</div>

<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-12 large-8 ">
    <div class="grid-x">
      <div class="cell cell-text cell-text-gioco">
        <?php echo $recensioni[$_GET['id']]['text1']; ?>
      </div>
    </div>
  </div>
</div>

<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-12 large-8 ">
    <div class="grid-x">
      <div class="cell cell-text cell-text-gioco">
        <?php echo $recensioni[$_GET['id']]['text16']; ?>
      </div>
    </div>
  </div>
</div>

<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-12">
    <div class="grid-x">
      <div class="cell">
        <img src="<?php echo $recensioni[$_GET['id']]['image5']; ?>">
      </div>
    </div>
  </div>
</div>


<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-12 large-8 ">
    <div class="grid-x">
      <div class="cell cell-text cell-text-gioco">
        <?php echo $recensioni[$_GET['id']]['text17']; ?>
      </div>
    </div>
  </div>
</div>

<?php 
  endif;
?>


<?php $a = '1';

if($recensioni[$_GET['id']]['title2']):
?>

<div class="grid-x">
  <div class="cell small-12 cell-text cell-text-gioco">
    <h1>
      <?php echo $recensioni[$_GET['id']]['title2']; ?>
    </h1>
  </div>  
</div>

<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-12 large-8 ">
    <div class="grid-x">
      <div class="cell cell-text cell-text-gioco">
          <?php echo $recensioni[$_GET['id']]['text2']; ?>
        <div class="grid-x grid-margin-x grid-margin-y ">
          <div class="cell small-12 medium-12">
            <div class="grid-x">
              <div class="cell">
                <img src="<?php echo $recensioni[$_GET['id']]['image3']; ?>">
              </div>
            </div>
          </div>
        </div>
          <?php echo $recensioni[$_GET['id']]['text3']; ?>
        <div class="grid-x grid-margin-x grid-margin-y ">
          <div class="cell small-12 medium-12">
            <div class="grid-x">
              <div class="cell">
                <img src="<?php echo $recensioni[$_GET['id']]['image4']; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  endif;
?>

<?php $a = '1';
if($recensioni[$_GET['id']]['title3']):
?>

<div class="grid-x">
  <div class="cell small-12 cell-text cell-text-gioco">
    <h1>
      <?php echo $recensioni[$_GET['id']]['title3']; ?>
    </h1>
  </div>  
</div>

<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-12 large-8 ">
    <div class="grid-x">
      <div class="cell cell-text cell-text-gioco">
        <?php echo $recensioni[$_GET['id']]['text4']; ?>
        <div class="grid-x grid-margin-x grid-margin-y ">
          <div class="cell small-12 medium-12">
            <div class="grid-x">
              <div class="cell">
                <img src="<?php echo $recensioni[$_GET['id']]['image5']; ?>">
              </div>
            </div>
          </div>
        </div>
          <?php echo $recensioni[$_GET['id']]['text5']; ?>
        <div class="grid-x grid-margin-x grid-margin-y ">
          <div class="cell small-12 medium-12">
            <div class="grid-x">
              <div class="cell">
                <img src="<?php echo $recensioni[$_GET['id']]['image6']; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  endif;
?>

<div class="elementor-widget-container">
<div class="elementor-author-box">
<div class="elementor-author-box__avatar">
<img src="<?php echo $recensioni[$_GET['id']]['image7']; ?>">
</div>
<div class="elementor-author-box__text">
<div>
<h5 class="elementor-author-box__name">
  <?php echo $recensioni[$_GET['id']]['text7']; ?>
</h5>
</div>
<div class="elementor-author-box__bio">
  <?php echo $recensioni[$_GET['id']]['text8']; ?>
</div>
</div>
</div>
</div>

<div class="grid-x">
  <div class="cell small-12 cell-text cell-text-gioco">
    <h3>
      <?php echo $recensioni[$_GET['id']]['text9']; ?>
    </h3>
  </div>  
</div>

<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-4">
    <div class="grid-x">
      <div class="cell">
        <img src="<?php echo $recensioni[$_GET['id']]['image8']; ?>">
      </div>
      <div class="cell cell-text b">
        <h6>
          <?php echo $recensioni[$_GET['id']]['text10']; ?>
        </h6>
      </div>
    </div>
  </div>
  <div class="cell small-12 medium-4">      
      <div class="grid-x">
        <div class="cell">
          <img src="<?php echo $recensioni[$_GET['id']]['image9']; ?>">
        </div>
        <div class="cell cell-text">
        <h6>
          <?php echo $recensioni[$_GET['id']]['text11']; ?>
        </h6>
        </div>
      </div>
  </div>
  <div class="cell small-12 medium-4">      
    <div class="grid-x">
      <div class="cell">
        <img src="<?php echo $recensioni[$_GET['id']]['image10']; ?>">
      </div>
      <div class="cell cell-text">
        <h6>
          <?php echo $recensioni[$_GET['id']]['text12']; ?>
        </h6>
      </div>
    </div>
  </div>
</div>

<div class="grid-x grid-margin-x grid-margin-y ">
  <div class="cell small-12 medium-4">
    <div class="grid-x">
      <div class="cell">
        <img src="<?php echo $recensioni[$_GET['id']]['image11']; ?>">
      </div>
      <div class="cell cell-text">
        <h6>
          <?php echo $recensioni[$_GET['id']]['text13']; ?>
        </h6>
      </div>
    </div>
  </div>
  <div class="cell small-12 medium-4">      
      <div class="grid-x">
        <div class="cell">
          <img src="<?php echo $recensioni[$_GET['id']]['image12']; ?>">
        </div>
        <div class="cell cell-text">
        <h6>
          <?php echo $recensioni[$_GET['id']]['text14']; ?>
        </h6>
        </div>
      </div>
  </div>
  <div class="cell small-12 medium-4">      
    <div class="grid-x">
      <div class="cell">
        <img src="<?php echo $recensioni[$_GET['id']]['image13']; ?>">
      </div>
      <div class="cell cell-text">
        <h6>
          <?php echo $recensioni[$_GET['id']]['text15']; ?>
        </h6>
      </div>
    </div>
  </div>
</div>















</div>







<?php include('footer.php'); ?>

