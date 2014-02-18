var appData;
var signData;



//APPEAR SIGNUP



$(document).ready(function(){
  $(".signup_warp h1").click(function(){
    if ($(".signup_warp").hasClass('on')) {
            $(".signup_warp").removeClass('on').addClass('off');
            $('.signup_warp').css("top","calc(100% - 60px)");
             
        } else{
            $(".signup_warp").addClass('on').removeClass('off');
            $('.signup_warp').css("top","calc(100% - 400px)");
        }
  });
});



// HIDER ERROR

$(".errer_login_wrap span button").click(function(){

	$('.errer_login_wrap').css("display","none");
});

$(".errer_signup_wrap span button").click(function(){

	$('.errer_signup_wrap').css("display","none");
});

$(".signup_ok span button").click(function(){
	$('.signup_warp').css("top","calc(100% - 60px)");
	$('.signup_ok').css("display","none");
});

//SIGNUP

$( "#form_signup" ).submit(function( event ) {
    $.ajax({
	url:'login/request/signup_request.php',
	dataType: "json",
	data:$(this).serialize(),
	type:'POST',
	success:function(data){
			
			if ( data.sign_status === 'signup_done' ) {
				signDataLoaded(data);
				$('.signup_ok').css("display","block");
				
			} else {
				signDataLoaded(data);
				loadSignData();
				$('.errer_signup_wrap').css("display","block");
				
				if(signData.err_pass_match === 'true'){
					$(".err_pass_match").show().fadeIn(5000);
			    }
			    
			    else{
				    $(".err_pass_match").css("display","none");
			    }
			    
			    if(signData.err_pass_letter === 'true'){
				    $(".err_pass_letter").show().fadeIn(5000);
			    }
			    else{
				    $(".err_pass_letter").css("display","none");
			    }
			    
				if(signData.err_pass_empty === 'true'){
					$(".err_pass_empty").show().fadeIn(5000);
			    }
			    else{
				    $(".err_pass_empty").css("display","none");
			    }
				if(signData.err_mail_empty === 'true'){
					$(".err_mail_empty").show().fadeIn(5000);
			    }
			    else{
				    $(".err_mail_empty").css("display","none");
			    }
				if(signData.err_mail_exist === 'true'){
					$(".err_mail_exist").show().fadeIn(5000);
			    }
			    else{
				    $(".err_mail_exist").css("display","none");
			    }
				if(signData.err_mail_wrong === 'true'){
					$(".err_mail_wrong").show().fadeIn(5000);
			    }
			    else{
				    $(".err_mail_wrong").css("display","none");
			    }
				
			}
			
		},
	error:function(data){
		alert('fail');
		
		}
	});
	event.preventDefault(); 	     
});



function saveSignData() {
	localStorage.signData = JSON.stringify(signData);
}


function loadSignData(){
	signData = JSON.parse(localStorage.signData);
}
	
function signDataLoaded( data ) {
	signData = data;
	saveSignData();

}




//LOGIN

$( "#form_login" ).submit(function( event ) {
    $.ajax({
	url:'login/request/login_request.php',
	dataType: "json",
	data:$(this).serialize(),
	type:'POST',
	success:function(data){
			if ( data.status_login === 'success' ) {
				appDataLoaded(data);
				$('.session_container').css("left","-100%");
				$('.signup_warp').css("left","-100%");
			} else {
				$(".errer_login_wrap").show().fadeIn(5000);
			}
		},
	error:function(data){
			$(".error_login").show().fadeOut(5000);
		}
	});
	event.preventDefault(); 	     
});
	
function saveLocalData() {
	localStorage.appData = JSON.stringify(appData);
}



function loadLocaData(){
	appData = JSON.parse(localStorage.appData);
}
	
function appDataLoaded( data ) {
	appData = data;
	saveLocalData();
	/*alert(appData.dribble);*/
			
	/*
var mail = data.mail;
	var dribble = data.dribble;
	var alistapart = data.alistapart;
	var layervault = data.layervault;
	var behance = data.behance;
	var hackernews = data.hackernews;
	var favorites = data.favorites;
	var read = data.read;
*/
	/*
localStorage.setItem('mail', mail);
	localStorage.setItem('dribble', dribble);
	localStorage.setItem('alistapart', alistapart);
	localStorage.setItem('layervault', layervault);
	localStorage.setItem('behance', behance);
	localStorage.setItem('hackernews', hackernews);
	localStorage.setItem('favorites', favorites);
	localStorage.setItem('read', read);
	localStorage.setItem('status_login', status_login);
*/
	//alert(statut_login);	
}

$( document ).ready(function() {
    
    loadLocaData();
    
    if(appData.status_login === 'success'){
	    $('.login_warp').css("-webkit-transition","0s");
	    $('.session_container').css("display","none");
    }
    
});



//favoris










