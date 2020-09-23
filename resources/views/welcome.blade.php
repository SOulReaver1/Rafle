@extends('layouts.header')
@section('content')
    <div class="text-defil">
      <p>Bienvenue sur raffle, plugin qui organise des raffles sur vos site internet. Télécharger notre puging des maintenant !</p>
    </div>
    <div class="main">
        <div class="content">
          <div class="left-content">
            <h2>Raffle l’outils de raffle le plus efficace et intuitif pour vos stores</h2>
            <p>Créer des raffles percutantes, qui engagerons votre communauté et augmentons vos taux de conversion.</p>
            <button name="button">Demande de demo</button>
          </div>
          <img src="{{ asset('img/ticket.png') }}" alt="">
        </div>
    </div>
    <h2>Nos partenaires</h2>
    <div class="partner">
      <a href="#"><img src="{{ asset('img/main_img.png') }}" alt="shopify"></a>
      <a href="#"><img src="{{ asset('img/main_img.png') }}" alt="woocomerce"></a>
      <a href="#"><img src="{{ asset('img/main_img.png') }}" alt="wizishop"></a>
      <a href="#"><img src="{{ asset('img/main_img.png') }}" alt="wordpress"></a>
    </div>
    <h2>Nos Feature</h2>
    <div class="features">
      <div class="features_1">
        <h4>Tickets personalisable</h4>
        <p>Profitez des meilleures options de billets de raffles. Vendez des billets en ligne et imprimés pour personnaliser votre campagne.
  Nos tickets sont entièrement personnalisable ! Créer vous même votre propre design, adapté à votre propre charte graphique et identité de marque.</p>
      </div>
      <div class="features_2">
        <h4>Tickets personalisable</h4>
        <p>Choisissez exactement quand, comment et où vous tirez vos gagnants. Sélectionnez un tirage au sort automatique ou manuel en fonction de vos besoins. Plusieurs méthodes existent. À vous de choisir !</p>
      </div>
    </div>
    <h2>Besoins d'infos</h2>
    <form class="" action="index.html" method="post">
      <div class="name">
        <div class="label">
          <label for="first_name">Prénom</label>
          <input id="first_name" type="text" name="first_name" placeholder="Entrer votre prenom"  value="">
        </div>
        <div class="label">
          <label for="last_name">Nom</label>
          <input id="last_name" type="text" name="last_name" placeholder="Entrer votre nom"  value="">
        </div>
      </div>
      <div class="label email-lb">
        <label for="email">Address email</label>
        <input id="email" type="email" name="email" placeholder="Entrer votre addresse email" value="">
      </div>
      <div class="label message-lb">
        <label for="msg">Message</label>
        <textarea id="msg" name="name" placeholder="Entrer votre message"></textarea>
      </div>
      <input id="send" type="submit" name="send" value="Envoyer">
    </form>

    <div class="footer">
      <ul>
        <li>
          <ul>
            <li>Raffle.com</li>
            <li><a href="#">Condition générale de vente</a></li>
            <li><a href="#">Déclaration de protection des données</a></li>
            <li><a href="#">Mention légales</a></li>
          </ul>
        </li>
        <li>
          <ul>
            <li>Service client</li>
            <li><a href="#">Nous contacter</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Moyen de paiement</a></li>
          </ul>
        </li>
        <li>
          <ul>
            <li>à propos de raffle</li>
            <li><a href="#">Qui somme-nous?</a></li>
            <li><a href="#">Nos partenaires</a></li>
            <li><a href="#">Travailler chez raffle</a></li>
          </ul>
        </li>
        <li>
          <img src="{{ asset('img/logo.png') }}" alt="logo">
        </li>
      </ul>
      <div class="bot">
        <p>Raffle © 2020</p>
      </div>
    </div>
@endsection
