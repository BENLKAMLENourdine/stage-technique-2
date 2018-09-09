<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">VIVALALG</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Toutes les annonces <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Offres</a></li>
        <li><a href="#">Demandes</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      @if(!Auth::guard('particuliers')->check() && !Auth::guard('professionnels')->check())
      <li>
        <button class="connection" style="background-color: transparent; border: none; line-height: 50px; color: white;">S'identifier</button>
      </li>
        @endif
        @auth('particuliers')
        <li class="dropdown">
          <a href="" class="dropdown-toggle signup" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::guard('particuliers')->user()->nom}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('part.profile') }}">Profile</a></li>
            <li><a href="{{ route('part.logout') }}">Déconnection</a></li>
          </ul>
        </li>
        @endauth
        @auth('professionnels')
        <li class="dropdown">
          <a href="#" class="dropdown-toggle signup" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::guard('professionnels')->user()->nom_de_la_societe}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('pro.profile') }}">Profile</a></li>
            <li><a href="{{ route('pro.logout') }}">Déconnection</a></li>
          </ul>
        </li>
        @endauth
        <li><a href="#">Chat</a></li>
        <li><a href="#" class="publier btn">Publier une annonce</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="gray">
  <div class="container">
    <div class="row first" style="display: block;">
    <div class="col-md-5 col-md-offset-2" style="
    position: fixed;
    overflow: auto;
    top: 25%;background-color: white; border-bottom: solid 1px gray;">
      <h3 class="text-center" style="border-bottom: solid 2px rgb(86,158,144); margin-bottom: 30px; padding-bottom: 15px;">Connexion</h3>
      <form method="post" action="{{ route('all.signin') }}">
        <div class="form-group">
          <label for="email">Addresse email</label>
          <input type="text" name="email" class="form-control input-lg">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" name="password" class="form-control input-lg">
        </div>
        <div class="form-group">
          <input type="submit" class="form-control btn input-lg btn-primary" value="Se connecter">
        </div>
        {{ csrf_field() }}
      </form>
      <hr>
<p class="text-center">Vous n'avez pas de compte ?</p>
        <div class="form-group">
          <input style="border: solid 1px #337ab7; display: block; padding: 21px 0 21px;" class="choix form-control btn btn-lg" value="Créer un compte">
        </div>
  </div>
  </div>
  <span style="color: white; position: absolute; top: 10px; right: 10px; font-size: 30px;" class="glyphicon glyphicon-remove" aria-hidden="true"></span>


<div class="row second" style="display: none;">
  <div class="col-md-5 col-md-offset-2" style="
    position: fixed;
    overflow: auto;
    top: 25%;background-color: white; border-bottom: solid 1px gray;">
      <h3 class="text-center" style="border-bottom: solid 2px rgb(86,158,144); margin-bottom: 30px; padding-bottom: 15px;">Création de compte
</h3>
      <p class="text-center">Choisissez votre type de compte :</p>
      <div class="row">
        <div class="col-md-6">
          <a href="/compte/part/creation/" class="btn btn-primary btn-lg" style="display: block;">Particulier</a>
        </div>
        <div class="col-md-6">
          <a href="/compte/pro/creation/" class="btn btn-primary btn-lg" style="display: block;">Professionel</a>
        </div>
      </div>
      <hr>
<p class="text-center return" style="color: #337ab7; cursor: pointer;">Retour à la connexion</p>
  </div>
</div>




</div>
</div>