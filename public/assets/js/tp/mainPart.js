$(function (){

	//-----------section et autre cachée de base ------


$("#listQuiz").hide();
$("#accueilEspacePartner").hide();

 $("#bouton_connection").on("click",function(){

 $("#loginPlateForme").hide();
 $("#introPartner").hide();
 $("#accueilEspacePartner").show("slow");
});

 $(".pourleQuiz").on("click",function(){

  $("#accueilEspacePartner").hide();
 $("#listQuiz").show("slow");

 });

$(".BtnBackHome").on("click",function(){

 $("section").hide();
 $("#accueilEspacePartner").show("slow");
 });


//------vues des quiz de partner -----------------
    var quizsPart = new ModelQuizsPart(QUIZSPART);
    var v_quizsPart = new ViewQuizsPart({
        collection: quizsPart
    });

    var dom = v_quizsPart.render();
    $("#quizList").append(dom);
});






