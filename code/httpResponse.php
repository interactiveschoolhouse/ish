<?php
namespace ish;

    class HttpResponse {
        //http://stackoverflow.com/questions/768431/how-to-make-a-redirect-in-php
        public static function redirect($relativeUrl) {
            $url = 'http://' . $_SERVER['HTTP_HOST'];            
            $url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); 
            $url .= $relativeUrl;            
            header('Location: ' . $url, true, 303);
            exit();
        }
    }
?>