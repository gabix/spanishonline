<?php
/**
 * User: gabix
 * Date: 19/06/15
 * Time: 15:08
 */
class Textos_old {

    /* datos pa tooodo */
    private $title = "Spanish Online";
    private $usuario_skype = "veronicahopp";
    private $telefono = "(+5411) 6908-9479";
    private $mail = "veronicahopp@gmail.com";
    private $description = "aprendizaje de espa&ntilde;ol, spanish learning";
    private $keywords = "espa&ntilde;ol, spanish, learning, aprender, aprendizaje, spanish online";
    private $author = "Gabix - giopapini@yahoo.com.ar";

    private $_txt = array();

    public function get_txt($key) {
        try {
            return $this->_txt[$key];

        } catch (Exception $e) {
            die('Pinché');
        }
    }

    private $l_subTit = "";
    private $l_botInicio = "";
    private $l_botProfe = "";
    private $l_botCursos = "";
    private $l_botContacto = "";
    private $l_inicio = "";
    private $l_profe = "";
    private $l_cursos = "";
    private $l_contacto = "";
    private $l_tel = "";
    private $l_lenguaje = "";

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
        return false;
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
        return false;
    }

    public function set_props($params) {
        foreach ($params as $prop => $val) {
            $this->set($prop, $val);
        }
    }

    /*
     * @charly: acá tengo que implementar lo de extends
     * y es donde necesito tener ya instanseado la clase Href()
     */
    public function LlenarConLenguaje($_l, Hrefs $_h) {
        if (null === $_h) die("h no puede ser null");

        require_once(APP_ROOT.DS.'lenguajes'.DS.$_l.'.php');

        while (list($_k, $_val) = each($_txt)) {
            $_val = $this->ReemplazarPorLinks($_h, $_val);

            $this->_txt[$_k] = $_val;

        }

        /*$props = array('l_subTit', 'l_botInicio', 'l_botProfe', 'l_botCursos', 'l_botContacto', 'l_inicio', 'l_profe', 'l_cursos', 'l_contacto', 'l_tel', 'l_lenguaje');
        foreach ($props as $var) {
            $_val = $$var;

            $_val = $this->ReemplazarPorLinks($h, $_val);

            $this->set($var, $_val);
        }*/
    }

    private function ReemplazarPorLinks(Hrefs $h, $_str){
        if (null === $h) die("h no puede ser null");

        $_str_a_reemplazar = array('#home','#cursos','#profe','#contacto');
        $_reemplazar_por = array($h->get('home'), $h->get('cursos'), $h->get('profe'), $h->get('contacto'));

        return str_replace($_str_a_reemplazar, $_reemplazar_por, $_str);
    }
}
