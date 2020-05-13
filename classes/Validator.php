<?php

      class Validator {

            private function sanitize($input, $filter) {
                  return trim(filter_var($input, $filter));
            }

            private function validate($input) {
                  if(isset($input) && !empty($input) && $input != "" && $input != " ") {
                        return $input;
                  }
                  else {
                        return "<p class:'warning'>Donnée introduite non valide</p>";
                  }
            }

            public static function check($entry, $type = "string") {
                  switch ($type) {
                        case "string" :
                              $entry = sanitize($entry, FILTER_SANITIZE_STRING);
                              break;
                        case "int" :
                              $entry = sanitize($entry, FILTER_SANITIZE_INT);
                              break;
                        case "float" :
                              $entry = sanitize($entry, FILTER_SANITIZE_FLOAT);
                              break;
                        case "mail" :
                              $entry = sanitize($entry, FILTER_SANITIZE_MAIL);
                              break;
                        case "url" :
                              $entry = sanitize($entry, FILTER_SANITIZE_URL);
                              break;
                  }

                  return validate($entry);
            }

            /* OTHER VERSION
            public function string($input) {
                  $input = sanitize($input, FILTER_SANITIZE_STRING);
                  $input = validate($input);
                  return $input;
            }

            public function int($input) {
                  $input = sanitize($input, FILTER_SANITIZE_INT);
                  $input = validate($input);
                  return $input;
            }

            public function float($input) {
                  $input = sanitize($input, FILTER_SANITIZE_FLOAT);
                  $input = validate($input);
                  return $input;
            }

            public function mail($input) {
                  $input = sanitize($input, FILTER_SANITIZE_EMAIL);
                  $input = validate($input);
                  return $input;
            }

            public function url($input) {
                  $input = sanitize($input, FILTER_SANITIZE_URL);
                  $input = validate($input);
                  return $input;
            }
            */
      
      }

?>