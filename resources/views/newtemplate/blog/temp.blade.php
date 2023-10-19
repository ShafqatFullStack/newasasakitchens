@extends('newtemplate.layout.template')



@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
@endphp
@php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp

@section('meta')
		<title>{{$blog->meta_title}}
</title>
		<meta name="description" content="{{$blog->meta_description}}">
    

<!-- /Rank Math WordPress SEO plugin -->
<link rel='dns-prefetch' href='http://use.fontawesome.com/' />

<style>
.apbct_wc_honeypot {
display: none !important;
}
</style>



<link rel="stylesheet" type="text/css" href="../newtemplate/wp-content/cache/wpfc-minified/lvyhgelm/483ft.css" media="all"/>

<link rel="stylesheet" type="text/css" href="../newtemplate/wp-content/cache/wpfc-minified/qszdiofh/9pujf.css" media="all"/>
<link rel='stylesheet' id='elementor-post-1143-css'  href='../newtemplate/wp-content/uploads/elementor/css/post-11439d2f.css?ver=1634699583' media='all' />


<link rel="stylesheet" href="../newtemplate/css/font-awesome.min.css">
<link rel="stylesheet" href="../newtemplate/css/animation.css" />
<link rel="stylesheet" href="../newtemplate/css/header.css" />


<link rel="stylesheet" href="../newtemplate/css/theme.css" />


