<?php
namespace ish;

    class HttpRequest {

        public static function method() {
            return $_SERVER['REQUEST_METHOD'];
        }

        public static function form($fieldName) {
            if (isset($_POST[$fieldName]))
            {
                return $_POST[$fieldName];
            }
            return "";
        }

        public static function queryString($fieldName) {
            if (isset($_GET[$fieldName]))
            {
                return $_GET[$fieldName];
            }
            return "";
        }
    }
?>