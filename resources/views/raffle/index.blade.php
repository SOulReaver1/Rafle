@extends('layouts.app')
@section('content')
<div class="container-fluid mt--7">
<div class="row">
    <div class="col mb-5 mb-xl-0">
        <div class="card bg-white">
            <div class="card-header bg-white border-0">
                <h3>S'inscrire à notre Raffle</h3>
                @if (\Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {!! \Session::get('success') !!}
                    </div>
                @elseif(\Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {!! \Session::get('error') !!}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('demo.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="lastname">Nom</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Lestieu" name="lastname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="firstname">Prénom</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Etienne" name="firstname">
                        </div>
                    </div>     
                    <div class="row">
                        <div class="form-group col">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="etienne.lestieu@supinternet.fr" name="email">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
                    
            </div>
        </div>
    </div>
</div>
@endsection
    
