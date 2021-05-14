@extends('welcome')

@section('content')
<section class="uk-section" uk-height-viewport="offset-top: true">
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
</section>
@endsection