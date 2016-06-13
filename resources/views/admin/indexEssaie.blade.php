@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
<main class="main">

    <section id ="loginPlateForme" class="row">
        <form>
            <div id="nomUtilisateur" class="loginPlateForm row">
                <label class="labelLoginAdm col s12 m6" name="nomUtilisateurLabel">Nom d'utilisateur ou e-mail</label>
                <input class ="inputLoginAdm col s12 m6" name="nomUtilisateurInput" type="text" placeholder="nom d'utilisateur ou e-mail">
            </div>
            <div id ="mdt" class="loginPlateForm row">
                <label class="labelLoginAdm col s12 m6" name="mdtLabel">Mot de passe</label>
                <input class ="inputLoginAdm col s12 m6" name="mdtInput" type="password" placeholder="mot de passe"> <br>
            </div>
            <a id="connexionAdm"class="waves-effect waves-light btn">Connexion</a>
        </form>
        <a href="#" id ="mdtOublie">Mot de passe oublié ?</a>
    </section>

    <section id="accueilEspaceAdm" class="row">
        <div class= "col m4" id="contenuDiv">
            <article class="categoriesAdmList categorieAdm" id="contenu">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Contenu</h1>
                </div>
            </article>
        </div>
        <div class="col m4" id="actualiteDiv">
            <article class="categoriesAdmList categorieAdm" id="actualite">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Actualité</h1>
                </div>
            </article>
        </div>
        <div class=" col m4" id="quizDiv">
            <article class="categoriesAdmList categorieAdm" id="quiz">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Quiz</h1>
                </div>
            </article>
        </div>
        <div class="c col m4" id="utilisateursDiv">
            <article class="ategoriesAdmList categorieAdm" id="utilisateurs">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Utilisateurs</h1>
                </div>
            </article>
        </div>
        <div class="col m4" id="compteDiv">
            <article class="categoriesAdmList categorieAdm" id="compte">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Compte</h1>
                </div>
            </article>
        </div>
        <div class="col m4" id="autreDiv">
            <article class="categoriesAdmList categorieAdm" id="autre">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Autre</h1>
                </div>
            </article>
        </div>
    </section>


    <section id="actualiteAdm">
        <div id="ajouterActualiteAdm">
            <a class="buttonAdd btn-floating btn-large waves-effect waves-light green">
                <i id="buttonAdd" class="material-icons">add</i>
            </a>
            <i class="material-icons boutonInput waves-effect waves-light">input</i>
        </div>
        <div id="ajouterActualiteAdmForm">
            <form>
                <div id="titre" class="loginPlateForm row">
                    <label id="placeholderTitre" class="labelLoginAdm col s12 m6" name="titreLabel">Titre</label> <br>
                    <input class ="inputLoginAdm col s12 m6" id="titreInput" name="titreInput" type="text" placeholder="titre">
                </div>
                <div class="row">
                    <div id ="mdt" class="loginPlateForm col s12 l6">
                        <label class="labelLoginAdm" name="mdtLabel">Article</label>
                        <textarea id="placeholderArticle" name="mdtInput" type="texta" placeholder="article..."></textarea><br>
                    </div>
                    <div id ="mdt" class="loginPlateForm col s12 l6">
                        <label class="labelLoginAdm" name="mdtLabel">Breve description</label>
                        <textarea id="placeholderDescription" name="mdtInput" type="texta" placeholder="description..."></textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 ls6" id ="progPubli">
                        <input type="checkbox" id="test5" class="ajouterActuFormInput"/>
                        <label class="ajouterActuFormLabel" for="test5">programmer publication</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <input id="dateArticleAAjouter" type="date" class="ajouterActuFormInput ajouterActuFormLabel">
                    </div>
                </div>
                <div class="row">
                    <label class="ajouterActuFormLabel col s12 l3" id ="choixMedia" for="test5">Choisir un média</label>
                    <div id ="choixFile"class="input-field col s12 l3">
                        <input type="file">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l6">
                        <a id="boutonAnnuler" class="waves-effect waves-light btn">Annuler</a>
                    </div>
                    <div class="col s12 l6">
                        <a id="boutonAjouter" class="waves-effect waves-light btn">Terminer</a>
                    </div>
                </div>
            </form>
        </div>

        <div id ="visualisationArticle" class="row">
            <div id="actualiteInfos" class="col s12 m6">
                <h2 id="titreAjouterActu">
                    Ajouter une actualité
                </h2>
                <nav id="breadcrumbs" class="row">
                    <div class="nav-wrapper">
                        <div>
                            <a href="#!" id="listeArticle" class="breadcrumb">Liste articles</a>
                            <a href="#!" id="creation" class="breadcrumb">Création</a>
                            <a href="#!" id="confirmation" class="breadcrumb">Confirmation</a>
                        </div>
                    </div>
                </nav>
                <div class="row">
                    <div class="col s12 l4">
                        <a id="boutonPrecedent" class="waves-effect waves-light btn">Précédent</a>
                    </div>
                    <div class="col s12 l4">
                        <a id="boutonConfirmer" class="waves-effect waves-light btn">Confirmer</a>
                    </div>
                </div>
            </div>
            <div id="articleAVisualise" class="col s12 m6">
                <article>
                    <h1 id="titreVisualisation">Visualisation de l'article</h1>
                    <img src="">
                    <h2>titre</h2>
                    <p>description</p>
                    <p>date</p>
                </article>
            </div>
        </div>
    </section>



    <section id="contenuAdm">
        <i class="material-icons boutonInput waves-effect waves-light">input</i>
        <h2>contenu</h2>
    </section>

    <section id="quizAdm">
        <i class="material-icons boutonInput waves-effect waves-light">input</i>
        <h2>Quiz</h2>
    </section>

    <section id="utilisateursAdm">
        <i class="material-icons boutonInput waves-effect waves-light">input</i>
        <h2>Utilisateurs</h2>
    </section>

    <section id="compteAdm">
        <i class="material-icons boutonInput waves-effect waves-light">input</i>
        <h2>Compte</h2>
    </section>

    <section id="autreAdm">
        <i class="material-icons boutonInput waves-effect waves-light">input</i>
        <h2>Autre</h2>
    </section>
</main>
@endsection