<?php

class SelectorDeLenguaje {
    //TODO: COOKIES!!

    private $_lenguajesQueHay = array('esp', 'eng', 'hol');
    private $_defLang = "eng";
    private $_lenguaje = "";

    private function set_lenguaje($lenguaje) {
        $this->_lenguaje = $lenguaje;
    }
    public function get_lenguaje() {
        if (!isset($_GET['l'])) {
            if (!isset($_SESSION['lenguaje'])) {
                $this->set_lenguaje($this->_defLang);
            } else {
                $this->set_lenguaje($_SESSION['lenguaje']);
            }
        } else {
            if (in_array($_GET['l'], $this->_lenguajesQueHay)) {
                $this->set_lenguaje($_GET['l']);
                $_SESSION['lenguaje'] = $this->_lenguaje;
            } else {
                $this->set_lenguaje($this->_defLang);
            }
        }

        return $this->_lenguaje;
    }
}