<!-- <script src='https://impressionskitchens.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script> -->
<!-- <script src='https://impressionskitchens.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script> -->
<script id='ct_public_functions-js-extra'>
var ctPublicFunctions = {"_ajax_nonce":"cc392bef77","_rest_nonce":"5b17713fd4","_ajax_url":"\/wp-admin\/admin-ajax.php","_rest_url":"https:\/\/impressionskitchens.com\/index.php?rest_route=\/","_apbct_ajax_url":"https:\/\/impressionskitchens.com\/wp-content\/plugins\/cleantalk-spam-protect\/lib\/Cleantalk\/ApbctWP\/Ajax.php","data__set_cookies":"1","data__set_cookies__alt_sessions_type":"0"};
</script>
<style>
.section-sub{
	padding-top:30px;
	padding-bottom:30px;
}
.subservice h2{
	
		font-size:24px;
		line-height:3;
	
}
.subservice p{
	
		line-height:1.7;
	
}
.heading{
	
	font-size: x-large;
}
.subservice .contentsection{
		padding-top:25px;
		background:white;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
.subservice	.imagessection{
		padding:0px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	
.subserivce{
	margin-left:5%;
}
.prev, .next{
	background:orange;
} 
p{
color:#707070;
line-height: 1.5;
text-align: justify;

}


.call-to-action h3 {
    font-size: 21px;
    line-height: 3;
    font-weight: bold;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
</style>

</head>
@endsection
@section('main-section')


<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template page-template-elementor_header_footer page page-id-1143 ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-3.7.3 ast-header-custom-item-inside group-blog ast-single-post ast-inherit-site-logo-transparent elementor-default elementor-template-full-width elementor-kit-1249 elementor-page elementor-page-1143 astra-addon-3.6.1">
<!-- Google Tag Manager (noscript) -->



 <section class="section bg-gray-900 box-custom-1">
       
		<div class="slideshow-container" style="width:100%;">



<div class="mySlides fade box-custom-1-main" style="background-image: url({{asset('uploads/post/'.$blog->featured_image)}});background-repeat:no-repeat;background-size: cover;">
			<div class="block-sm">
			<h2 class="wow fadeInRight" data-wow-delay=".5s" style="color:#fff">{{$blog->title}}</h2>
				<p class="wow fadeInRight" data-wow-delay=".6s" style="color:#fff">{{$blog->meta_description}}</p>
				<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="tel:+1-647-956-1116" style="margin-top:10%;">+1-647-956-1116</a>

			<a class="radius button button-primary button-shadow wow fadeInRight" data-wow-delay=".7s" href="#" style="margin-top:10%;">Get In Touch</a>
			
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

<img src="../newtemplate/asasa-kitchen/test/w1.png">
<img src="../newtemplate/asasa-kitchen/test/1.png">
<img src="../newtemplate/asasa-kitchen/test/5.png">
<img src="../newtemplate/asasa-kitchen/test/8.png">
<img src="../newtemplate/asasa-kitchen/test/Header.png">
<img src="../newtemplate/asasa-kitchen/test/c2.jpg">


beneifits

<img src="../newtemplate/asasa-kitchen/test/b1.png">
<img src="../newtemplate/asasa-kitchen/test/b2.jpg">
<img src="../newtemplate/asasa-kitchen/test/b3.jpg">
<img src="../newtemplate/asasa-kitchen/test/b4.jpg">
<img src="../newtemplate/asasa-kitchen/test/b5.jpg">
<img src="../newtemplate/asasa-kitchen/test/b6.jpg">

<section class="ftco-section">
<div class="container">
<div class="row">
<div class="col-lg-8 ftco-animate">
<h2 class="heading mb-3">Exciting points Before Getting Quartz Countertops</h2>
<p>Except if you are a specialist, it's challenging to separate quartz ledges and regular stone quartz. Quartz ledges are designed in the importance they are man-made and comprise of different materials.</p>

<h2  class="mb-3 mt-5">The expense of quartz ledges in Toronto</h2>

<p>The cost for quartz ledges contrasts depending upon the area, brand, shading, or plan. For Toronto occupants, the value runs anyplace between $ 50 to $100 per square foot. Remember that that cost is for the materials, as it were. Ordinarily, quartz ledges' materials go for near $75 per square foot without establishment.</p>
<br>
<p>Inferior quality quartz ledges cost $50 to $ 60 for each square foot. On the off coincidental that you settle for the mid-range quality, you will probably leave behind $60 to $ 70 for each square foot. For rich quality quartz, $70 to $ 100 for each square foot will do.</p>
<h2 class="mb-3 mt-5">Cost Of Installing Quartz Countertops</h2>
<p>Establishment runs between $ 150 to $ 180 for each square foot. This value range relies upon the number of sections completed and the edging plan. Introducing a 25 square foot ledge for Toronto property holders can add up to $1200 to $ 2700 for the whole task.</p>
<h2 class="mb-3 mt-5">Extra costs</h2>
<p>Aside from the buying and establishment value, you will probably experience extra components that add to the venture's last expense like creation and edging configuration, crease jointing and patterns for sinks and apparatuses, and the evening out of the material. The help for the ledge material relies upon your home construction.</p>
<br>
<p>The edging treatment is typically added to the expense of materials, given the plan is standard and essential. Unmistakable edge profiles regularly draw in extra costs.</p>
<h2 class="mb-3 mt-5">Quartz Countertops Color</h2>
<p>The most remarkable component of quartz ledges is the wide assortment of tones. Aside from colors, quartz comes in loads of examples and completions. The producers profit from the many techniques as they have the freedom to add every one of the shades they can get.</p>
<br>
<p>A large portion of the quartz colors come from the first shades of quartz. The shadings can be changed by adding different colors to accomplish the shade and tone of the decision. The techniques in quartz are more predictable, in contrast to the regular stone.</p>
<br>
<p>Ordinary stones are quarried in sections. Various chunks come in multiple tones; subsequently, it is difficult to set up reliable techniques and examples. The quartz tones' consistency is excellent for Toronto property holders and fashioners covetous of attempting the distinctive quartz tones and standards in their homes or properties they are chipping away at.</p>
<br>
<p>The extent of quartz tones is vast. Each style has a name, yet each character is distinctive, relying upon the provider. Quartz stone is a more tremendous amount of everyday shades. You will probably think that they are in earth tones like tans, dim, brown, and green. Quartz additionally comes in neutral tones like smooth beige, radiant white, and dark. A few brands benefit tones like blue, inconspicuous shades, and rose.</p>
<h2 class="mb-3 mt-5">White Quartz</h2>
<p>White is among the most favored ledge tones in Toronto. You can apply this tone to any plan you have as a top priority. White quartz goes from the most splendid super white to the furthest cream grayish tones. You can select white quartz with a couple of examples or one with metallic spots of minerals.

</p>
<br>
<p>White counters are the most ideal choice for your kitchen. They make the kitchen space engaging and open.</p>
<h2 class="mb-3 mt-5">Beige quartz</h2>
<p>You can choose beige quartz on the off chance that white is excessively brilliant for your preferring. Beige quartz with a yellow hint gives an ideal equilibrium and is an extraordinary way of messing with shadings and adding more life to your ledges. The most outstanding aspect of beige quartz ledges is that they work out well for both current and conventional home plans.</p>

<h2 class="mb-3 mt-5">Dark quartz</h2>
<p>Dark quartz gives a unique appearance, which gives the whole kitchen class and measurement. One professional of dark quartz is its capacity to hide stains and soil.

</p>
<br>
<p> While picking cupboard tones to match dark quartz, it's ideal for picking white cabinetry since it works out positively for dark ledges.</p>

<h2 class="mb-3 mt-5">Dim quartz</h2>
<p>Dim is an impartial shading and is exceptionally liked by Toronto's current property holders. Both light and dim cupboards function admirably with dark quartz ledges. Dark ledges are the most ideal way of featuring the suggestions of your wood cabinetry.</p>

<h2 class="mb-3 mt-5">Brown and Gold quartz</h2>
<p>These classifications of quartz arrive in an assortment of tones. The shades incorporate tans, gold, nectar, yellow, and tans. These shadings give your kitchen a warm and open look. A shadow of brown agrees with wooden cabinetries. That not too far off is thought for Toronto mortgage holders.</p>

<h2 class="mb-3 mt-5">Green, blue and red quartz</h2>
<p>Except if these are your beloved tones, it is difficult to come by blue, green, or red tones in any kitchen. You should practice care before you settle for any of the above colors. Settle for cupboard colors that don't cause the ledges to appear to be awkward.</p>
<br>
<p>These shadings prove to be useful for present-day spaces. Nonetheless, they can, in any case, be applied in traditional kitchens. The most vital factor to place into thought is picking light tones for your dividers and cabinetry. Neglecting to do as such will carry a dull look to the whole room.</p>

<h2 class="mb-3 mt-5">Quartz Countertop Pattern</h2>
<p>Quartz isn't just accessible in many tones. It likewise accompanies bunches of examples to look over. These examples are not really unique concerning regular stones like marble and rock. As referenced before, makes have the last say on the previous look and feel of quartz ledges.</p>
<p>A portion of the typical examples in quartz incorporate specks, veins, or plain strong shading. The surface of quartz relies upon how it was ground. If easily ground, the character seems smooth.</p>
<p>Picking the most suitable quartz design for Toronto property holders relies upon the stylish characteristic they need for their kitchens. Light specks and veins mix impeccably, particularly assuming you need that as the most exceptional kitchen space component. To avoid a circumstance where various perspectives are contending with one another in one space, you could pick an impartial shading and plan for the cabinetry.</p>
<h2 class="mb-3 mt-5">Pre-assembled Quartz Countertops</h2>
<p>Custom ledges require going through a maker before they are introduced. It can be simpler for Toronto land owners with a brief period on their hands to prepare made quartz. As the name recommends, ledges with completed edges are cut earlier. The best thing about pre-assembled pieces is that you can introduce them following purchasing.</p>
<br>
<p>Pre-assembled quartz sections are a fantastic way of saving time and introducing your quartz ledges right away. They come in standard edging plans, for example, bullnose edge and facilitated edge. Notwithstanding, they are just accessible in explicit shadings, and the edging plans are restricted as well.</p>
<br>
<p>Pre-assembled quartz ledges are great for Toronto clients with kitchen counters of standard sizes. With pre-assembled quartz ledges, the time and cost for establishment are diminished. The principal sum you will probably pay runs between $30 to $ 50 for every square foot. Price is likewise dictated by the size, plan, shading, and brand of the material.</p>
<h2 class="mb-3 mt-5">Pre-assembled Quartz Countertops</h2>
<p>Custom ledges require going through a maker before they are introduced. It can be simpler for Toronto land owners with a brief period on their hands to prepare made quartz. As the name recommends, ledges with completed edges are cut earlier. The best thing about pre-assembled pieces is that you can introduce them following purchasing.</p>
<h2 class="mb-3 mt-5">Designed Quartz Countertops</h2>
<p>Designed stone ledges are the name that is frequently given to quartz ledges. The name is because of the materials that are blended to frame the eventual outcome. The materials are silicon dioxide, engineered materials, and sap fasteners and colors.</p>
<br>
<p>It is accessible to error Quartzite for engineered quartz. This misperception is because Quartzite is a natural stone that is also used in assembly countertops. Quartzite comes in gray, white, pink, or red shades. Planned stones, on the other hand, come in so many colors.</p>
<h2 class="mb-3 mt-5">Quartz Countertop Edges</h2>
<p>Ledge edges are not just there to add some class to your kitchen counters. In actuality, the state of your counter edges could improve or diminish the wellbeing and support estimates essential for yourself and your family to keep.</p>
<br>
<p>
The edges of your counter are fundamental since they assist with improving effectiveness and, in particular, give an ideal equilibrium plan.
</p>
<h2 class="mb-3 mt-5">Quartz Countertop Thickness</h2>
<p>Any veteran in the ledge business comprehends that there are just two sorts of thicknesses to expect in ledges. You can think that they are 2 centimeters 3/4 or 3 centimeters 1/4 inches thick. 1/4 is the standard width for quartz ledges.</p>
<br>
<p>Restroom ledges should be 2 centimeters thick, while those for the kitchen, 3 centimeters. This standard is not really debatable except if there is a specific look you are going for. Additionally, the spending plan you have assumes a critical part in the thickness you will agree to.</p>
<br>
<p>A three-centimeter thick chunk is sturdy and extremely simple to introduce. It is marginally costly, yet its solidness makes up the purchasing cost. Additionally, because of its thickness, it scarcely breaks, making it exceptionally simple to ship.</p>
<br><p>The two centimeters quartz ledge has a superior appearance when contrasted with the 3 centimeters one. They are sleeker and most appropriate for current spaces.</p>
<h2 class="mb-3 mt-5">Quartz Countertop Finishes</h2>
<p>Every ledge has its exceptional completion. Completions are intended to add excellence to the countertops and assume a small part in guaranteeing sturdiness. Quartz ledges have two completions: sharpened and cleaned.</p>
<h2 class="mb-3 mt-5">Washroom Quartz Countertops</h2>
<p>Quartz is non-permeable thus can be introduced in a restroom. Quartz ledges can withstand high dampness levels. However long you use quartz inside, you don't need to stress that it will get harmed rapidly. The main thing to do is get ledge completes that can withstand incessant spillages.</p>
<h2 class="mb-3 mt-5">Quartz Countertops That Look Like Marble</h2>
<p>Quartz ledges look like regular stones like marble. They don't require such a lot of support to stay sparkly and decadent. Marble, similar to quartz ledges, gives your kitchen a brilliant and rich look and feel without selling for less solid material.</p>
<h2 class="mb-3 mt-5">Best Quartz Countertops</h2>
<p>Quartz ledge brands are so many. With more being more well-known than others, it is upon the purchaser to pick the brand that suits their necessities most. Interestingly, quartz ledges result from one regular system; along these lines, you don't need to stress over the quality.</p>
<h2 class="mb-3 mt-5">Quartz Countertops Installation</h2>
<p>It is ideal to have your quartz ledges introduced by an expert. Do-It-Yourself masters may neglect to see the requirement for an expert, yet the cycle is so bulky, and botches are impossible because re-trying the assignment is much more furious.</p>
<div class="pt-5 mt-5">
<h3 class="mb-5 font-weight-bold"></h3>
<!--
<ul class="comment-list">
<li class="comment">
<div class="vcard bio">
<img src="images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta">September 06, 2020 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
</li>
<li class="comment">
<div class="vcard bio">
<img src="images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta">September 06, 2020 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
<ul class="children">
<li class="comment">
<div class="vcard bio">
<img src="images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta">September 06, 2020 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
</li>
</ul>
</li>
<li class="comment">
<div class="vcard bio">
<img src="images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg" alt="Image placeholder">
</div>
<div class="comment-body">
<h3>John Doe</h3>
<div class="meta">September 06, 2020 at 2:21pm</div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
<p><a href="#" class="reply">Reply</a></p>
</div>
</li>
</ul>
-->
<!--
<div class="comment-form-wrap pt-5">
<h3 class="mb-5 font-weight-bold">Leave a comment</h3>
<form action="#" class="p-5 bg-light">
<div class="form-group">
<label for="name">Name *</label>
<input type="text" class="form-control" id="name">
</div>
<div class="form-group">
<label for="email">Email *</label>
<input type="email" class="form-control" id="email">
</div>
<div class="form-group">
<label for="website">Website</label>
<input type="url" class="form-control" id="website">
</div>
<div class="form-group">
<label for="message">Message</label>
<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
</div>
</form>
</div>-->
</div>
</div> 
<div class="col-lg-4 sidebar ftco-animate">
<!--
<div class="sidebar-box ftco-animate">
<h3 class="heading-sidebar">About us</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
</div>
-->
<!--
<div class="sidebar-box ftco-animate">
<h3 class="heading-sidebar">Services</h3>
<ul class="categories">
<li><a href="#">Architecture <span>(12)</span></a></li>
<li><a href="#">Construction <span>(22)</span></a></li>
<li><a href="#">Renovation <span>(37)</span></a></li>
<li><a href="#">Interior &amp; Exterior <span>(42)</span></a></li>
<li><a href="#">Chemical Research <span>(42)</span></a></li>
<li><a href="#">Petrolium &amp; Gas <span>(42)</span></a></li>
</ul>
</div>
-->
 @php $blogs = \App\Post::all()->take(20);  @endphp
<div class="sidebar-box ftco-animate">
<h3 class="heading-sidebar">Recent Blog</h3>
@foreach($blogs as $blog)
<div class="block-21 mb-4 d-flex">
<a class="blog-img mr-4" style="background-image:url({{asset('uploads/post/'.$blog->featured_image)}})"></a>
<div class="text">
<h3 class="heading"><a href="{{route("single-blog",$blog->slug)}}">{{$blog->title}}</a></h3>
<div class="meta">
<!--
<div><a href="#"><span class="icon-calendar"></span> Sept. 06, 2020</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>-->
</div>
</div>
</div>
 @endforeach
                           

</div>
<!--
<div class="sidebar-box ftco-animate">
<h3 class="heading-sidebar">Tag Cloud</h3>
<div class="tagcloud">
@foreach ($blog->tags as $tag)
<a href="{{route('tag-blogs',$tag->slug)}}" class="tag-cloud-link">{{$tag->name}}</a>
@endforeach
</div>
</div>
-->
</div>
</div>
</div>
</section> 


<script src="../newtemplate/js/jquery.min.js"></script>
<script src="../newtemplate/js/jquery-migrate.js"></script><script>eval(mod_pagespeed_Udcyhb9c2D);</script>
<script>eval(mod_pagespeed_DFAGfkuvS2);</script>
<script>eval(mod_pagespeed_M3P0bw$3eF);</script>
<script src="../newtemplate/js/jquery.easing.js"></script><script>eval(mod_pagespeed_AxF3aNNdP8);</script>
<script>eval(mod_pagespeed_WSJkyIcJ0Y);</script>
<script>eval(mod_pagespeed_ZfhpzvtydJ);</script>
<script>eval(mod_pagespeed_GUluxpY0vO);</script>
<script src="../newtemplate/js/jquery.magnifies.js"></script><script>eval(mod_pagespeed_c$OxnWiaz5);</script>
<script>eval(mod_pagespeed_PHXrUG1pI_);</script>
<script>eval(mod_pagespeed_nFFJ_JbqfP);</script>
<script>eval(mod_pagespeed_1F8Ofbwzlo);</script>
<script>eval(mod_pagespeed_MiF2CyD9s2);</script>



<script src='../newtemplate/wp-content/plugins/before-after-image-comparison-slider-for-elementor/assets/js/jquery.event.move8a54.js?ver=1.0.0' id='wb-elementor-before-after-slider-event-move-js'></script>

<script src='../newtemplate/wp-content/plugins/before-after-image-comparison-slider-for-elementor/assets/js/jquery.twentytwenty8a54.js?ver=1.0.0' id='wb-elementor-before-after-slider-library-js'></script>
<script src='../newtemplate/wp-content/plugins/before-after-image-comparison-slider-for-elementor/assets/js/main8a54.js?ver=1.0.0' id='wb-elementor-before-after-slider-main-js'></script>
<script id='8f3bd8296-js-extra'>
var localize = {"ajaxurl":''};
</script>
<script src='../newtemplate/wp-content/uploads/essential-addons-elementor/734e5f942.minb0eb.js?ver=1635091632' id='8f3bd8296-js'></script>
<script id='astra-addon-js-js-extra'>
var astraAddon = {"sticky_active":""};
</script>


<script src='../newtemplate/wp-content/plugins/elementor/assets/js/webpack.runtime.min9bf7.js?ver=3.4.6' id='elementor-webpack-runtime-js'></script>
<script src='../newtemplate/wp-content/plugins/elementor/assets/js/frontend-modules.min9bf7.js?ver=3.4.6' id='elementor-frontend-modules-js'></script>
<script id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":""};
</script>
<script src='../newtemplate/wp-content/plugins/elementor-pro/assets/js/frontend.minccfb.js?ver=3.4.2' id='elementor-pro-frontend-js'></script>

<script src='../newtemplate/wp-content/plugins/elementor/assets/lib/dialog/dialog.mina288.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.4.6","is_static":false,"experimentalFeatures":{"e_import_export":true,"landing-pages":true,"elements-color-picker":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":""},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","active_breakpoints":["viewport_mobile","viewport_tablet"],"lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1143,"title":"10%20Before%20And%20After%20Kitchen%20Renovations%20%2F%2F%20IK%20Designs%C2%AE%20Toronto","excerpt":"","featuredImage":false}};
</script>
<script src='../newtemplate/wp-content/plugins/elementor/assets/js/frontend.min9bf7.js?ver=3.4.6' id='elementor-frontend-js'></script>


</body>

<!-- Mirrored from 
impressionskitchens.com/before-and-after-kitchen-renovations/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 14:28:57 GMT -->
</html><!-- WP Fastest Cache file was created in 2.8880970478058 seconds, on 24-10-21 12:07:14 -->

@endsection


@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="../newtemplate/js/google-map.js"></script><script>eval(mod_pagespeed_PCAJGgbmNY);</script>
<script>eval(mod_pagespeed_WeC_GqZ9y2);</script>

<script>
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
  var dots = document.getElementsByClassName("dot");
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
}
</script>


@endsection