<?php

namespace src\config;

class Loader
{


    public function loadTemplateView($viewName, $params = array())
    {

        if (count($params) > 0) {
            foreach ($params as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        require_once(TEMPLATE_PATH . "/header.php");
        require_once(VIEW_PATH . "/{$viewName}.php");
        require_once(TEMPLATE_PATH . "/footer.php");
    }


}
