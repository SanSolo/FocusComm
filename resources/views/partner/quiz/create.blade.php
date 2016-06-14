@extends('layouts.masterPartner')
@section('title', 'Formulaire Quiz')

@section('content')
<main class="main">
<section class="FormulaireQuiz">

    <form>
        <h5>
        <div class="NomQuiz">
            <p><label><h5>Titre du quiz</h5></label> </br> <input class="titreQuiz" type="text" name="titre"></p>
             <label class="categorieLegende"><h5>Catégorie</h5></label>
                  <select class="browser-default quizCategorie" name="categorie_id">
                    <option value="" disabled selected></option>
                    <option value="">Sexualité</option>
                    <option value="">Manger/Bouger</option>
                    <option value="">Autres</option>
                  </select>
        </div>
        <div class="qList">
        <div class="question" id="Q1">
            <h5 class="titleQuestion" id="tq1">Question</h5>
            <p><h5><input type="text" name="question[0][texte]"></h5>
            <p><label><h5>Illustrations </label><input type="file" name="question[0][illustration]"></h5>
            <p><label><h5>Réponse Juste  </label><input type="text" name="question[0][reponse][0][texte]"></h5>
            <input type="hidden" name="question[0][reponse][0][estJuste]"value="true">
            <div class="rep"><label><h5>Réponse fausse  </label><input type="text" name="question[0][reponse][1][texte]"></h5>
            <input type="hidden" name="question[0][reponse][1][estJuste]" value="false"></div>
            <div class="EspaceDispo1" id="espace"></div>
            <a class="btn-floating btn-large waves-effect waves-light green BoutonAjtR" id="boutonAjouterReponse1" ><i class="material-icons">add</i></a>
        </div>
        </div>
            <a class="waves-effect waves-light btn" id="boutonAjouterQuestion"><i class="material-icons left" type="submit">done</i>ajouer une question</a>
            <a class="waves-effect waves-light btn BoutonSaveQuiz"><i class="material-icons left" type="submit">done</i>Sauver</a>
   </h5>
    </form>

</br>

    <a class="waves-effect waves-light btn BtnBackQuiz"><i class="material-icons left">call_missed</i>Back to the Quiz</a>
    <a class="waves-effect waves-light btn BtnBackHome"><i class="material-icons left">call_missed</i>Back Home</a>


</section>

<div class="RepFNone" id="réponseFausse"><label><h5>Réponse fausse  </label><input type="text" name="question[0][reponse][1][texte]"></h5>
<input type="hidden" name="question[0][reponse][1][estJuste]" value="false"></div>

</main>
@endsection