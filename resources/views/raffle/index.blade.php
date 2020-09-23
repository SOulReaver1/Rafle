@extends('layouts.app')
@section('content')

<div class="col-lg-7 mx-auto relative mt--7">
    <form action="{{route('raffles.lunch', $raffles->first()->pluck('id')->first())}}" method="post">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Faire le tirage au sort</button>
    </form>
<div class="row">
    <div class="col mb-5 mb-xl-0">
        <div id="carouselExampleControls" class="carousel slide form-group" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1>{{$raffles->first()->product()->pluck('name')->first()}}</h1>
                <img class="d-block w-100" src="{{asset('storage/photos/'.$raffles->first()->product()->pluck('photo_path')->first())}}" alt="{{$raffles->first()->product()->pluck('name')->first()}}">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
                <h3 class="font-weight-bold">Méthode de paiement</h3>
                @if (\Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {!! \Session::get('success') !!}
                    </div>
                @elseif(\Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {!! \Session::get('error') !!}
                    </div>
                @endif
                <form action="{{route('raffle.store')}}" method="POST" class="mt-3">
                    {{ csrf_field() }}
                        <input type="hidden" name="raffle_id" value="{{$raffles->first()->pluck('id')->first()}}">
                        <div class="custom-control custom-radio mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadio1">Carte banquaire</label>
                                <div>
                                    <img src="{{asset('img/mastercard.png')}}" alt="Mastercard">
                                    <img src="{{asset('img/visa.png')}}" alt="Visa">
                                    <img src="{{asset('img/americain.png')}}" alt="Amerciain express">
                                </div>
                            </div>
                        </div>
                        
                        <div class="custom-control custom-radio">
                            <div class="d-flex justify-content-between align-items-center">

                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Paypal</label>
                                <div>
                                    <img src="{{asset('img/paypal.png')}}" alt="Paypal">
                                </div>
                            </div>
                        </div>
  
  
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="lastname" class="font-weight-bold">Nom</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="firstname" class="font-weight-bold">Prénom</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                    </div>     
                    <div class="row">
                        <div class="form-group col">
                        <label for="inputEmail4" class="font-weight-bold">Adresse email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" required> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                        <label for="tituCard" class="font-weight-bold">Titulaire de la carte</label>
                        <input type="text" class="form-control" id="tituCard" name="titu-card" required> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                        <label for="nbrCarte" class="font-weight-bold">Numéro de carte</label>
                        <input type="number" class="form-control" id="nbrCarte" name="cardNumber" required> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="expirationCard" class="font-weight-bold">Date d'expiration</label>
                            <input type="date" class="form-control" id="expirationCard" name="date-expiration" required min="{{date('Y-m-d')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="secuCode" class="font-weight-bold">Code de sécurité</label>
                            <input type="number" class="form-control" id="secuCode" name="crypto" required maxlength="3">
                        </div>
                    </div>   
                    <button type="submit" class="btn btn-warning text-white font-weight-bold">S'inscrire</button>
                </form>
                    
    </div>
</div>
@endsection
    
