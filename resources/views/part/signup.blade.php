@extends('layout.master')
@section('content')
<div style="background-color: #fafafa;">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="post" action="{{ route('part.signup') }}" style="background-color: #fff; box-shadow: 0 0 5px 0 #ddd; padding: 25px 60px 25px 60px; box-sizing: border-box; margin-top: 20px; margin-bottom: 20px;">
                <h4 class="text-center" style="border-bottom: solid 2px rgb(86,158,144); padding-bottom: 15px; margin-bottom: 45px;"><strong>Créez votre Compte</strong></h4>
                @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                            @endforeach
                    @endif
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="text" name="email" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="text" name="password" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <label for="password2">Confirmer le mot de passe</label>
                    <input type="text" name="password2" class="form-control input-lg">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary input-lg form-control" value="Créer mon Compte Personnel">
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</div>
@endsection
