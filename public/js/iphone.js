function isIOSDevice(){
   return !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
}

$(document).scroll(function() {
	var ios=false;
if(isIOSDevice()){
    ios=true;
}else{
	
}

if (ios) {
	$('#celular').css('background-position', '-100px ' + (1000-$(document).scrollTop()) + 'px');
	 
}
        
    });



$(document).scroll(function() {
				var ios=false;
		if(isIOSDevice()){
		    ios=true;
		}else{
			
		}
	console.log($(document).scrollTop());
	if (ios) {
		 $('#celular1').css('background-position', '0px ' + (4000-$(document).scrollTop()) + 'px');
	}
       
            });



$(document).scroll(function() {
				var ios=false;
		if(isIOSDevice()){
		    ios=true;
		}else{
			
		}
		if (ios) {
			$('#celular2').css('background-position', '0px ' + (5300-$(document).scrollTop()) + 'px');
		}
       
    });