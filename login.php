<?php
include('classes/StaticHTML.class.php');

$page = new StaticHTML();

print $page->head("Login");

var_dump($_POST);

print '<div class="uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="expand: true">
<div class="uk-flex uk-flex-column uk-flex-middle">
    <h1 class="uk-heading-large">Irgendein Titel</h1>
    <div class="uk-alert-danger" uk-alert>
        <p>Die von Dir eingegebenen Daten sind fehlerhaft. Bitte korrigiere sie.</p>
    </div>
    <form action="login.php" method="POST">

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="nutzer" aria-label="Not clickable icon">
            </div>
        </div>
    
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input class="uk-input" type="password" name="passwort" aria-label="Not clickable icon">
            </div>
        </div>
        <div class="uk-margin">
            <div class="uk-inline">
                <button class="uk-button uk-button-primary uk-width-1-1">Anmelden</button>
            </div>
        </div>

    </form>
</div>
</div>';


print $page->foot();