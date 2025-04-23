<?php

class Router
{
    public function start()
    {
        try {
            $uri = $_SERVER['REQUEST_URI'];
            if ($uri === "/main") {
                session_start();
                if (isset($_SESSION['user'])) {
                    $instance = new MainController();
                    $instance->index();
                } else {
                    header("Location: /login");
                    exit;
                }
            } elseif ($uri === "/post/create") {
                require_once '../src/controllers/PostController.php';
                $controller = new PostController();
                $controller->create();
                exit;
            } elseif ($uri === "/post/delete") {
                require_once '../src/controllers/PostController.php';
                $controller = new PostController();
                $controller->delete();
                exit;
            } elseif ($uri === "/post/edit") {
                require_once '../src/controllers/PostController.php';
                $controller = new PostController();
                $controller->edit();
                exit;
            } elseif ($uri === "/logout") {
                require_once '../src/controllers/LogoutController.php';
                $controller = new LogoutController();
                $controller->index();
                exit;
            } elseif ($uri !== "/") {
                $controller = ucfirst(explode('/', $uri)[1]) . "Controller";
                if (class_exists($controller)) {
                    $instance = new $controller();
                    $instance->index();
                } else {
                    include_once './views/error.php';
                }
            } else {
                session_start();
                if (isset($_SESSION['user'])) {
                    header("Location: /main");
                    exit;
                } else {
                    $instance = new RegisterController();
                    $instance->index();
                }
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
