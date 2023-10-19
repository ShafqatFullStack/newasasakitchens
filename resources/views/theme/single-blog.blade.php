@extends("theme.layouts.master")
@php
    $section = \App\Section::findOrFail(1);
    $storedColumns = json_decode($section->content,TRUE);
@endphp
@php $setting =\App\Setting::pluck('value','name')->toArray(); @endphp
@section("meta")
    <title>{{$blog->meta_title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$blog->meta_description}}">
    <meta name="keywords" content="{{$blog->meta_keyword}}">
    <style>
        .widget_top_rated_product li img {
            position: absolute;
            width: 60px;
            height: 30px !important;
            margin-top: 10px;
        }
    </style>
@endsection
@section("content")

<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$blog->title}}</h1>
                <ul class="crumb">
				 <a href="{{route("contact")}}" class="btn-custom btn-fullwidth " style="margin-bottom: 15px;color:black">FREE CONSULTATION</a>

                <li><a href="{{route("home")}}">Home</a></li>
                    <li class="sep">/</li>
                    <li>{{$blog->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-read">
                        <div class="post-content">
                            <div class="post-image">
                                <img src="{{asset('uploads/post/'.$blog->featured_image)}}" alt="" />
                            </div>

                            {{-- <div class="date-box">
                                <div class="day">26</div>
                                <div class="month">FEB</div>
                            </div> --}}

                            <div class="" style="padding-left: 0px;">
                                <h2><a href="#">{{$blog->title}}</a></h2>
                                <div class="justify-content">
                                    {!! $blog->content !!}
                                </div>

                            </div>
                        </div>

                        <div class="post-meta"> <span><i class="fa fa-tag id-color"></i>@foreach ($blog->tags as $tag)
                            <li><a href="{{route("tag-blogs",$tag->slug)}}">{{$tag->name}}</a></li>
                        @endforeach</span> </div>

                        <div class="spacer-single"></div>

                        {{-- <div id="blog-comment">
                    <h3>Comments (5)</h3>

                    <div class="spacer-half"></div>

                    <ol>
                        <li>
                            <div class="avatar">
                                <img src="images/avatar.jpg" alt="" /></div>
                            <div class="comment-info">
                                <span class="c_name">John Smith</span>
                                <span class="c_date id-color">8 August 2018</span>
                                <span class="c_reply"><a href="#">Reply</a></span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="images/avatar.jpg" alt="" /></div>
                                    <div class="comment-info">
                                        <span class="c_name">John Smith</span>
                                        <span class="c_date id-color">8 August 2018</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                                </li>
                            </ol>
                        </li>

                        <li>
                            <div class="avatar">
                                <img src="images/avatar.jpg" alt="" /></div>
                            <div class="comment-info">
                                <span class="c_name">John Smith</span>
                                <span class="c_date id-color">8 August 2018</span>
                                <span class="c_reply"><a href="#">Reply</a></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="images/avatar.jpg" alt="" /></div>
                                    <div class="comment-info">
                                        <span class="c_name">John Smith</span>
                                        <span class="c_date id-color">8 August 2018</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                                </li>
                            </ol>
                        </li>

                        <li>
                            <div class="avatar">
                                <img src="images/avatar.jpg" alt="" /></div>
                            <div class="comment-info">
                                <span class="c_name">John Smith</span>
                                <span class="c_date id-color">8 August 2018</span>
                                <span class="c_reply"><a href="#">Reply</a></span>

                                <div class="clearfix"></div>
                            </div>
                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem   accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt   explicabo.</div>
                        </li>
                    </ol>

                    <div class="spacer-single"></div> --}}

                    {{-- <div id="comment-form-wrapper">
                        <h3>Leave a Comment</h3>
                        <div class="comment_form_holder">
                            <form id="contact_form" name="form1" method="post" action="#">

                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" />

                                <label>Email <span class="req">*</span></label>
                                <input type="text" name="email" id="email" class="form-control" />
                                <div id="error_email" class="error">Please check your email</div>

                                <label>Message <span class="req">*</span></label>
                                <textarea cols="10" rows="10" name="message" id="message" class="form-control"></textarea>
                                <div id="error_message" class="error">Please check your message</div>
                                <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                <div id="mail_failed" class="error">Error, email not sent</div>

                                <p id="btnsubmit">
                                    <input type="submit" id="send" value="Send" class="btn btn-line" /></p>



                            </form>
                        </div>
                    </div>
                </div> --}}

                </div>


            </div>

            <div id="sidebar" class="col-md-4">
                {{--<div class="widget widget-post">
                     <h4>Recent Posts</h4>
                    <div class="small-border"></div>
                    <ul>
                        <li><a href="#">5 Things That Take a Room from Good to Great</a></li>
                        <li><a href="#">Functional and Stylish Wall-to-Wall Shelves</a></li>
                        <li><a href="#">9 Unique and Unusual Ways to Display Your TV</a></li>
                        <li><a href="#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></li>
                        <li><a href="#">How to Make a Huge Impact With Multiples</a></li>
                        <li><a href="#">Our Favorite Home Decor Trends of the Year</a></li>

                    </ul>
                </div> --}}

                <div class="widget widget-text">
                    <h4>About Us</h4>
                    <div class="small-border"></div>
                    @isset($setting['footer_info']){{ $setting['footer_info']}}@endisset
                </div>
                <div class="widget widget_tags">
                    <h4>Tags</h4>
                    <div class="small-border"></div>
                    <ul>
                        @foreach ($tags as $tag)
                        <li><a href="{{route("tag-blogs",$tag->slug)}}">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget widget_top_rated_product">
                    @php $blogs = \App\Post::all()->take(20);  @endphp
                    <h4>Our Blogs</h4>
                    <ul>
                        @foreach($blogs as $blog)
                            <li>
                                <img src="{{asset('uploads/post/'.$blog->featured_image)}}" alt="">
                                <div class="text">
                                    {{$blog->title}}
                                    <div class="price"><a class="id-color" href="{{route("single-blog",$blog->slug)}}">Read More</a></div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
