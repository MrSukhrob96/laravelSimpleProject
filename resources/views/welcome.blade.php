<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<style>

</style>

<body>

    <div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed">
        <div class="uk-container uk-container-expand uk-background-primary">
            <nav class="uk-navbar">
                <div class="uk-navbar-left">
                    <a href="#" class="uk-navbar-item uk-logo">
                        LOGO
                    </a>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="">Главная</a></li>
                        <li><a href="">Cообщения</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    @auth
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="">Азимов Сухроб</a></li>
                    </ul>
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="/" class="uk-button uk-button-default tm-button-default uk-icon">Выйти</a>
                    </div>
                    @endauth
                    @guest
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="/" class="uk-button uk-button-default tm-button-default uk-icon">Войти</a>
                    </div>
                    @endguest
                    <a uk-navbar-toggle-icon="" href="#offcanvas" uk-toggle="" class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon" aria-expanded="false"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <rect y="9" width="20" height="2"></rect>
                            <rect y="3" width="20" height="2"></rect>
                            <rect y="15" width="20" height="2"></rect>
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <!-- <div class="uk-section">
        <div class="uk-container uk-container-small uk-section-muted uk-padding-large uk-border-rounded">
            <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                <li><a href="#">Telegram</a></li>
                <li><a href="#">Viber</a></li>
                <li><a href="#">Gmail</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>Telegram messages!</li>
                <li>Viber messages!</li>
                <li>Gmail messages!</li>
            </ul>
        </div>
    </div> -->

    <!-- <div class="uk-section uk-flex uk-flex-middle uk-animation-fade">
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                            <h3 class="uk-card-title uk-text-center">Welcome back!</h3>
                            <form>
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input uk-form-large" type="text">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input uk-form-large" type="password">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                                </div>
                                <div class="uk-text-small uk-text-center">
                                    Not registered? <a href="#">Create an account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="uk-section uk-section-xsmall" uk-height-viewport="offset-top: true">
        <div class="uk-container">
            <div class="uk-flex uk-flex-center">
                <div class="uk-margin uk-card uk-card-default uk-card-hover uk-card-body uk-width-large">
                    <h3>Register</h3>
                    <form class="uk-form-stacked" action="" method="post">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="username">
                                Username
                            </label>
                            <div class="uk-form-controls">
                                <div class="uk-inline uk-width-1-1">
                                    <a class="uk-form-icon uk-form-icon-flip" uk-tooltip="title: Alpha-numeric characters.<br>Minimum 3 characters.<br>Maximum 16 characters.<br>This field is required.; pos: bottom-right"><i class="fas fa-info-circle"></i></a>
                                    <input class="uk-input" id="username" name="username" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="email">
                                Email
                            </label>
                            <div class="uk-form-controls">
                                <div class="uk-inline uk-width-1-1">
                                    <a class="uk-form-icon uk-form-icon-flip" uk-tooltip="title: Must be a valid email.<br>One account per email.<br>This field is required.; pos: bottom-right"><i class="fas fa-info-circle"></i></a>
                                    <input class="uk-input" id="email" name="email" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="password">
                                Password
                            </label>
                            <div class="uk-form-controls">
                                <div class="uk-inline uk-width-1-1">
                                    <a class="uk-form-icon uk-form-icon-flip" uk-tooltip="title: Minimum 8 characters.<br>This field is required.; pos: bottom-right"><i class="fas fa-info-circle"></i></a>
                                    <input class="uk-input" id="password" name="password" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="repeat_password">
                                Repeat Password
                            </label>
                            <div class="uk-form-controls">
                                <div class="uk-inline uk-width-1-1">
                                    <a class="uk-form-icon uk-form-icon-flip" uk-tooltip="title: Must match the password field.<br>This field is required.; pos: bottom-right"><i class="fas fa-info-circle"></i></a>
                                    <input class="uk-input" id="repeat_password" name="repeat_password" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label>
                                <input class="uk-checkbox" name="terms_of_service" type="checkbox"> I accept the <a href="">terms of service</a>.
                            </label>
                        </div>
                        <button class="uk-button uk-button-primary uk-width-1-1" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->


    <section class="uk-section">
        <div class="uk-container uk-container-small uk-section-muted uk-padding-large uk-border-rounded">
            <form>
                <fieldset class="uk-fieldset">
                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" placeholder="Текст поста"></textarea>
                    </div>
                    <div class="uk-margin">
                        <a href="/" class="uk-button uk-button-primary tm-button-default uk-icon">Отправить</a>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="uk-container uk-container-small uk-section-default uk-padding-large">
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
                            <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
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
                                    <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
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
                                    <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
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
            <ul class="uk-pagination uk-flex-center uk-margin-large-top">
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
    </section>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>