$(function (){


//------vues des categories-----------------

    var categories = new ModelCategories(CATEGORIES);

    var v_categories = new ViewCategories({
        collection: categories
    });
    //$("#categories").append(v_categories.render());
    $("section .contents").hide()
    var dom = v_categories.render();
    $("#categories").append(dom);

<<<<<<< HEAD
=======
/*****************************************************
Actualites
******************************************************/

    var actualites = new ModelActualites(ACTUALITES);

    var v_actualites = new ViewActualites({
        collection: actualites
    });
    var domNews = v_actualites.render();
    $("#news").append(domNews);

    //console.log(actualites);

/*****************************************************
Categorie Liste menu
******************************************************/
    var v_categoriesListe = new ViewCategories({
        collection: categories
    });

    var categorieListe = v_categoriesListe.renderListCategorie();
    $("#CategorieListe").append(categorieListe);

    $("#CategorieListe").hide();


//------vues du contenu-------------------------------------------------------

    var stress = new ModelContenus(STRESS);
>>>>>>> parent of ebe2e08... denis



// // //------vues du contenu-------------------------------------------------------

        $('.lienCat').on('click', function() {

            $("#contenu").empty();

            //$("#categories").hide();
             var id = $(this).attr('id');

             var contenu = new ModelContenus(window[id]);
            var v_contenu= new ViewContenus({
                collection: contenu
            });
            var dom = v_contenu.render();
            $("#contenu").append(dom);

//------affichage navigation latérale qui ne marche pas-------------------------------------------------------

            var v_categoriesListe = new ViewCategories({
                collection: categories
            });

            var categorieListe = v_categoriesListe.renderListCategorie();
            $("#CategorieListe").append(categorieListe);


            switchSection("#contenu");

        });



// //------gestion historique---------
        $(window).on("popstate", function(e) {
                $("#categories").hide();
                $(".content").hide();
                $("#news").hide()
                var section = location.hash;
                if ($(section).length == 0) {
                    section = "#categories";
                }
                $(section).show();
            });

        $(window).trigger('popstate');




//------affichage news---------

    var actualites = new ModelActualites(ACTUALITES);

    var v_actualites = new ViewActualites({
        collection: actualites
    });
    var domNews = v_actualites.render();
    $("#news").append(domNews);




//----------------------QUIZ--------------------------------------------------------------

    $("#quiz").hide();

<<<<<<< HEAD
    $('#quiz').on('click', function() {
            $("#quiz").show();
        });


//------affichage categorie quiz------
    var categoriesQuiz = new ModelCategories(CATEGORIES);

    var v_categoriesQuiz = new ViewCategories({
        collection: categoriesQuiz
    });
    //$("#categories").append(v_categories.render());
    // $("section .contents").hide()
    var dom = v_categoriesQuiz.renderCategorieQuiz();
    $("#categoriesQuiz").append(dom);



    //-------affichage contenu des quiz

});


//------gestion historique---------

function switchSection(section) {
    history.pushState(null, null, section);
=======
//------------------------------------------------------------------------------------


$(".content").on("click", switchSection(location.hash));



    $(window).on("popstate", function(e) {
        $("section").hide();
        var section = location.hash;
        if ($(section).length == 0) {
            section = "#categories";
        }
        $(section).show();
    });
>>>>>>> parent of ebe2e08... denis
    $(window).trigger('popstate');
}


<<<<<<< HEAD
=======
    if (location.hash !=('#' || "#categories")) {
        $("#CategorieListe").show();
    };
>>>>>>> parent of ebe2e08... denis




