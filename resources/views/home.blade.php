@extends('layout.master')
@section('content')
<div class="container">
    <h3 style="margin-top: 30px; margin-bottom: 45px; font-size: 600 !important" class="text-center">Bienvenue sur VIVALALG !  Acheter, Vendre & trouver un emploi partout en Algerie</h3>
    <div class="row">
        <div class="col-md-5">
            <p>Vendez et achetez tout , que vous cherchiez des annonces immobilières, des voitures d'occasion, des offres d'emploi, des meubles, du matériel électronique ou tout autre type de produits d'occasion partout en Algerie sur VIVALAL.com</p>

            <div class="text-center" style="margin-top: 30px; border: solid 2px black;">
                <h4 style="border-bottom: solid 2px black; padding-top: 8px; padding-bottom: 12px; background-color: rgb(166,166,166); color: white; margin-top: 0;">Actualité et meilleurs categories</h4>
            <p>beaucoup de personnes trouvent chaque jour un emploi sur VIVALAL.com</p>
            <p style="margin-bottom: 20px;"><a href="" style="color: rgb(237,125,49); border: solid 2px rgb(255,192,0); padding: 5px 25px; border-radius: 5px;">Toutes les offres</a></p>
            <p><a href="" class="best-categorie">Emploi</a></p>
            <p><strong>Decouvrez nos meilleures categories</strong></p>
            <p>
                <span><a href="" class="best-categorie">Téléphone</a></span>
                <span><a href="" class="best-categorie">Immobilier</a></span>
                <span><a href="" class="best-categorie">Véhicules</a></span>
            </p>
            </div>
        </div>
        <div class="col-md-4 text-right" id="map">
            
        </div>
        <div class="col-md-3 text-right villes">
            <ul>
                <li><a href="#">Adrar</a></li>
                <li><a href="#">Aïn Témouchent</a></li>
                <li><a href="#">Oran</a></li>
                <li><a href="#">Sidi Bel Abbès</a></li>
                <li><a href="#">Tlemcen</a></li>
                <li><a href="#">Béchar</a></li>
                <li><a href="#">Naâma</a></li>
                <li><a href="#">Tindouf</a></li>
                <li><a href="#">Annaba</a></li>
                <li><a href="#">El Tarf</a></li>
                <li><a href="#">Jijel</a></li>
                <li><a href="#">Skikda</a></li>
                <li><a href="#">Illizi</a></li>
                <li><a href="#">Tamanghasset</a></li>
                
               
            </ul>
        </div>
    </div>

</div>
    <div class="text-center" style="border: solid 2px black; margin-top: 25px; padding: 10px; box-sizing: border-box;">
        <p>Avez-vous quelque chose à vendre?<br>Publiez votre annonce sur Tonaton.com </p>
        <p><a href="" class="publier btn">Publier une annonce maintenant</a></p>
    </div>


@endsection