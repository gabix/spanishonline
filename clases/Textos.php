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
    private $author = "Gabix - giopapini@yahoo.com.ar";

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

    private function ReemplazaLinks(Hrefs $h) {

    }

    public function LlenarConLenguaje($l, Hrefs $h) {
        /* no va por PUTO!!
        $paj = file_get_contents(APP_ROOT.DS.'lenguajes'.DS.$l.'.html');

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->preserveWhiteSpace = true;
        $dom->formatOutput       = true;
        $dom->loadHTML($paj);

        $ids = array('l_subTit', 'l_botInicio', 'l_botProf', 'l_botCurs', 'l_botCont', 'l_inicio', 'l_prof', 'l_curs', 'l_contacto', 'l_tel');
        foreach ($ids as $var) {
            $node = $dom->getElementById($var);
            $val = $node->textContent;

            echo $node->;
            $this->set($var, $val);
        */

        require_once(APP_ROOT.DS.'lenguajes'.DS.$l.'.php');

        if (null === $h) die("h no puede ser null");

        $props = array('l_subTit', 'l_botInicio', 'l_botProfe', 'l_botCursos', 'l_botContacto', 'l_inicio', 'l_profe', 'l_cursos', 'l_contacto', 'l_tel', 'l_lenguaje');
        foreach ($props as $var) {
            $val = $$var;
            $val = str_replace("#home", $h->get('home'), $val);
            $val = str_replace("#cursos", $h->get('cursos'), $val);
            $val = str_replace("#profe", $h->get('profe'), $val);
            $val = str_replace("#contacto", $h->get('contacto'), $val);

            $this->set($var, $val);
        }
    }
}
