@extends('layout.master')
@section('content')
<div style="background-color: #fafafa;">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="post" action="{{ route('pro.signup') }}" style="background-color: #fff; box-shadow: 0 0 5px 0 #ddd; padding: 25px 60px 25px 60px; box-sizing: border-box; margin-top: 20px; margin-bottom: 20px;">
                <h4 class="text-center" style="border-bottom: solid 2px rgb(86,158,144); padding-bottom: 15px; margin-bottom: 45px;"><strong>Créez votre Compte Professionnel</strong></h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                    <label for="nom">Nom *</label>
                    <input type="text" name="nom" class="form-control input-lg">
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <label for="nom">Prénom *</label>
                    <input type="text" name="prenom" class="form-control input-lg">
                </div>
                    </div>
                </div>
<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                    <label for="soc">Nom de le société *</label>
                    <input type="text" name="nom_de_la_societe" class="form-control input-lg">
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <label for="siret">SIRET *</label>
                    <input type="text" name="SIRET" class="form-control input-lg">
                </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="addresse">Adresse *</label>
                    <input type="text" name="addresse" class="form-control input-lg">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                    <label for="ville">Ville *</label>
                    <input type="text" name="ville" class="form-control input-lg">
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <label for="tel">Téléphone *</label>
                    <input type="text" name="telephone" class="form-control input-lg">
                </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Adresse email *</label>
                    <input type="text" name="email" class="form-control input-lg">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                    <label for="password">Mot de passe *</label>
                    <input type="text" name="password" class="form-control input-lg">
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                    <label for="password2">Confirmer le mot de passe *</label>
                    <input type="text" name="password2" class="form-control input-lg">
                </div>
                    </div>
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary input-lg form-control" value="Créer mon Compte Professionnel
">
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</div>
@endsection
