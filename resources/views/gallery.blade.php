@extends('welcome')

@section('content')

<section class="uk-section">
    <div class="uk-container uk-container-small uk-background-primary">
        <nav class="uk-navbar">
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li><a href="#">Моя лента</a></li>
                    <li><a href="#">Лента друзей</a></li>
                    <li class="uk-active"><a href="#">Все</a></li>
                </ul>
            </div>
        </nav>
    </div>
</section>
@endsection