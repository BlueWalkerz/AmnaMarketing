<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* The grid: Four equal columns that floats next to each other */
.columnxf {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.columnxf img {
    height:100px;
    width: 100px;
  opacity: 0.8;
  cursor: pointer;
}

.columnxf img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.rowxf:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container (positioning is needed to position the close button and the text) */
.containerxf {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the image */
.closebtnt {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
    </style>
</head>
<body>


<!-- The grid: four columns -->


<!-- The expanding image container -->
<div class="containerxf">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtnt">&times;</span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:100%">

  <!-- Image text -->
  <div id="imgtext"></div>
</div>

<div class="rowxf">
  <div class="columnxf">
    <img src="https://source.unsplash.com/user/erondu/1600x900" alt="Nature" onclick="myFunction(this);">
  </div>
  <div class="columnxf">
    <img src="https://source.unsplash.com/user/erondu3/1600x900" alt="Snow" onclick="myFunction(this);">
  </div>
  <div class="columnxf">
    <img src="https://source.unsplash.com/user/erondu1/1600x900" alt="Mountains" onclick="myFunction(this);">
  </div>
  <div class="columnxf">
    <img src="https://source.unsplash.com/user/erondu2/1600x900" alt="Lights" onclick="myFunction(this);">
  </div>
</div>
<script>

function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}
</script>

</body>
</html>




<!-- modall -->
<div class="portfolio-modal modal fade" id="youtube-portfolio" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="close-modal" data-bs-dismiss="modal"><div class="close-modal" data-bs-dismiss="modal"><span class="closebtnt">&times;</span></div></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <div class="containerxf">
                                      <!-- Close the image -->
                                      <!-- <span onclick="this.parentElement.style.display='none'" class="closebtnt">&times;</span> -->

                                      <!-- Expanded image -->
                                      <img id="expandedImg3" style="width:100%">

                                      <!-- Image text -->
                                      <div id="imgtext3"></div>
                                    </div>

                                    <div class="rowxf">
                                      <div class="columnxf">
                                        <img src="https://source.unsplash.com/user/erondu/1600x900" alt="Nature" onclick="piczoom3(this);">
                                      </div>
                                      <div class="columnxf">
                                        <img src="https://source.unsplash.com/user/erondu3/1600x900" alt="Snow" onclick="piczoom3(this);">
                                      </div>
                                      <div class="columnxf">
                                        <img src="https://source.unsplash.com/user/erondu1/1600x900" alt="Mountains" onclick="piczoom3(this);">
                                      </div>
                                      <div class="columnxf">
                                        <img src="https://source.unsplash.com/user/erondu2/1600x900" alt="Lights" onclick="piczoom3(this);">
                                      </div>
                                    </div>
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- dsds -->
        <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item ">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#youtube-portfolio">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Youtube</div>
                                <div class="portfolio-caption-subheading text-muted">Youtube Advertisments</div>
                            </div>
                        </div>
                    </div>