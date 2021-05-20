<?php
class Plaut {

      function route() {

               global $config;
               //set our defaults
               $controller = $config['default_controller'];
               $action = $config['default_method'];
               $url = '';

               /***** Get request url and script url *****/
		          $request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
		          $script_url  = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';

		          /***** Get our url path and trim the / of the left and the right *****/
		          if($request_url != $script_url) $url = trim(preg_replace('/'. str_replace('/', '\/', str_replace('index.php', '', $script_url)) .'/', '', $request_url, 1), '/');

               /***** Split the url into segments *****/
		          $segments = explode('/', $url);
              
              /***** Do our default checks *****/
		          if(isset($segments[0]) && !empty($segments[0])) $controller = $segments[0];
		          if(isset($segments[1]) && !empty($segments[1])) $action = str_replace('-', '_', $segments[1]);

              //get our controller file
              if(file_exists(APP_DIR . 'controllers/'. $controller. '.php')) {

                      require_once(APP_DIR . 'controllers/' . $controller . '.php');

              } else {

                      $controller = $config['error_controller'];

                      require_once(APP_DIR . 'controllers/' . $controller . '.php');
                      $action = 'index';
              }

              $obj = new $controller;

              die(call_user_func_array(array($obj, $action), array_slice($segments, 2)));

      }

}
?>
