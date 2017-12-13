<!--Name: Orion Dalton, Connor Lord
     SID: 01375709, 01409362
   email: orion_dalton@student.uml.edu, connor_lord@student.uml.edu
-->
<?php
$dirname = "uploads/tab1/";
$images = glob($dirname."*.*");
$idCount = 1;
echo '<div class="row">';
foreach($images as $image) { //main page display
    echo '<div class="column">
            <img id="img'.$idCount.'" src="'.$image.'" width="100" 
              height="100" onclick="DelPhoto('.$image.')" 
              class="hover-shadow"/>
          </div>';

    $idCount++;
}
echo '</div>';
?>
























