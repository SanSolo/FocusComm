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
            <label class="labelLoginAdm col s12 m6" name="nomUtilisateurLabel" >Nom d'utilisateur ou e-mail</label>
            <input class ="inputLoginAdm col s12 m6" name="nomUtilisateurInput" type="text" placeholder="nom d'utilisateur ou e-mail">
        </div>
        <div id ="mdt" class="loginPlateForm wor">
            <label class="labelLoginAdm col s12 m6" name="mdtLabel">Mot de passe</label>
            <input class ="inputLoginAdm col s12 m6" name="mdtInput" type="password" placeholder="mot de passe"> <br>
        </div>
        <a class="waves-effect waves-light btn" type="submit" id="bouton_connection">Connexion</a>
    </form>
    <a href="#" id ="mdtOublie">Mot de passe oublié ?</a>
</section>

<section class="popUp">

    <div class="lePop">
        <h4>Mots de passe ou Nom d'utilisateur éroné</h4>
        <a class="waves-light btn" type="submit" id="bouton_connection">ok</a>
    </div>


</section>
</main>
@endsection