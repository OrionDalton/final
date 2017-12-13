<?php
$dirname = "uploads/tab1/"; //directory where pictures are kept
$images = glob($dirname."*.*");
$idCount = 1;
echo '<div class="row">';
foreach($images as $image) { //main page display DOES NOT SHOW FIRST IMAGE SOME REASON
    echo '<div class="column">
            <img id="img'.$idCount.'" src="'.$image.'" width="100" 
              height="100" onclick="openModal(); currentSlide('.$idCount.')" 
              class="hover-shadow"/>
          </div>';

    $idCount++;
}
$totPic = $idCount - 1;
$idCount = 1;
echo '</div>'; 

echo '<div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">';

foreach($images as $image) { // lightbox main image
  echo '<div class="mySlides">
          <div class="numbertext">'.$idCount.' / '.$totPic.'</div>
          <img src="'.$image.'" style="width:100%">
        </div>';
  $idCount++;
}
$idCount = 0;

echo '<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="caption-container">
        <p id="caption"></p>
      </div>';

foreach($images as $image) {//lightbox thumbnails
  $idCount++;
  echo '<div class="column">
          <img height="50" style="max-width: 50px;" class="demo" src="'.$image.'" onclick="currentSlide('.$idCount.')" alt=" ">
        </div>';

}

echo '</div></div>';

?>


















