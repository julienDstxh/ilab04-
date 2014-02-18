var appData;
var signData;


//SIGNUP



$( "#form_signup" ).submit(function( event ) {
    $.ajax({
	url:'signup.php',
	dataType: "json",
	data:$(this).serialize(),
	type:'POST',
	success:function(data){
			
			if ( data.sign_status === 'signup_done' ) {
				signDataLoaded(data);
			} else {
				signDataLoaded(data);
				loadSignData();
				if(signData.err_pass_match === 'true'){
					$(".err_pass_match").show().fadeOut(5000);
			    }
			    if(signData.err_pass_letter === 'true'){
				    $(".err_pass_letter").show().fadeOut(5000);
			    }
				if(signData.err_pass_empty === 'true'){
					$(".err_pass_empty").show().fadeOut(5000);
			    }
				if(signData.err_mail_empty === 'true'){
					$(".err_mail_empty").show().fadeOut(5000);
			    }
				if(signData.err_mail_exist === 'true'){
					$(".err_mail_exist").show().fadeOut(5000);
			    }
				if(signData.err_mail_wrong === 'true'){

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
	url:'login.php',
	dataType: "json",
	data:$(this).serialize(),
	type:'POST',
	success:function(data){
			if ( data.status_login === 'success' ) {
				appDataLoaded(data);
				$('.login_warp').css("top","-100%");
			} else {
				$(".error").show().fadein(5000);
			}
		},
	error:function(data){
			$(".error").show().fadeOut(5000);
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
	    $('.login_warp').css("top","-100%");
	    $('.login_warp').css("-webkit-transition","0s");
    }
    
    
});








