@extends('newtemplate.layout.template')
@extends('newtemplate.layout.product')

@php $setting =\App\Setting::pluck('value','name')->toArray();

 @endphp
 @section("meta")
    <title>Commercial and renovation products - ASASA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore ASASA Construction's best Commercial and renovation products in Toronto, Canada. Kitchen Accessories, Bathroom Accessories, and Flooring Accessories. ">
      <link rel="stylesheet" href="../ecommerce/assets/css/styles.css">
@endsection
@section('main-section')
<style>
.prev, .next{
	background:orange;
}
</style>




 <section class="section bg-gray-900 box-custom-1">
        
		
		<div class="slideshow-container" style="width:100%;">



<div class="box-custom-1-main" style="background-image: url(../newtemplate/asasa-kitchen/allproduct/slider1.jpg);background-repeat:no-repeat;background-size: cover;">
			<div class="block-sm">
			<h2 class="wow fadeInRight" data-wow-delay=".5s" style="color:#fff">Products</h2>
				<p class="wow fadeInRight" data-wow-delay=".6s" style="color:#fff">
We are providing best Construction renovation services in Toronto. Get in touch with us and book your appointment today </p>
				
				<a class="radius button button-primary button-shadow wow fadeInRight"  href="tel:+1-647-956-1116" >+1-647-956-1116</a>

			<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="{{route('contact.kitchen')}}" >Get In Touch</a>
			
           </div>
        </div>
		<div style="text-align:center;padding: 14px;">
  
		</div>
		<div style="text-align:center"> 
		   
		</div>
</div>
<br>

		
		
          </div>
 	
      </section>

<section class="ftco-section">
<div class="container">
<div class="row justify-content-center ">
<div class="col-md-7 text-center heading-section ftco-animate">
<h2 class="mb-4">Our Products</h2>
</div>
</div>
<div class="carousel-area">
                              <div id="Carousel-1" class="carousel slide" data-ride="carousel">
                                 <div class="carousel-inner">
                                    <div class="carousel-item active">
                                       <div class="product-item">
                                          <div class="row">
                                             <Ul>
                                                <li>
                                                   <div class="product-grid">
                                                      <div class="product-image">
                                                         <a href="{{route('product.countertops')}}">
                                                         <img class="pic-1" src="../newtemplate/asasa-kitchen/allproduct/countertop1.jpg" alt="Product image">
                                                         <img class="pic-2" src="../newtemplate/asasa-kitchen/allproduct/countertop2.jpg" alt="Product image">
                                                         </a>
                                                         
                                                      </div>
                                                      <h3 class="title">Kitchen countertops</h3>
                                                      
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="product-grid">
                                                      <div class="product-image">
                                                         <a href="{{route('product.lighting')}}">
                                                         <img class="pic-1" src="../newtemplate/asasa-kitchen/allproduct/lighting1.jpg" alt="Product image">
                                                         <img class="pic-2" src="../newtemplate/asasa-kitchen/allproduct/lighting2.jpg" alt="Product image">
                                                         </a>
                                                         
                                                      </div>
                                                      <h3 class="title">Kitchen lighting</h3>
                                                      
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="product-grid">
                                                      <div class="product-image">
                                                         <a href="{{route('product.faucets-sink')}}">
                                                         <img class="pic-1" src="../newtemplate/asasa-kitchen/allproduct/sink1.jpg" alt="Product image">
                                                         <img class="pic-2" src="../newtemplate/asasa-kitchen/allproduct/sink2.jpg" alt="Product image">
                                                         </a>
                                                         
                                                      </div>
                                                      <h3 class="title">Kitchen faucets & sinks</h3>
                                                      
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="product-grid">
                                                      <div class="product-image">
                                                         <a href="{{route('product.islands')}}">
                                                         <img class="pic-1" src="../newtemplate/asasa-kitchen/allproduct/island1.jpg" alt="Product image">
                                                         <img class="pic-2" src="../newtemplate/asasa-kitchen/allproduct/island2.jpg" alt="Product image">
                                                         </a>
                                                         
                                                      </div>
                                                      <h3 class="title">Kitchen Islands</h3>
                                                      
                                                   </div>
                                                </li>
												<li>
                                                   <div class="product-grid">
                                                      <div class="product-image">
                                                         <a href="{{route('product.storage')}}">
                                                         <img class="pic-1" src="../newtemplate/asasa-kitchen/allproduct/Wall1.jpg" alt="Product image">
                                                         <img class="pic-2" src="../newtemplate/asasa-kitchen/allproduct/Wall2.jpg" alt="Product image">
                                                         </a>
                                                         
                                                      </div>
                                                      <h3 class="title">Wall Storage</h3>
                                                      
                                                   </div>
                                                </li>
                                             </Ul>
                                          </div>
                                       </div>
                                    </div>
                                    
                                 </div>
                              </div>
                           </div>

</div>
</section>






@endsection
