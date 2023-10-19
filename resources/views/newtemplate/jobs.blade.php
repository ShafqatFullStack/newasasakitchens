@extends('newtemplate.layout.template')
@extends('newtemplate.layout.normal')




@php $setting =\App\Setting::pluck('value','name')->toArray();

$carrers =\App\Carrer::where('id','=',$id)->get()->toArray();

 @endphp


@section('meta')
		<title>Career | ASASA Kitchen
</title>
		<meta name="description" content="You can start your career with us in Toronto at ASASA Kitchen. You can find all the latest job opportunity">
          <link href="{{ asset('ecommerce/assets/css/jobs.css') }} " rel="stylesheet">                       
    	

<style>
.review-section{display:none}
.job-details p{color:#707070 !important; font-family:Arial,Helvetica,sans-serif  !important; line-height:177% !important;}
	.job-details p span{color:#707070 !important ;
	font-family:Arial,Helvetica,sans-serif  !important; line-height:177% !important;}
	.job-details li span{color:#707070 !important;  font-family:Arial,Helvetica,sans-serif  !important;line-height:177% !important; }
</style>

@endsection
@section('main-section')


    <header style='margin-top:4%;'>
        
                <div class='page-header'>
            <div class='container'>
                <h1 class="brand-text" style="color:#f5b315">
                     
                                                                              ASASA  Kitchen
																			  </h1>
                         </div>
        </div>
    </header>

  <main> 
 @if(isset($carrers[0]['title']))             

<div class='job-header'>
    <div class='container'>
                    <h1>{{ $carrers[0]['title'] }}</h1>
            <!--<ul class='list-inline job-attributes'>
                                    <li title="Location">
                        <i class='fa fa-map-marker'></i>Vaughn, ON, Canada                    </li>
                                <li id='resumator-job-employment' title="Type">
                    <i class='fa fa-clock-o'></i>Full Time                </li>
                                <li id='resumator-job-experience' title="Experience">
                    <i class='fa fa-graduation-cap'></i>Experienced                </li>
            </ul>
            -->
            </div>
</div>
    <div class='page-body job-details'>
        <div class='container'>
            <div class='row'>
                <div class='col col-xs-7 job-description' id="job-description">
                    <div class="description">
					{!! $carrers[0]['content'] !!}
					</div>
                   
                </div>
                <div id="job-application-form-container" class='col col-xs-5 job-application-form'>
                    <div class="mobile resumator-mobile-apply-wrapper">
                        <button type="button" id="resumator-mobile-apply-button" class='btn btn-block'>Apply for Position</button>
                    </div>
                    <div id="resumator-application-form">
                                                                        <div class="resumator-resume-text" id="resumator-resume-upload">
@if(Session::has('success_message'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ Session::get('success_message') }}
                                </div>
                            @endif
    <h3 class="resumator-resume-text" id="resumator-resumes-title">
        Apply for this position    </h3>

    <div class="required-help-text">Required<i class="asterisk">*</i></div>

    @if (count($errors) > 0)
                <div class="alert alert-danger">
                     
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
 
    <form action="{{ route('job-form') }}" method="POST" data-test="form_submit_new_resume" id="form_submit_new_resume" enctype="multipart/form-data">

	@csrf
 <input type='hidden' name='post' value="{{ $carrers[0]['title'] }}" class='form-control'/>
        <div class='job-form-fields'>
            <div class='form-group'>
                <label id='resumator-firstname-label' for='resumator-firstname-value' class='control-label'>First Name<i class="asterisk">*</i></label>
                                <input type='text' id='resumator-firstname-value' name='firstname' value='' class='form-control'/>
            </div>

            <div class='form-group'>
                <label id='resumator-lastname-label' for='resumator-lastname-value' class='control-label'>Last Name<i class="asterisk"></i></label>
                                <input type='text' id='resumator-lastname-value' name='lastname' value='' class='form-control'/>
            </div>

            <div class='form-group'>
                <label id='resumator-email-label' for='resumator-email-value' class='control-label'>Email Address<i class="asterisk">*</i></label>
                                <input type='email' id='resumator-email-value' name='email' value='' class='form-control'/>
            </div>

            <div class='form-group'>
                <label id='resumator-phone-label' for='resumator-phone-value' class='control-label'>Phone<i class="asterisk">*</i></label>
                                <input type="tel" id="resumator-phone-value" name="phone" maxlength="50" class="form-control" value="">
            </div>

                            <div class="form-group" id="resumator-address">
                    <label id='resumator-address-label' for='resumator-address-value' class='control-label'>Address</label>
                                        <div class="resumator-input" id="resumator-address-field">
                        <input type="text" id="resumator-address-value" name="address" maxlength="255" class="form-control" value="" placeholder="Address">
                        
                    </div>

                </div>
  <div class="form-group" id="resumator-address">
<div class="row">
                            <div class="col col-xs-5">
                                <input type="text" id='resumator-city-value' name="city" maxlength="255" class="form-control" value="" placeholder="City">
                            </div>
                            <div class="col col-xs-4">
                                <input type="text" id='state' name="state" maxlength="50" class="form-control" value="" placeholder="State/Province">
                            </div>
                            <div class="col col-xs-3">
                                <input type="text" id='resumator-postal-value' name="postal" maxlength="50" class="form-control" value="" placeholder="Postal">
                            </div>
                        </div>
                        </div>
            
                        <div id="resumator-resume" class='form-group'>
                                   
                                <div id="resume" class="form-group none">
                    <i>We've received your resume. Click <a href="#" id="resumator-two-stage-change-resume">here</a> to update it.</i>
                </div>
                                <div id="resumator-resume-options" class="resumator-resume-text">
                    <a id="resumator-choose-upload" class="resumator-resume-action" href="javascript:void(0)" onclick="resumator()">Attach resume</a>
                    
                </div>
                <div id="resumator-resume-upload-wrapper" class="none">
                    <div class="resumator-resume-text">
                        Attach resume as .pdf, .doc, .docx, .odt, .txt, or .rtf (limit 5MB)
                    </div>
                    <div class="resumator-input" id="resumator-resume-field">
                        
						<input type="file"  class="" id="resumator-resume-value" name="Resume">                    </div>
                </div>
                <div id="resumator-resume-paste-wrapper"  class="resumator-resume-text none">
                    <div class="resumator-resume-text">
                        <p>
                            Paste your resume here or
                            <a id="resumator-resume-switch-upload" class="resumator-resume-action" href="#">Attach resume file</a>
                        </p>
                    </div>
                    <div class="resumator-input" id="resumator-resumetext-field">
                        <textarea name="resumator-resumetext-value" id="resumator-resumetext-value" class="form-control resumator-field" rows='5'></textarea>
                    </div>
                </div>
            </div>
            
            <textarea  name="resumator-xml-value" id="resumator-xml-value" class="none"></textarea>
            
           
	
                <input type="hidden" id="resumator-detect-mobile" name="resumator-detect-mobile">

                
                <div id="resumator-submit" class="form-group">
                    <button type="submit" id="resumator-submit-resume" style="background:#f5b315" class="btn">Submit Application</button>
                </div>
                    </div>

        <input type="hidden" name="linkedin-profile" id="input-linkedin-profile">
    </form>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</main>
@else

   <div class='page-body job-details'>
        <div class='container'>
            <div class='row'>
                <div class='col col-xs-7 job-description' id="job-description">
                    <div class="description">
		<p>		
Hiring for this position has been put on hold at this time
</p>
<p>	
<a href="{{ route('career')}}">Click here</a> to view more opportunities at ASASA Kitchen.

</p>	

					</div>
                   
                </div>
				</div></div></div>

 

@endif	
    

@endsection

<script>
function resumator(){
	// alert()
	document.getElementById("resumator-resume-upload-wrapper").classList.remove("none"); 
}
// $('#resumator-choose-upload').click(function(){
	// alert();
// })
</script>