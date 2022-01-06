<?php
    
        
    /**
     * Form
     * 
     * Voici ma classe Form
     */
    class Form {
        
        private $data;
        
                
        public function __construct($data) {
            $this->data = $data;
        }

        public function getData() {
            return $this->data;
        }
        
        private function getValue($key) {
            if(isset($this->data[$key])) {
                return $this->data[$key];
            } else {
                return NULL;
            }
        }

        private function setValue($key, $value) {
            
        }

        public function createInput($key, $class, $id) {
            // echo '<label for='. $key . '>'. $key .' : </label>';
            echo '<input type="text" name="' . $key . '" class="'.$class.'" id="'.$id.'"value="'. $this->getValue($key).'"> '; 

        }

        public function createSubmit($text, $class) {
            echo '<button type="submit" " class="'.$class.'">'.$text.'</button>';
        }
    }

    ?>
