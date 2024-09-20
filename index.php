<?php
    include 'includes/header.php';
?>
<section class="main py-5">
 <div class="container text-white py-5 ">
        <div class="row py-3">
            <div class="col-lg-10">
                <h1> NO PAIN <br>
                <span>NO GAIN </span> </h1>
                <a class="btn btn-primary" href="register.php"> JOIN US </a>             
            </div>
        </div>
    </div>    
</section>
<div class="row">
        <div class="card" style="color: white; background: var(--secondary-color);" onclick="window.location.href='register.php';">
            <h2> Start your progression today</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            <!-- Invisible button -->
            <button class="hidden-button"></button>
        </div>

        <div class="card" style="background: white;" onclick="window.location.href='register.php';">
            <h2 style="color: var(--primary-color);">Work out hard every day. </h2>
            <p style="color: var(--secondary-color);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>

        <div class="card" style="color: white; background: var(--primary-color);" onclick="window.location.href='register.php';">
            <h2>Eat a balanced diet for optimal nutrition</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>



<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img class="swiper-slide-1-img" src="img-2023/carousel-img/water.jpg">
      </div>
      <div class="swiper-slide">
          <img class="swiper-slide-2-img" src="img-2023/carousel-img/young.jpg">
      </div>
      <div class="swiper-slide">
        <img class="swiper-slide-3-img" src="img-2023/carousel-img/woman-s.jpg">
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<section id= "services">
 <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="img-2023/mma.png">
                <h4> Martial Arts </h4>
                <p>Martial arts, diverse in style and origin, encompass a rich tapestry of disciplined combat practices.
                     From the graceful movements of traditional disciplines like Tai Chi to the powerful strikes of Karate and the ground game of Brazilian Jiu-Jitsu,
                      each form offers a unique journey of physical and mental development.
                      </p>
            </div>
            <div class="col-md-4">
                <img src="img-2023/boxing.png">
                <h4> Boxing </h4>
                <p>Boxing is arts, diverse in style and origin, encompass a rich tapestry of disciplined combat practices.
                     From the graceful movements of traditional disciplines like Tai Chi to the powerful strikes of Karate and the ground game of Brazilian Jiu-Jitsu,
                      each form offers a unique journey of physical and mental development.
                      </p>
            </div>
            <div class="col-md-4">
                <img src="img-2023/gym.png">
                <h4> Gym </h4>
                <p>Gym  diverse in style and origin, encompass a rich tapestry of disciplined combat practices.
                     From the graceful movements of traditional disciplines like Tai Chi to the powerful strikes of Karate and the ground game of Brazilian Jiu-Jitsu,
                      each form offers a unique journey of physical and mental development.
                      </p>
            </div>
        </div>
    </div>    
</section>


 





<?php
    include 'includes/footer.php';
?>