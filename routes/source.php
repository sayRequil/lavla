<?php
namespace 
function getCurrentUri()
{
  $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
  $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
  if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
  $uri = '/' . trim($uri, '/');
  return $uri;
}

class Route {
   public static function get($route,data) {
    $base_url = getCurrentUri();
    $routes = array();
    $routes = explode('/', $base_url);
    foreach($routes as $route)
    {
     if(trim($route) != '')
      array_push($routes, $route);
    }
    $rout = array();
    $rout = explode('/', $route)
    $i = 0
    if ($routes == $rout) {
      call_user_func_array(data,[])
    }
   }
  }
?>
