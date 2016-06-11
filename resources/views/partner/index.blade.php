@extends('layouts.masterPartner')
@section('title', 'Partner')

@section('content')
<main class="main">

<section id="introPartner">
<h3>Bienvenue sur la plateforme partenaire de ciao.ch</h3>
</section>

<section id ="loginPlateForme" class="row">
    <form>
        <div id="nomUtilisateur" class="loginPlateForm row">
            <label class="labelLoginAdm col s12 m6" name="nomUtilisateurLabel">Nom d'utilisateur ou e-mail</label>
            <input class ="inputLoginAdm col s12 m6" name="nomUtilisateurInput" type="text" placeholder="nom d'utilisateur ou e-mail">
        </div>
        <div id ="mdt" class="loginPlateForm wor">
            <label class="labelLoginAdm col s12 m6" name="mdtLabel">Mot de passe</label>
            <input class ="inputLoginAdm col s12 m6" name="mdtInput" type="text" placeholder="mot de passe"> <br>
        </div>
        <a class="waves-effect waves-light btn" id="bouton_connection">Connexion</a>
    </form>
    <a href="#" id ="mdtOublie">Mot de passe oublié ?</a>
</section>

<section id="accueilEspacePartner">

    <h3>à vous de choisir quoi faire</h3>

<div class=" row">
        <div class="ledivBlock col s12 m12 l6">
            <a href="#">
            <article id="menuPartner" class="">
                <div class="boitePartner">
                    <h1 id="titreMenuPartner" class="pourleQuiz"> Quiz</h1>
                </div>
            </article>
            </a>
        </div>

        <div class="ledivBlock col s12 m12 l6">
            <a href="#">
            <article id="menuPartner" class="">
                <div class="boitePartner">
                    <h1 id="titreMenuPartner">Compte</h1>
                </div>
            </article>
            </a>
        </div>

</div>

</section>


<section id="listQuiz">

      <a class="btn-floating btn-large waves-effect waves-light green" id="boutonAjouterQuiz"><i class="material-icons">add</i></a>
      <div id="quizList">

      </div>

      <a class="waves-effect waves-light btn BtnBackHome"><i class="material-icons left">call_missed</i>Back Home</a>

</section>

<section id="partnerCompte">


</section>

</main>
@endsection