<?php

function urlNotFound()
{
    if (isset($_GET['url'])) {
        $urls = explode("/", $_GET['url']);

        foreach ($urls as $url) {
            if ($url != '') {
                if (!file_exists(CONTROLLER_PATH . "/{$url}.php")) {
                    header('location: ' . BASEURL . '404');
                }
            }
        }
    }
}
