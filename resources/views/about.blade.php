@extends('layouts.header')
@section('content')
<div class="second">

  <h1>A Propos</h1>
  <hr>

  <div class="mission">
    <h3>Notre mission : vous aidez à fidéliser et engager votre communauté</h3>
    <p>Les raffles sont aujourd’hui un moyen privilégié pour les e-commerçant de ritualiser l’achat grâce à un processus en plusieurs étapes. L’effet de rareté que créer les raffles est un moyen incontournable pour monter en gamme et en valeur ajoutée. Votre marque ne sera que plus impactente.</p>
  </div>
  <div class="concept">
    <h3>Le concept des raffles</h3>
    <p>« Raffle » signifie en anglais « tombola », communément traduit par « tirage au sort ». Ce système a été créé dans le domaine du streetwear, qui connaît depuis plusieurs années une reconnaissance mondiale, notamment chez la génération connectée, addict de nouveautés. Une offre inférieure à la demande est au cœur de la stratégie marketing, dans le but de provoquer chez le consommateur une frustration et, de fait, une demande toujours plus croissante. Ce principe de sélection a d’abord été démocratisé par la marque Supreme, principal inventeur de cette stratégie.</p>
  </div>
  <div class="solution">
    <h3>Notre solution pour vos raffles</h3>
    <p>Notre concept est simple : vous proposez une extension simple, efficace et automatique pour gérer vos raffles. Nous vous proposons de profiter des meilleures options de billets de raffle. Vendez des billets en ligne et imprimés pour personnaliser votre campagne. Nos tickets sont entièrement personnalisables ! Créer vous même votre propre design, adapté à votre propre charte graphique et identité de marque. Vous pouvez également choisir quand, comment et où vous tirez vos gagnants. Sélectionnez un tirage au sort automatique ou manuel en fonction de vos besoins. Plusieurs méthodes existent. À vous de choisir !</p>
  </div>
  <div class="team">
    <h3>Notre équipe engagé à rendre vos raffles plus simple</h3>
    <p>Nos équipes travaillent tous les jours pour simplifier la gestion de vos raffles, et les optimiser selon vos envies et besoins.</p>
  </div>

  <h2>Notre équipe</h2>
  <div class="teams">
    <div class="camille">
      <img src="" alt="">
      <p>Camille</p>
    </div>
    <div class="jeff">
      <img src="" alt="">
      <p>Jeff</p>
    </div>
    <div class="chloe">
      <img src="" alt="">
      <p>Chloe</p>
    </div>
    <div class="tyler">
      <img src="" alt="">
      <p>Tyler</p>
    </div>
  </div>
</div>

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
