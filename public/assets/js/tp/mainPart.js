var tmplQuestion;
var tmplRep;

$(function (){

var cmptTitre =1;
var cmptQuestion = 0;
var cmptRep =2;

var tmplQuestion = $(".question").clone();
var tmplRep = $(".RepFNone").clone();


$("#boutonAjouterQuestion").on("click",function(){
 cmptTitre++;
 $(".qList").append(tmplQuestion);
 $(".question").attr("id","Q"+cmptTitre);
 $(".BoutonAjtR").attr("id","boutonAjouterReponse"+cmptTitre);
 $(".BoutonAjtR").attr("class","btn-floating btn-large waves-effect waves-light green");
 $("#espace").attr("class","EspaceDispo"+cmptTitre);
 $("#espace").attr("id","");
 $(".titleQuestion").attr("id","tq"+cmptTitre);
 $(".titleQuestion").append(" " + cmptTitre);
 $("#Q"+cmptTitre).attr("class","");
 $("#tq"+cmptTitre).attr("class","");
 cmptRep =0;
 cmptQuestion++ ;
 });


$("#boutonAjouterReponse1").on("click",function(){
	$(".EspaceDispo"+cmptTitre).append(tmplRep);
	$(".RepFNone").attr("class","RepF");
 	cmptRep ++;
 });


//------vues des quiz de partner -----------------
    var quizsPart = new ModelQuizsPart(QUIZSPART);
    var v_quizsPart = new ViewQuizsPart({
        collection: quizsPart
    });

    var dom = v_quizsPart.render();
    $("#quizList").append(dom);
});








