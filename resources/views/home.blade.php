@include ('template.header')
  <style>
.carousel {
    margin-left: 15%;
    margin-right: 15%;
}

ul.slides {
    display: block;
    position: relative;
    height: 500px;
    margin: 0;
    padding: 0;
    overflow: hidden;
    list-style: none;
}

.slides * {
    user-select: none;
    -ms-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -webkit-touch-callout: none;
}

ul.slides input {
    display: none; 
}


.slide-container { 
    display: block; 
}

.slide-image {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    opacity: 0;
    transition: all .7s ease-in-out;
}   

.slide-image img {
    width: auto;
    min-width: 100%;
    height: 100%;
}

.carousel-controls {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
    font-size: 100px;
    line-height: 600px;
    color: #fff;
}

.carousel-controls label {
    display: none;
    position: absolute;
    padding: 0 20px;
    opacity: 0;
    transition: opacity .2s;
    cursor: pointer;
}

.slide-image:hover + .carousel-controls label{
    opacity: 0.5;
}

.carousel-controls label:hover {
    opacity: 1;
}

.carousel-controls .prev-slide {
    width: 49%;
    text-align: left;
    left: 0;
}

.carousel-controls .next-slide {
    width: 49%;
    text-align: right;
    right: 0;
}

.carousel-dots {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 20px;
    z-index: 999;
    text-align: center;
}

.carousel-dots .carousel-dot {
    display: inline-block;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #fff;
    opacity: 0.5;
    margin: 10px;
}

input:checked + .slide-container .slide-image {
    opacity: 1;
    transform: scale(1);
    transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .carousel-controls label {
     display: block; 
}

input#img-1:checked ~ .carousel-dots label#img-dot-1,
input#img-2:checked ~ .carousel-dots label#img-dot-2,
input#img-3:checked ~ .carousel-dots label#img-dot-3,
input#img-4:checked ~ .carousel-dots label#img-dot-4,
input#img-5:checked ~ .carousel-dots label#img-dot-5,
input#img-6:checked ~ .carousel-dots label#img-dot-6 {
	opacity: 1;
}


input:checked + .slide-container .nav label { display: block; }

  </style>
<body style="background-color: ">
    <!-- caraousel -->
    
    <div>
  <div class="carousel mb-5">
    <ul class="slides">
      <input type="radio" name="radio-buttons" id="img-1" checked />
      <li class="slide-container">
        <div class="slide-image">
          <img src="https://ap.rdcpix.com/7fcad0267adedfd2236d539c7a64f7d1l-m3219419797od-w480_h360.jpg">
        </div>
        <div class="carousel-controls">
          <label for="img-3" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-2" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-2" />
      <li class="slide-container">
        <div class="slide-image">
          <img src="https://th.bing.com/th/id/OIP.dUG9gqJSLDHkgUtUmHdMJgHaFj?pid=ImgDet&rs=1">
        </div>
        <div class="carousel-controls">
          <label for="img-1" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-3" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-3" />
      <li class="slide-container">
        <div class="slide-image">
          <img src="https://static-id.lamudi.com/static/media/bm9uZS9ub25l/1000x620/ac9b72bf610402.jpg">
        </div>
        <div class="carousel-controls">
          <label for="img-2" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-1" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <div class="carousel-dots">
        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
      </div>
    </ul>
  </div>
</div>

	<!-- end korosel -->

    <!-- card -->
  <div class="card" style="background-color: " >
        <div class="card-group" >
        <div class="card ml-2" style="border-radius: 20px">
            <img src="https://www.rukita.co/static/img/rumods/focus-mod-img.png" class="card-img-top" alt="..." style="border-radius: 20px" width="160" height="200px">
            <div class="card-body">
            <h5 class="card-title">Room Focus</h5>
            <p class="card-text">Kerja dari rumah lebih nyaman dan produktif</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>
        <div class="card ml-3 mr-3" style="border-radius: 20px">
            <img src="https://www.rukita.co/static/img/rumods/play-mod-img.png" class="card-img-top" alt="..." style="border-radius: 20px" width="160" height="200px">
            <div class="card-body">
            <h5 class="card-title">Room Play</h5>
            <p class="card-text">Dilengkapi perangkat komplit untuk para gamers</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>
        <div class="card mr-2" style="border-radius: 20px">
            <img src="https://www.rukita.co/static/img/rumods/create-mod-img.png" class="card-img-top" alt="..." style="border-radius: 20px" width="160" height="200px">
            <div class="card-body">
            <h5 class="card-title">Room Create</h5>
            <p class="card-text">Bikin konten aestetik cukup dari kamar aja</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>
        </div>
        <center>
        <div class="mt-3 mb-5">
        <button type="button" class="btn btn-primary">
            Read More
        </button>
        </div>
        </center>
    </div>
        <!-- end card -->

        <!-- about -->

    <div class="container mt-5 mb-5" style="background-color: #96ADBF; border: 3px; border-radius: 20px" >
        <div>
            <h1>Apa itu PTT?</h1>
        </div>
        <div class="jumbotron-flex">
            
            <div>
                PTT (Penyewaan Tempat Tinggal) adalah sebuah prototype aplikasi penyewaan tempat tinggal berbasis online
            </div>
            <div></div>
        </div>
        </div>

        <!-- end about -->

    </div>
</body>
@include ('template.footer')