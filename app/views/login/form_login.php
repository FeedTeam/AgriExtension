<?php

use Core\Language;

?>

<div class="login-form padding20 block-shadow">
    <form method="post" action="login">
        <h1 class="text-light">Login to service</h1>
        <hr class="thin"/>
        <br />
        <div class="input-control text full-size" data-role="input">
            <label for="username">User email:</label>
            <input type="text" name="username" id="username">
            <button class="button helper-button clear"><span class="mif-cross"></span></button>
        </div>
        <br />
        <br />
        <div class="input-control password full-size" data-role="input">
            <label for="password">User password:</label>
            <input type="password" name="password" id="password">
            <button class="button helper-button reveal"><span class="mif-looks"></span></button>
        </div>
        <br />
        <br />
        <div class="form-actions">
            <button type="submit" class="button primary">Login to...</button>
            <button type="button" class="button link">Cancel</button>
        </div>
    </form>

</div>
