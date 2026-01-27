<?php 
namespace App\Core;

use StudentController;

class Router
{

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($method === 'GET' && $url === '/students') {
            require_once '../app/controllers/StudentController.php';
            $controller = new StudentController();
            $controller->index();
            return;
        }
        
        if ($method === 'GET' && $url === '/students/create') {
            require_once '../app/controllers/StudentController.php';
            $controller = new StudentController();
            $controller->create();
            return;
        }

        http_response_code(404);
        echo "Not Found Page";
    }



}

?>