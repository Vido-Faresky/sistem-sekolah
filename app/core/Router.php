<?php 
namespace App\Core;

use StudentController;

class Router
{

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        echo "{$method} {$uri}";

        if ($method == 'GET' && $uri == '/students') {
            // require_once '../app/controllers/StudentController.php';
            // $controller = new StudentController();
            // $controller->index();
            echo "<h1>Daftar Siswa</h1>";
            echo "<h1>Adalah Pokoknya</h1>";
            return;
        }
        
        if ($method == 'GET' && $uri == '/students/create') {
            // require_once '../app/controllers/StudentController.php';
            // $controller = new StudentController();
            // $controller->create();
            echo "<h1>Tambah Siswa</h1>";
            echo "<h1>Adalah Pokoknya</h1>";
            return;
        }

        http_response_code(404);
        echo "<h1>404 - Page Not Found</h1>";
    }



}

?>