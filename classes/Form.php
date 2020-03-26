<?php


      class Form {
            private $entries;

            public function __construct($entries = []) {
                  $this->entries = $entries;
            }

            private function getValue($index) {
                  return isset($this->entries[$index]) ? $this->entries[$index] : null;
            }

            public function create($action = "", $method = "POST") {
                  return "<form action='" . $action . "' " . "method='" . $method . "'>";
            }

            public function end() {
                  return "</form>";
            }

            public function text($name) {
                  echo $this->getValue($name);
                  return "<input type='text' name='" . $name . "' value='" . $this->getValue($name) . "'>";
            }

            public function textarea($name, $cols = 30, $rows = 100) {
                  return "<textarea name='" . $name . "' cols='" . $cols . "' rows='" . $rows . "'><textarea>";
            }

            public function radio($name, $value) {
                  return "<input type='radio' name='" . $name ."' value='" . $value . "'>
                              <label for='" . $name . "'>" . ucfirst($this->getValue($name)) . "<label>";
                  
            }

            public function checkbox($name) {
                  return "<input type='checkbox' name='" . $name . "'>";

            }

            public function select($name, $options = []) {
                  $select = ["<select name='" . $name . "'>"];
                  foreach ($options as $option) {
                        array_push($select, "<option value='" . $option . "'>" . ucfirst($option) . "</option>");
                  }
                  array_push($select, "</select>");
                  return $select;
            }

            public function submit($value) {
                  return "<input type='submit' value='" . $value . "'>";
            }
      }
?>
