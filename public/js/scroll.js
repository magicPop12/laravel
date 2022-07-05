function mover(element) {
	 var tamaño= window.innerWidth;
	 //Que tanto lo vas a mover en relacion del menu, tiene que estar implementada
	 //en el html y no debes de usar href "anchors"
	 var headerOffset = 360;
 if(tamaño<500){
  headerOffset = 360;
  if (element== 'Desarrollos') {
    
    headerOffset = headerOffset + 10;
  }
 }else{
 headerOffset = 0;
 }

 
 const textElement = document.getElementById(element);
  var elementPosition = textElement.getBoundingClientRect().top;
  var offsetPosition = elementPosition + window.pageYOffset - headerOffset;
  
  window.scrollTo({
         top: offsetPosition,
         behavior: "smooth"
    });
// textElement.scrollIntoView({block: "nearest"});
//Colapsa la navbar
$('#navbarCollapse').collapse('hide');
	 var delayInMilliseconds = 100; //1 second

/*setTimeout(function() {
	window.scrollBy(0, -movil);
  
}, delayInMilliseconds);*/
}
function mover2(){
	 var tamaño= window.innerWidth;
 if(tamaño<500){
  movil=300;
 }else{
  movil=0;
 }
 window.scrollBy(0, -movil);
	$('#navbarCollapse').collapse('hide');
}
function mover3(){
		 var tamaño= window.innerWidth;
 if(tamaño<500){
  movil=300;
 }else{
  movil=0;
 }
 window.scrollBy(0, -movil);
}