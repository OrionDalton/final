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
    <meta property="og:url"		content="weblab.cs.uml.edu/~odalton/Final/Final.php" />
    <meta property="og:type"		content="website" />
    <meta property="og:title"		content="GUI I-final: Image Management" />
    <meta property="og:description"	content="An interactive photo portfolio website." />
    <meta property="og:image"		content="weblab.cs.uml.edu/~odalton/Final/uploads/Editing-Pictures.png" />


    <link rel="stylesheet" href="css/final.css">
    <script type="text/javascript" src="js/Editor.js"></script>
  </head>
  <body onload="openCity(event, 'Melbourne'), attempt(4)">
    <h1>Image Manager</h1>
    <div class="tab">
      <a href="Final.php"><button class="tablinks" onclick="resetCanvas()">Photos</button></a>
      <a href="Final2.php"><button class="tablinks" onclick="addPhoto(), resetCanvas()">Add Photo</button></a>
      <a href="Final3.php"><button class="tablinks" onclick="delPhoto(), resetCanvas()">Delete Photo</button></a>
      <button class="tablinks" onclick="resetCanvas()">Edit Photo</button>
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
      <p id="CurrImg" hidden></p>
      Step 1: Use sliders to change color palette.<br>
      Step 2: Use Buttons to add filters.
      <?php include 'Editor.php';?>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <div class="fb-share-button" data-href="http://weblab.cs.uml.edu/~odalton/Final/Final.php" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fweblab.cs.uml.edu%2F%7Eodalton%2FFinal%2FFinal.php&amp;src=sdkpreparse">Share</a></div>
      <br>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Visit:">
Tweet</a>

      <br>
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


///////////////////////////////////////////////////////////////////////////


      Caman.remoteProxy = Caman.IO.useProxy('php');

      $(function() {
        var canvas = document.getElementById('canvas');
        var ctx = canvas.getContext('2d');
      
        /* Enable Cross Origin Image Editing */
        var img = new Image();
        img.crossOrigin = '';
        img.src = sessionStorage.getItem('picture');//////////////////////////
        img.onload = function() {
          canvas.width = img.width;
          canvas.height = img.height;
          ctx.drawImage(img, 0, 0, img.width, img.height);
        }
      
        var $reset = $('#resetbtn');
        var $brightness = $('#brightnessbtn');
        var $noise = $('#noisebtn');
        var $sepia = $('#sepiabtn');      
        var $contrast = $('#contrastbtn');
        var $color = $('#colorbtn');

        var $vintage = $('#vintagebtn');
        var $lomo = $('#lomobtn');
        var $emboss = $('#embossbtn');
        var $tiltshift = $('#tiltshiftbtn');
        var $radialblur = $('#radialblurbtn');
        var $edgeenhance = $('#edgeenhancebtn');

        var $posterize = $('#posterizebtn');
        var $clarity = $('#claritybtn');
        var $orangepeel = $('#orangepeelbtn');
        var $sincity = $('#sincitybtn');
        var $sunrise = $('#sunrisebtn');
        var $crossprocess = $('#crossprocessbtn');

        var $hazydays = $('#hazydaysbtn');
        var $love = $('#lovebtn');
        var $grungy = $('#grungybtn');
        var $jarques = $('#jarquesbtn');
        var $pinhole = $('#pinholebtn');
        var $oldboot = $('#oldbootbtn');
        var $glowingsun = $('#glowingsunbtn');
      
        var $hdr = $('#hdrbtn');
        var $oldpaper = $('#oldpaperbtn');
        var $pleasant = $('#pleasantbtn');
      
        var $save = $('#savebtn');
      
        /* As soon as slider value changes call applyFilters */
        $('input[type=range]').change(applyFilters);
      
        function applyFilters() {
          var hue = parseInt($('#hue').val());
          var cntrst = parseInt($('#contrast').val());
          var vibr = parseInt($('#vibrance').val());
          var sep = parseInt($('#sepia').val());
      
          Caman('#canvas', img, function() {
            this.revert(false);
            this.hue(hue).contrast(cntrst).vibrance(vibr).sepia(sep).render();
          });
        }
      
        /* Creating custom filters */      
        Caman.Filter.register("oldpaper", function() {
          this.pinhole();
          this.noise(10);
          this.orangePeel();
          this.render();
        });

        Caman.Filter.register("pleasant", function() {
          this.colorize(60, 105, 218, 10);
          this.contrast(10);
          this.sunrise();
          this.hazyDays();
          this.render();
        });

        $reset.on('click', function(e) {
          $('input[type=range]').val(0);
          Caman('#canvas', img, function() {
            this.revert(false);
            this.render();
          });
        });

        /* In built filters */
        $brightness.on('click', function(e) {
          Caman('#canvas', function() {
            this.brightness(30).render();
          });
        });

        $noise.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.noise(10).render();
          });
        });

        $contrast.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.contrast(10).render();
          });
        });

        $sepia.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.sepia(20).render();
          });
        });

        $color.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.colorize(60, 105, 218, 10).render();
          });
        });

        $vintage.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.vintage().render();
          });
        });

        $lomo.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.lomo().render();
          });
        });

        $emboss.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.emboss().render();
          });
        });

        $tiltshift.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.tiltShift({
              angle: 90,
              focusWidth: 600
            }).render();
          });
        });

        $radialblur.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.radialBlur().render();
          });
        });

        $edgeenhance.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.edgeEnhance().render();
          });
        });

        $posterize.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.posterize(8, 8).render();
          });
        });

        $clarity.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.clarity().render();
          });
        });

        $orangepeel.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.orangePeel().render();
          });
        });

        $sincity.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.sinCity().render();
          });
        });

        $sunrise.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.sunrise().render();
          });
        });

        $crossprocess.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.crossProcess().render();
          });
        });

        $love.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.love().render();
          });
        });

        $grungy.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.grungy().render();
          });
        });

        $jarques.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.jarques().render();
          });
        });

        $pinhole.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.pinhole().render();
          });
        });

        $oldboot.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.oldBoot().render();
          });
        });

        $glowingsun.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.glowingSun().render();
          });
        });

        $hazydays.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.hazyDays().render();
          });
        });

        /* Calling multiple filters inside same function */
        $hdr.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.contrast(10);
            this.contrast(10);
            this.jarques();
            this.render();
          });
        });

        /* Custom filters that we created */
        $oldpaper.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.oldpaper();
            this.render();
          });
        });

        $pleasant.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.pleasant();
            this.render();
          });
        });

        /* You can also save it as a jpg image, extension need to be added later after saving image. */

        $save.on('click', function(e) {
          Caman('#canvas', img, function() {
            this.render(function() {
              this.save('png');
            });
          });
        });
      });


      function changeCanvas(image){
        var res = image.replace("*", "/",);
        res = res.replace("*", "/",);
        document.getElementById("CurrImg").innerHTML = res;
        sessionStorage.setItem('picture', document.getElementById("CurrImg").innerHTML);
        location.reload();
      }

      function resetCanvas(){
        var res = "";
        document.getElementById("CurrImg").innerHTML = res;
        sessionStorage.setItem('picture', document.getElementById("CurrImg").innerHTML);
        location.reload();
      }

    </script>

 </body>
</html>
