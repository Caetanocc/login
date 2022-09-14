<?php

function mostraAlerta($tipo){
    if (isset($_SESSION[$tipo])) { ?>
        <div class="notification is-<?=$tipo?>">
        <p> <?=$_SESSION[$tipo]?> </p>
    </div>
    <?php    };
    unset($_SESSION[$tipo]);
}