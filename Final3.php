<!--Name: Orion Dalton, Connor Lord
     SID: 01375709, 01409362
   email: orion_dalton@student.uml.edu, connor_lord@student.uml.edu
-->


<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link href="https://fonts.googleapis.com/css?family=Baumans" rel="stylesheet"> 
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <title>
      Image Management
    </title>
    <link rel="stylesheet" href="css/final.css">
  </head>
    <body onload="openCity(event, 'Tokyo'), attempt(3)">
    <h1>Image Manager</h1>
    <div class="tab">
      <a href="Final.php"><button class="tablinks">Photos</button></a>
      <a href="Final2.php"><button class="tablinks" onclick="addPhoto()">Add Photo</button></a>
      <button class="tablinks">Delete Photo</button>
      <a href="Final4.php"><button class="tablinks">Edit Photo</button></a>
    </div>

    <div id="London" class="tabcontent">
      <div id="tab1"></div>
      <?php include 'tab1.php';?>
    </div>

    <div id="Paris" class="tabcontent">
      <div id="tab2"></div>
      <?php include 'tab2.php';?>
    </div>

    <div id="Tokyo" class="tabcontent">
      <div id="tab3"></div>
      <?php include 'tab3.php';?>
    </div>

    <div id="Melbourne" class="tabcontent">
      <div id="tab4"></div>
      <p id="CurrImg">uploads/tab1/d.jpeg</p>
      <?php include 'Editor.php';?>
      <?php include 'tab4.php';?>
    </div>

    <script>
    //upload(not working)
      function previewFile(){
        var preview = document.querySelector('img'); //selects the query named img
        var file    = document.querySelector('input[type=file]').files[0]; //sames as here
        var reader  = new FileReader();

        reader.onloadend = function () {
          preview.src = reader.result;
        }

        if (file) {
          reader.readAsDataURL(file); //reads the data as a URL
        } else {
          preview.src = "";
        }
      }

      previewFile();  //calls the function named previewFile()
  

    //opening tabs
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      function attempt(tabNum){
        if(tabNum == 1)
          var a = document.getElementById("tab1");
        if(tabNum == 2)
          var a = document.getElementById("tab2");
        if(tabNum == 3)
          var a = document.getElementById("tab3");
        if(tabNum == 4)
          var a = document.getElementById("tab4");
        if(tabNum == 5)
          var a = document.getElementById("tab5");
          
       // a.innerHTML = "this is a test";
//use a to link to the image album macro to display all images
//this already gets the different divs for each tab

      }

      function addPhoto(){
        alert("Because the Weblab Servers do not allow for uploading, this does not work correctly. The code we have would upload the image into the correct directory if it is of the .jpg, .jpeg, or .png file type.");
      }
      function delPhoto(){
        alert("Because the Weblab Servers do not allow for file deletion, this does not work correctly. The code we have would allow a user to click an image to delete it from the servers, after confirmation.");        
      }

      function openModal() {
        document.getElementById('myModal').style.display = "block";
      }

      function closeModal() {
        document.getElementById('myModal').style.display = "none";
      }

      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }

    </script>

 </body>
</html>
