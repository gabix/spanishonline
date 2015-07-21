<?php
/**
 * User: gabix
 * Date: 19/06/15
 * Time: 15:08
 */
class Textos {

    private $_txt = array();

    public function get($key) {
        try {
            return $this->_txt[$key];

        } catch (Exception $e) {
            die('Pinché en Textos()');
        }
    }

    public function __construct($l, Hrefs $h) {
        $this->_txt['title'] = "Spanish Online";
        $this->_txt['usuario_skype'] = "veronicahopp";
        $this->_txt['telefono'] = "(+5411) 6908-9479";
        $this->_txt['mail'] = "veronicahopp@gmail.com";
        $this->_txt['description'] = "aprendizaje de espa&ntilde;ol, spanish learning";
        $this->_txt['keywords'] = "espa&ntilde;ol, spanish, learning, aprender, aprendizaje, spanish online";
        $this->_txt['author'] = "Gabix - giopapini@yahoo.com.ar";

        $this->LlenarConLenguaje($l, $h);
    }

    private function LlenarConLenguaje($l, Hrefs $h) {
        require_once(APP_ROOT.DS.'lenguajes'.DS.$l.'.php');

        while (list($k, $val) = each($_txt)) {
            $val = $this->ReemplazarPorLinks($h, $val);

            $this->_txt[$k] = $val;
        }
    }

    private function ReemplazarPorLinks(Hrefs $h, $str){
        $_str_a_reemplazar = array('#home','#cursos','#profe','#contacto');
        $_reemplazar_por = array($h->get('home'), $h->get('cursos'), $h->get('profe'), $h->get('contacto'));

        return str_replace($_str_a_reemplazar, $_reemplazar_por, $str);
    }
}
