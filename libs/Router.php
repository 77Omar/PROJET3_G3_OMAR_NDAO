<?php
class Router {
    private $ctrl;

    function route()
    {

        try {
            spl_autoload_register(function ($class) {
                $pathModels = "./models/" . $class . ".php";
                $pathDao = "./dao/" . $class . ".php";
                $pathLibs = "./libs/" . $class . ".php";
                if (file_exists($pathModels)) {
                    require_once($pathModels);
                } elseif (file_exists($pathDao)) {
                    require_once($pathDao);
                } elseif (file_exists($pathLibs)) {
                    require_once($pathLibs);
                }
            });


            // $_GET['url]=room/viewPage
            // $url["room", "viewPage"]

            if (isset($_GET['url'])) {
                $url = explode("/", $_GET['url']);
                $controller = ucfirst(strtolower($url[0])) . "Controller";
                $path = "./controllers/" . $controller . ".php";

                if (file_exists($path)) {
                    require_once "$path";

                    // Instancifier un objet controller
                    $this->ctrl = new $controller();
                    $action = $url[1];
                    if (method_exists($this->ctrl, $action)) {
                        $this->ctrl->{$action}();
                    } else {
                        // Si l'action n'existe pas
                        $path = "./controllers/ErrorController.php";
                        require_once "$path";
                        $error = new ErrorController();
                        $error->showError("le controller n'existe pas");
                    }

                }
            } else {
                $path = "./controllers/SecurityController.php";
                require_once "$path";
                $this->ctrl = new SecurityController();
                $this->ctrl->index();
            }
        }catch(Exception $ex){

        }
    }
}