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

<div class="uk-container uk-container-small uk-section-default uk-padding-large" style="padding-top: 0;">
    <ul class="uk-comment-list">
        <li>
            <article class="uk-comment uk-visible-toggle" tabindex="-1">
                <header class="uk-comment-header uk-position-relative">
                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#"><label><span class="uk-margin-small-right" uk-icon="link"></span></label>Author</a></h4>
                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                        </div>
                    </div>
                    <div class="uk-position-top-right uk-position-small uk-hidden-hover">
                        <a class="uk-link-muted" href="#"><span class="uk-margin-small-right" uk-icon="reply"></span>Reply</a>
                    </div>
                </header>
                <div class="uk-comment-body">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><span class="uk-margin-small-right" uk-icon="heart"></span></label>
                        <label><span class="uk-margin-small-right" uk-icon="comments"></span>7</label>
                        @auth
                        @if(auth()->user()->id == 1)
                        <label><span class="uk-margin-small-right" uk-icon="trash"></span></label>
                        <label><span class="uk-margin-small-right" uk-icon="pencil"></span></label>
                        @endif
                        @endauth
                    </div>
                </div>
            </article>
            <ul>
                <li>
                    <article class="uk-comment uk-comment-primary uk-visible-toggle" tabindex="-1">
                        <header class="uk-comment-header uk-position-relative">
                            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h4 class="uk-comment-title uk-margin-remove"><label><span class="uk-margin-small-right" uk-icon="link"></span></label><a class="uk-link-reset" href="#">Author</a></h4>
                                    <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                </div>
                            </div>
                            <div class="uk-position-top-right uk-position-small uk-hidden-hover">
                                <a class="uk-link-muted" href="#"><span class="uk-margin-small-right" uk-icon="reply"></span>Reply</a>
                            </div>
                        </header>
                        <div class="uk-comment-body">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><span class="uk-margin-small-right" uk-icon="heart"></span></label>
                                <label><span class="uk-margin-small-right" uk-icon="trash"></span></label>
                                <label><span class="uk-margin-small-right" uk-icon="pencil"></span></label>
                            </div>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="uk-comment uk-visible-toggle" tabindex="-1">
                        <header class="uk-comment-header uk-position-relative">
                            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <h4 class="uk-comment-title uk-margin-remove"><label><span class="uk-margin-small-right" uk-icon="link"></span></label><a class="uk-link-reset" href="#">Author</a></h4>
                                    <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                </div>
                            </div>
                            <div class="uk-position-top-right uk-position-small uk-hidden-hover">
                                <a class="uk-link-muted" href="#"><span class="uk-margin-small-right" uk-icon="reply"></span>Reply</a>
                            </div>
                        </header>
                        <div class="uk-comment-body">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><span class="uk-margin-small-right" uk-icon="heart"></span></label>
                                <label><span class="uk-margin-small-right" uk-icon="trash"></span></label>
                                <label><span class="uk-margin-small-right" uk-icon="pencil"></span></label>
                            </div>
                        </div>
                    </article>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="uk-container uk-container-small uk-section-muted uk-padding-large uk-border-rounded">
    <form>
        <fieldset class="uk-fieldset">
            <div class="uk-margin">
                <textarea class="uk-textarea uk-border-rounded" rows="5" placeholder="Текст поста"></textarea>
            </div>
            <div class="uk-margin">
                <button type="button" class="uk-button uk-button-primary tm-button-default uk-icon" onclick="UIkit.notification({message: 'Success message...', status: 'success'})">Отправить</button>
            </div>
        </fieldset>
    </form>
</div>
<div class="uk-container uk-margin-large-bottom uk-margin-medium-top">
    <ul class="uk-pagination uk-flex-center">
        <li><a href="#"><span uk-pagination-previous></span></a></li>
        <li><a href="#">1</a></li>
        <li class="uk-disabled"><span>...</span></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li class="uk-active"><span>7</span></li>
        <li><a href="#">8</a></li>
        <li><a href="#"><span uk-pagination-next></span></a></li>
    </ul>
</div>

@endsection