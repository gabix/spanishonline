<?php
/**
 * User: gabix
 * Date: 19/06/15
 * Time: 15:08
 */
class Textos {

    /* datos pa tooodo */
    private $title = "Spanish Online";
    private $usuario_skype = "veronicahopp";
    private $telefono = "(+5411) 69089479";
    private $mail = "veronicahopp@gmail.com";
    private $description = "aprendizaje de espa&ntilde;ol, spanish learning";
    private $keywords = "espa&ntilde;ol, spanish, learning, aprender, aprendizaje, spanish online";

    /* excluime de get y set */
    private $excludeGet = array('excludeGet', 'excludeSet');
    private $excludeSet = array('excludeGet', 'excludeSet');

    /* getters y setters */
    public function get($prop) {
        if (!isset($this->$prop)) {
            trigger_error("Err: No existe la propiedad $prop, en get.");
            return false;
        }
        if (!in_array((string) $prop, $this->excludeGet)) {
            return $this->$prop;
        }
        trigger_error("get_$prop excluido, ");
    }

    public function set($prop, $val) {
        if (!isset($this->$prop)) {
            trigger_error("Err: No existe la porpiedad $prop, en set.");
            return false;
        }
        if (!in_array($prop, $this->excludeSet)) {
            return $this->$prop = $val;
        }
        trigger_error("set_$prop excluido, ");
    }

    public function set_props($params) {
        foreach ($params as $prop => $val) {
            $this->set($prop, $val);
        }
    }

    //TODO: setear acá todas las variables de lenguaje
}
