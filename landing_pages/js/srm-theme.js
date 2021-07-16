$(document).ready(function(){
 $( ".menu-btn" ).click(function() {
  $( ".body-panel" ).toggleClass("full-box");
});
});


function checkRegex(val, regex){
        var regex = new RegExp(regex);
        if (!regex.test(val)) {
            event.preventDefault();
            return false;
        }
    return true;
}


$(document).ready(function () {
    $('#step1 input[name="fullName"]').keyup((e) => {
        var check =  checkRegex(e.currentTarget.value, "^[a-zA-Z ]+$");
        if(!check)
            $('.name_error').css('display', 'block');
        else
            $('.name_error').css('display', 'none');    
    });
    $('#step1 input[name="email"]').keyup((e) => {
        var regex = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
        if (regex.test(e.currentTarget.value))
             $('.email_error').css('display', 'none');  
        else 
            $('.email_error').css('display', 'block');

    });
     $('#step1 input[name="phoneNumber"]').keyup((e) => {

        
        var reg = /^\d+$/;
        var regex = /^\+\d+$/;
        if (reg.test(e.currentTarget.value) || regex.test(e.currentTarget.value)) 
             $('.phone_error').css('display', 'none');  
        else 
            $('.phone_error').css('display', 'block');

    }); 
 $('#step1 input[name="country"]').keyup((e) => {

       
        var reg = /^\s+$/;
      
        if (reg.test(e.currentTarget.value)) 
             $('.country_error').css('display', 'block');  
        else 
            $('.country_error').css('display', 'none');

    }); 

       
    $('#step1').submit((e) => {
        if($('.name_error, .email_error, .phone_error,.country_error').is(':visible')){
            return false;
        }
        else{
   
           
            window.location("./application.php");
          
        }
    });
    
    
    
    
     $('#step2 input[name="youtube_ad_landing_page_address"]').keyup((e) => {
        
        var regex = /[^\s]+/g;
        if (regex.test(e.currentTarget.value)) 
             $('.youtube_ad_landing_page_address_error').css('display', 'none');  
        else 
            $('.youtube_ad_landing_page_address_error').css('display', 'block');
 
    });
    
    $('#step2 input[name="link_to_the_video"]').keyup((e) => {
        var regex1 = /[^\s]+/g;
        if (regex1.test(e.currentTarget.value)) 
             $('.link_to_the_video_error').css('display', 'none');  
        else 
            $('.link_to_the_videol_error').css('display', 'block');

    });
    
     $('#step2 input[name="youtube_ads_past_30_days"]').keyup((e) => {
        var regex = /[^\s]+/g;
        if (regex.test(e.currentTarget.value)) 
             $('.youtube_ads_past_30_days_error').css('display', 'none');  
        else 
            $('.youtube_ads_past_30_days_error').css('display', 'block');

    });
       $('#step2 input[name="youtube_ads_spent"]').keyup((e) => {
        var regex = /[^\s]+/g;
        if (regex.test(e.currentTarget.value)) 
             $('.youtube_ads_spent_error').css('display', 'none');  
        else 
            $('.youtube_ads_spent_error').css('display', 'block');

    });
       $('#step2 input[name="alternate_number"]').keyup((e) => {
        var regex = /^\d+$/;
        if (regex.test(e.currentTarget.value)) 
             $('.alternate_number_error').css('display', 'none');  
        else 
            $('.alternate_number_error').css('display', 'block');

    });
       $('#step2 input[name="invest_in_regular_youtube_coaching_sessions"]').keyup((e) => {
        var regex = /^[a-zA-Z ]+$/;
        if (regex.test(e.currentTarget.value)) 
             $('.invest_in_regular_youtube_coaching_sessions_error').css('display', 'none');  
        else 
            $('.invest_in_regular_youtube_coaching_sessions_error').css('display', 'block');

    });
    $('#step2').submit((e) => {
        if( $('input[name="goal"]:checked').val() && $('.youtube_ad_landing_page_address_error, .link_to_the_video_error, .youtube_ads_past_30_days_error,.youtube_ads_spent_error,.alternate_number_error,.invest_in_regular_youtube_coaching_sessions_error').is(':visible')){
            return false;
        }
        else{


            window.location = "./schedule-event.php";
          
        }
    });
    
});

