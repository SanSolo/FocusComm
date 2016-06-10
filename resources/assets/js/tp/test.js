$(function (){

testerlargeur()
$(".Burger").hide();


        $("#leNav").on("click", ".Burger", function(){
            $(".menuLateral").show("slow");
        });

});

function testerlargeur(){
if(Modernizr.mq("(max-width: 610px)")){
        $("#log").hide();
        $("#leNav").attr("class","col s12");
        $(".menuLateral").hide();
        $(".Burger").show("slow");
        $(".Loupe").show("slow");
        $("footer").hide();
    }else {

        $("#log").show();
        $("#leNav").attr("class","col s8");
        $(".Burger").hide("");
        $(".Loupe").hide("");
         $("footer").show();
    }

    setTimeout(testerlargeur, 1000);

}







