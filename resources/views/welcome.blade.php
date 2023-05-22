@extends('layouts.app')

@section('content')
    @auth
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1>Bienvenido(a) {{ Auth::user()->name }}</h1>
                    <p>Explora, descubre y comparte tus experiencias en el mundo de los videojuegos.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Ir a la página principal</a>
                </div>
            </div>
        </div>
    @else
        <div class="jumbotron text-center">
            <h1 class="display-4">Bienvenido al Mundo de los Videojuegos</h1>
            <p class="lead">Explora, descubre y comparte tus experiencias en el mundo de los videojuegos.</p>
            <hr class="my-4">
            <p>Únete a nuestra comunidad y comparte tus reseñas, avances, trucos y más.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/inicio1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Call of Duty Black Ops 3</h5>
                            <p class="card-text">Shooter en primera persona.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/inicio2.webp" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Grand Theft Auto V</h5>
                            <p class="card-text">Mundo abierto.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="img/inicio3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">E Football</h5>
                            <p class="card-text">Vive el football mas realista.</p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
