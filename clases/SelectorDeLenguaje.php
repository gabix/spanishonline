<?php

/**
 * Clase que sirve para la selección del lenguaje de la paj.
 */
class SelectorDeLenguaje {
    //TODO: COOKIES!!

    /**
     * @_lenguajesQueHay array, que contiene todos las traducciones de la página.
     */
    private $_lenguajesQueHay = array('es', 'en', 'nl');
    /**
     * @_defLang string, el lenguaje por defecto.
     */
    private $_defLang = "en";
    /**
     * @_lenguaje string una vez seteado, el lenguaje que queda (es, en nl, etc)
     */
    private $_lenguaje = "";

    /**
     * @_set_lenguaje función que setea $_lenguaje
     */
    private function Set_lenguaje($_lenguaje) {
        $this->_lenguaje = $_lenguaje;
    }

    /**
     * @return string con el nombre corto del lenguaje (en, es, nl, etc).
     */
    public function Get_lenguaje() {
        $this->Chequeos_previos_a_seteo();
        return $this->_lenguaje;
    }

    /**
     * @Chequeos_previos_a_seteo setea $__lenguaje dependiendo de la sesión o la url
     */
    private function Chequeos_previos_a_seteo() {
        //pasado por url??
        if (!isset($_GET['l'])) {
            //carga inicial -- está seteado en la sesión??
            if (!isset($_SESSION['lenguaje'])) {
                //lo seteo con el default
                $this->Set_lenguaje($this->_defLang);
            } else {
                //lo cargo de sesión
                $this->Set_lenguaje($_SESSION['lenguaje']);
            }
        } else {
            //me pasaron por url -- lo que pasaron es un lenguaje que existe??
            if (in_array($_GET['l'], $this->_lenguajesQueHay)) {
                //seteo local y en sesión.
                $this->Set_lenguaje($_GET['l']);
                $_SESSION['lenguaje'] = $this->_lenguaje;
            } else {
                //me boludearon, seteo el default.
                $this->Set_lenguaje($this->_defLang);
            }
        }
    }

}