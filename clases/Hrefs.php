<?php
/**
 * User: gabix
 * Date: 22/06/15
 * Time: 17:08
 */
class Hrefs {

    private $home = "";
    private $cursos = "";
    private $profe = "";
    private $contacto = "";

    private function set($prop, $val) {
        if (!isset($this->$prop)) die("Err: No existe la propiedad $prop, en get.");
        $this->$prop = $val;
    }

    public function get($prop) {
        if (!isset($this->$prop)) die("Err: No existe la propiedad $prop, en get.");
        return $this->$prop;
    }

    public function LlenarParaIcoclick() {
        $this->set('home', 'href="#" onclick="icoclick(0); return false;"');
        $this->set('cursos', 'href="#" onclick="icoclick(1); return false;"');
        $this->set('profe', 'href="#" onclick="icoclick(2); return false;"');
        $this->set('contacto', 'href="#" onclick="icoclick(3); return false;"');
    }

    public function LlenarParaBootstrapTabs() {
        $this->set('home', 'href="#d_home" data-toggle="tab"');
        $this->set('cursos', 'href="#d_cursos" data-toggle="tab"');
        $this->set('profe', 'href="#d_profe" data-toggle="tab"');
        $this->set('contacto', 'href="#d_contacto" data-toggle="tab"');
    }

}
