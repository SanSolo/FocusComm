$(function (){

	console.log("test");

$(".cross").hide("");
$(".bigDiv").hide("");
$(".menuMobile").hide("");
$(".rechercheMobile").hide("");

$(".burger").on("click",function(){
	console.log("j'aime la pizza");
	$("#search").hide();
	$(".card-action").hide();
	$(".bigDiv").show("");
	$(".menuMobile").hide("");
	$(".rechercheMobile").hide("");
	$(".menuMobile").fadeIn("slow");
	$(".burger").hide("");
	$(".cross").fadeIn("slow");

});

$(".loupe").on("click",function(){
	console.log("j'aime la pizza");
	$(".bigDiv").show("");
	$(".card-action").hide();
	$(".menuMobile").hide("");
	$(".rechercheMobile").hide("");
	$(".rechercheMobile").fadeIn("slow");
	$(".loupe").hide("");

});

$(".cross").on("click",function(){
	console.log("j'aime plus la pizza");
	$(".card-action").show();
	$(".bigDiv").hide("");
	$(".menuMobile").hide("");
	$(".rechercheMobile").hide("");
	$(".cross").hide("");
	$(".burger").fadeIn("slow");

});

$(".bigDiv").on("click",function(){
	console.log("j'aime plus la pizza");
	$(".bigDiv").hide("");
	$(".card-action").show();
	$(".menuMobile").hide("");
	$(".rechercheMobile").hide("");
	$(".cross").hide("");
	$(".burger").fadeIn("slow");
	$(".loupe").fadeIn("slow");

});

testLargeur();


});

function testLargeur (){

if (window.matchMedia("(min-width: 600px)").matches) {
  /* La largeur minimum de l'affichage est 600 px inclus */
} else {
  /* L'affichage est inférieur à 600px de large */
  $(".page-footer").hide();
  $(".loggEtAutre").hide();


}


setTimeout(testLargeur,1000);

};