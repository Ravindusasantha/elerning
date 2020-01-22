<?php

session_start();

 include_once "header.php" ?>



	</section>

	<!-- carousel -->
<section class="index-carosel"  >
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/e_learning.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/e_learning1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/e_learning2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</section>

<section class="bg-img p-b-30 ">
  <h2 class="text-center p-t-35 m-b-30">SUBJECTS</h2>

  <div class="container-fluied">
  <div class="row">
    <div class="tab col-3 pl-0 pr-0">
  <button class="tabbtn" onclick="openSubject(event, 'Maths')" id="defaultOpen">MATHS</button>
  <button class="tabbtn" onclick="openSubject(event, 'Science')">SCIENCE</button>
  <button class="tabbtn" onclick="openSubject(event, 'Sinhala')">SINHALA</button>
</div>

<div class="col-9 pl-0 pr-0">

<div id="Maths" class="tabcontent">
  <h3>Maths</h3>
  <p>MAths is easy.</p>
</div>

<div id="Science" class="tabcontent">
  <h3>Science</h3>
  <p>Science is easy.</p> 
</div>

<div id="Sinhala" class="tabcontent">
  <h3>Sinhala</h3>
  <p>Sinhala is easy.</p>
</div>
</div>
  </div>
</section>

<!-- Teachers -->
<section class="teachers bg-img p-b-30 bg-odd" id="teachers">

<h2 class="text-center p-t-35 m-b-30">SUBJECTS</h2>
<div class="container cards">	
<div class="row">
	
	<div class="col-md-3">
		<div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
	</div>
	<div class="col-md-3">
		<div class="card text-white bg-dark mb-3">
                <div class="card-header">SCIENCE</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p><a href="subjects.php">More..</a></p>
                </div>
              </div>
	</div>
		<div class="col-md-3">
		<div class="card text-white bg-dark mb-3">
                <div class="card-header">SINHALA</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
	</div>
		<div class="col-md-3">
		<div class="card text-white bg-dark mb-3">
                <div class="card-header">ENGLISH</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
	</div>
</div>
</div>	

</section>

<!-- About us -->
<section class="courses p-b-30 ">



</section>

<section class="p-b-30 bg-odd">

  <h2 class="text-center p-t-35 m-b-30">TEACHERS</h2>
  <div class="row">
  <div class="col-md-3">
  <div class="teacher-content">

  <img src="img/teachers/teacher1.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  </div>
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="teacher-content">
  
  <img src="img/teachers/teacher1.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  </div>
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="teacher-content">
  
  <img src="img/teachers/teacher1.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  </div>
  </div>
</div>
</div>
<div class="col-md-3">
  <div class="teacher-content">
  
  <img src="img/teachers/teacher1.jpg" alt="Avatar" class="image">
  <div class="middle">
    <div class="text"><h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  </div>
  </div>
</div>
</div>
</div>
</section>

<!-- owl-carosel -->
<section>
    <div class="home-demo">
      <div class="row">
        <div class="col-md-12 columns">
          <h3>Demo</h3>
          <div class="owl-carousel">
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
             <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="card text-white bg-dark mb-3">
                <div class="card-header">MATHS</div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 15,
        loop: true,
        autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    nav:true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          }
        }
      })
    </script>
  </section>  


<section class="gallery-block compact-gallery bg-img p-b-30" style="background-image: url(img/image2.jpg);">
        <div class="container">
            <div class="heading">
                <h2>Compact Gallery</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image1.jpg">
                        <img class="img-fluid image" src="img/image1.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image2.jpg">
                        <img class="img-fluid image" src="img/image2.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image3.jpg">
                        <img class="img-fluid image" src="img/image3.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image4.jpg">
                        <img class="img-fluid image" src="img/image4.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                        </a>
                    </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image5.jpg">
                        <img class="img-fluid image" src="img/image5.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image6.jpg">
                        <img class="img-fluid image" src="img/image6.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image7.jpg">
                        <img class="img-fluid image" src="img/image7.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image8.jpg">
                        <img class="img-fluid image" src="img/image8.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="img/image9.jpg">
                        <img class="img-fluid image" src="img/image9.jpg">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "footer.php" ?>

   