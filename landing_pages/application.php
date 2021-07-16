<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MT5G8QZ');</script>
    <!-- End Google Tag Manager -->
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SRM - Application</title>
	<link rel="icon" href="images/favicon.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/srm-theme.css">
	<link rel="stylesheet" type="text/css" href="css/srm-responsive-theme.css">
    <link rel="icon" href="https://socialresponsemarketing.com/wp-content/uploads/2020/02/cropped-srm-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://socialresponsemarketing.com/wp-content/uploads/2020/02/cropped-srm-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://socialresponsemarketing.com/wp-content/uploads/2020/02/cropped-srm-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="https://socialresponsemarketing.com/wp-content/uploads/2020/02/cropped-srm-favicon-270x270.png" />
      

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/srm-theme.js"></script> 

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/8186697.js"></script>
    <!-- End of HubSpot Embed Code -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MT5G8QZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="topbar">
        <div class="container">
            <nav class="navbar navbar-light bg-light">
              <a class="navbar-brand" href="#">
                <img src="images/logo.png" height="50" class="d-inline-block align-top" alt="Srm-Logo">
              </a>
                <Button class="btn btn-green">Contact Us</Button>
            </nav>
        </div>    
    </div>
   <form class="form" id="step2" method="post" action="./schedule-event">   
    <div class="bannerMain">
        <div class="shapes"></div>
        <div class="container">
            <div class="contentBox">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                         <div class="leftContent">
                            <h1><span>FINAL STEP</span> Tell Us A Little More  About Your Business  So We Can Help You With Your Ads</h1>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="RightContent">
                            <div class="cochingSectionGoals">
                                <div class="title">What’s your most important goal with Our Free coaching session?</div>

                                <input type="text" name="email" class="form-control emailOpacity" id="email" value="<?php echo $_SESSION['email'];?>"/>
                                <input type="text" name="phoneNumber" class="form-control emailOpacity" id="phoneNumber" value="<?php echo $_SESSION['phone'];?>"/>
                                    <div class="radio-item">
                                        <input type="radio" id="coaching" name="goal" value="To get started with YouTube ads" checked />
                                        <label for="coaching">To get started with YouTube ads</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="coaching1" name="goal" value="To improve my video ad creative">
                                        <label for="coaching1">To improve my video ad creative</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="coaching2" name="goal" value="To improve the ROI on my YouTube campaigns">
                                        <label for="coaching2">To improve the ROI on my YouTube campaigns</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="coaching3" name="goal" value="To scale my YouTube campaigns to produce more sales">
                                        <label for="coaching3">To scale my YouTube campaigns to produce more sales</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="coaching4" name="goal" value="To learn how to improve my YouTube ad targeting">
                                        <label for="coaching4">To learn how to improve my YouTube ad targeting</label>
                                    </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="applicationForm">
        <div class="container">
            <div class="applications__FormPanel">       
                    <div class="input_Form">
                        <label for="text1">What's the website you’re advertising? Give us your main YouTube ad landing page if you’ve already started your campaigns. If you haven’t started with YouTube ads yet, give us the page on your website that’s most similar to what you want to advertise.</label>
                        <div class="input_field">
                                                       
                            <input type="text" id="text1" name="youtube_ad_landing_page_address" class="form-control" required/>
                        </div> 
                        <span class="youtube_ad_landing_page_address_error" style="display: none">Please submit a valid URL.</span>
                    </div>
                    <div class="input_Form">
                        <label for="text2">If you’re already advertising on YouTube, give us the link to the video you’ve spent the most on advertising over the past 30 days so we can give you feedback.</label>
                        <div class="input_field">
                            <input type="text" id="text2" name="link_to_the_video" class="form-control" required />
                        </div> 
                        <span class="link_to_the_video_error" style="display: none">Please submit a valid URL.</span>
                    </div>
                    <div class="input_Form">
                        <label for="text3">How much have you spent on YouTube ads specifically in the past 30 days?</label>
                        <div class="input_field">
                            <input type="text" id="text3" name="youtube_ads_past_30_days" class="form-control" required />
                        </div> 
                         <span class="youtube_ads_past_30_days_error" style=" display: none">Please input valid number.</span>
                    </div>
                    <div class="input_Form">
                        <label for="text4">How much have you spent on ALL online advertising in the past 30 days?</label>
                        <div class="input_field">
                            <input type="text" id="text4" name="youtube_ads_spent" class="form-control" required />
                        </div> 
                         <span class="youtube_ads_spent_error" style=" display: none">Please input valid number.</span>
                    </div>
                    <div class="input_Form">
                        <label for="text5">What is the best number to reach you at?</label>
                        <div class="input_field">
                            <input type="text" id="text5" name="alternate_number" class="form-control" required />
                        </div> 
                        <span class="alternate_number_error" style=" display: none">Please submit a valid phone.</span>
                    </div>
                    <div class="input_Form">
                        <label for="text6">If you get good results from this free session, would you be willing to invest in regular YouTube coaching sessions with an expert on our team?</label>
                        <div class="input_field">
                            <input type="text" id="text6" name="invest_in_regular_youtube_coaching_sessions" class="form-control" required />
                        </div>
                        <span class="invest_in_regular_youtube_coaching_sessions_error" style="display: none">Please enter a valid answer.</span>
                    </div>
                    <div class="input_Form-action">
                         <input type="submit" id="submit2" name="submit2" class="applicationBtn btn-green" value="SUBMIT APPLICATION"/>
                            
                    </div>
                
            </div>
        </div>
    </div>
 </form>   
  
    

    
   <div class="footerPanel mt-5">
       <div class="container">
           <div class="footer__content">
               <div class="footer__left">
                   <img src="images/logo.png"  class="lazy" height="50" class="d-inline-block align-top" alt="Srm-Logo">
               </div>
               <div class="footer__right">
                   <ul>
                        <li>
                            <a href="https://socialresponsemarketing.com/15-steps/" title="The Book">The Book  </a>
                        </li>
                        <li>
                            <a href="https://socialresponsemarketing.com/#meet-Dan" title="About Dan">About Dan</a>
                        </li>
                        <li>
                            <a href="https://socialresponsemarketing.com/#ourCareers" title="Careers">Careers</a>
                        </li>
                        <li>
                            <a href="https://socialresponsemarketing.com/#Work-with-us" title="Work With Us">Work With Us</a>
                        </li>
                    </ul>
               </div>
                    
           </div>
       </div>
    </div>
    <div class="footerCopy">
            Copyright  &copy; 2020 – Daniel Rose Website
    </div>


</body>
<script type="text/javascript">
    var temp=JSON.parse(localStorage.getItem("Data"));
    console.log(temp[0]);

</script>
</html>