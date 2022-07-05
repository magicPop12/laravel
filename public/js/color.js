$( window ).on( "load", function() {
 var tamaño= window.innerWidth;
 var salto = 0;
 
 if (tamaño> 770 ) {
  salto= 2;
 }else{
  salto = 10;
 }

  var altura = 200;
  var section1 = $("#Conocenos").offset().top;
  var section2 = $("#Carta").offset().top;
  var section3 = $("#Desarrollos").offset().top;
  var section4 = $("#Socios").offset().top;
  var section5 = $("#Inversionistas").offset().top;
  var section6 = $("#Contacto").offset().top;
  var imgCarta = $("#imgCarta").offset().top;
  var imgDesa = $("#imgDesa").offset().top;
  var imgSocio = $("#imgSocio").offset().top;
  var imgInv = $("#imgInv").offset().top;
  var imgCon = $("#imgCon").offset().top;

var cono = document.getElementById('cono');
var carta = document.getElementById('carta');
var cartaEn = document.getElementById('cartaEn');
var desa = document.getElementById('desa');
var socios = document.getElementById('socios');
var inv = document.getElementById('inv');
var cont = document.getElementById('cont');
      const output = document.querySelector("#output");

  $(window).scroll(function () {
        if ($(window).scrollTop() < section1) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop='';
      desaEn.style.color = '';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';
    }
    //Conocenos
    if ($(window).scrollTop() >= section1 -salto) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop=' 5px solid black';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop='';
      desaEn.style.color = '';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';

    }
    if ($(window).scrollTop() >= imgCarta) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop='';
      desaEn.style.color = '';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';
    }
    

//carta
    if ($(window).scrollTop() >= section2 -salto - 10) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='5px solid black';
      desa.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop='';
      desaEn.style.color = '';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';
    }
    if ($(window).scrollTop() >= imgDesa) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop='';
      desaEn.style.color = '';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';
    }
//desarrollos
    if ($(window).scrollTop() >= section3 -10 - salto) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop=' 5px solid black';
      desaEn.style.color = 'black';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';
    }
    if ($(window).scrollTop() >= imgSocio) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop='';
      desaEn.style.color = '';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';
    }
//socios
    if ($(window).scrollTop() >= section4 - salto) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop='';
      desaEn.style.color = '';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='5px solid black';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';
    }
    if ($(window).scrollTop() >= imgInv) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desaEn.style.color = '';
      socios.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop='';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';
    }
    //Inversionistas
    if ($(window).scrollTop() >= section5 -2) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desaEn.style.color = '';
      desa.style.borderTop='';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='5px solid black';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='';
    }
    //contacto
    if ($(window).scrollTop() >= section6 -2) {
      
      cono.style.backgroundColor = '#f8f9fa';
      conoEn.style.color = '';
      cono.style.borderTop='';
      carta.style.backgroundColor = '#f8f9fa';
      cartaEn.style.color = '';
      carta.style.borderTop='';
      desa.style.backgroundColor = '#f8f9fa';
      desa.style.borderTop='';
      desaEn.style.color = '';
      socios.style.backgroundColor = '#f8f9fa';
      sociosEn.style.color = '';
      socios.style.borderTop='';
      inv.style.backgroundColor = '#f8f9fa';
      invEn.style.color = '';
      inv.style.borderTop='';
      cont.style.backgroundColor = '#f8f9fa';
      contEn.style.color = '';
      cont.style.borderTop='5px solid black';
    }
  });


  $(".inicio").click(function () {
    $("html, body").animate({scrollTop: $("#section").offset().top}, 500);
  });

  $(".nosotros").click(function () {
    $("html, body").animate({scrollTop: $("#section2").offset().top}, 500);
  });

  $(".trabajos").click(function () {
    $("html, body").animate({scrollTop: $("#section3").offset().top}, 500);
  });

  $(".contacto").click(function () {
    $("html, body").animate({scrollTop: $("#section4").offset().top}, 500);
  });
});