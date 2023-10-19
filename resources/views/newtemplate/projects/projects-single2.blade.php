@extends("newtemplate.layout.master")
@extends('newtemplate.layout.project')

@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
@endphp

@section("meta")
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../newtemplate/plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="../newtemplate/plugins/fontawesome/css/all.min.css">
  
  <link rel="stylesheet" href="../newtemplate/plugins/slick/slick.css">
  
 
  <link rel="stylesheet" href="../newtemplate/plugins/style.css">
@endsection

<body>
  <div class="body-inner">

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row">
      <div class="col-lg-12">
        <div id="page-slider" class="page-slider small-bg">
          <div class="item">
            <img loading="lazy" class="img-fluid" style="width:100%" src="../newtemplate/asasa/project/slide2.png" alt="project-image" />
          </div>

          <div class="item">
            <img loading="lazy" class="img-fluid" style="width:100%" src="../newtemplate/asasa/project/slide1.jpg" alt="project-image"  />
          </div>

          
        </div>
      </div>

     
    </div>

  </div>
</section><!-- Main container end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="../newtemplate/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="../newtemplate/plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="../newtemplate/plugins/slick/slick.min.js"></script>
  <script src="../newtemplate/plugins/slick/slick-animation.min.js"></script>
 

  <!-- Template custom -->
  <script src="../newtemplate/plugins/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  
<!-- Mirrored from demo.themefisher.com/constra/projects-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Oct 2021 14:41:00 GMT -->
</html>