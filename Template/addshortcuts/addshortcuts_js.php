<?php

    // If I do not save the eventually saved variable,
    // the access to the AddShortcuts generated JS route
    // will be count as "No access" and save this url
    // into the "redirectAfterLogin" key of the SESSION
    if (array_key_exists('redirectAfterLogin', $_SESSION)) {
        $saveRedirectAfterLogin = $_SESSION['redirectAfterLogin'];
        // if this variable is the addshortcuts js route, simply get rid of it
        if ($saveRedirectAfterLogin == '/addshortcuts/js') {
            $saveRedirectAfterLogin = '/';
        }
    }

?>

<script defer type="text/javascript" src="/addshortcuts/js"></script>

<?php

    if (array_key_exists('redirectAfterLogin', $_SESSION)) {
        $_SESSION['redirectAfterLogin'] = $saveRedirectAfterLogin;
    }

?>