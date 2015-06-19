<?php

/**
 * The Loader loads stuff that is used by other parts of the system
 * by CFV
 */
class Loader {

    protected static $dirs = array();
    protected static $exts = array();

    /**
     * Bind the autoloader to PHPs class loading mechanism
     */
    public static function register() {
        spl_autoload_register("Loader::loadClass");
    }

    /**
     * Add a directory to look into when loading classes
     * @param string $dir
     */
    public static function addLookupDirectory($dir) {
        if (!is_dir($dir)) {
            throw new BadMethodCallException("$dir is not a directory");
        }
        self::$dirs[] = $dir;
    }

    /**
     * Add an extension for a type of thing to be loaded by the loader
     * @param string $type
     * @param string $extension      */
    public static function addExtension($type, $extension) {
        self::$exts[$type][] = $extension;
    }

    /**
     * Gets either the extensions of a given type of thing or all of the registered ones
     * @param string $type
     * @return array
     */
    public static function getExtension($type = 'none') {
        if ($type !== 'none') {
            if (isset(self::$exts[$type])) {
                return self::$exts[$type];
            }
            return array();
        }
        return self::$exts;
    }

    /**
     * Get all the registered lookup directories
     * @return array
     */
    public static function getLookupDirectories() {
        return self::$dirs;
    }

    /**
     * Loads a given item if it actually is somewhere and is recognizable by the loader
     * @param string $item
     * @param string $type (Optional, defaults to "class"
     * @return boolean
     */
    public static function loadItem($item, $type = 'class') {
        $dirs = self::getLookupDirectories();
        $exts = self::getExtension($type);
        $name = self::getPSR0Name($item);
        //echo "loader: $name<br>";
        foreach ($dirs as $dir) {
            foreach ($exts as $ext) {
                $file = $dir . DIRECTORY_SEPARATOR . $name . ".$ext";
                //echo "loader: $file<br>";
                if (is_file($file)) {
                    return require_once($file);
                }
            }
        }
        return false;
    }

    /**
     * Loads a given item if it actually is somewhere and is recognizable by the loader
     * @param string $item
     * @param string $type (Optional, defaults to "class"
     * @return boolean
     */
    public static function IsItem($item, $type = 'class') {
        $dirs = self::getLookupDirectories();
        $exts = self::getExtension($type);
        $name = self::getPSR0Name($item);
        foreach ($dirs as $dir) {
            foreach ($exts as $ext) {
                $file = $dir . DIRECTORY_SEPARATOR . $name . ".$ext";
//                echo $file.'<br>';
                if (is_file($file)) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Loads a class given its name
     * @param string $class
     * @return boolean
     */
    public static function loadClass($class) {
        return self::loadItem($class);
    }

    /**
     * Get the PSR0 compliant name of a thing.
     * @param string $item
     * @return string 
     */
    public static function getPSR0Name($item) {
        $item = ltrim($item, '\\');
        $file_name = '';
        $namespace = '';
        if ($last_name_pos = strripos($item, '\\')) {
            $namespace = substr($item, 0, $last_name_pos);
            $item = substr($item, $last_name_pos + 1);
            $file_name = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }
        $file_name .= str_replace('_', DIRECTORY_SEPARATOR, $item);
        return $file_name;
    }

    /**
     * Loads the item required by a path in case the file exists
     * @param string $path path to file
     * @return require with the file | false in case of non existance of asked file
     */
    public static function LoadItemByPath($path) {
        if (file_exists($path)) {
            Debuguie::AddMsg("Loader - LoadItemByPath()", "return require($path)", "success");
            return require_once($path);
        } else {
            Debuguie::AddMsg("Loader - LoadItemByPath()", "no existe el archivo ($path)", "warning");
            return false;
        }
    }
    
    /**
     * Ej: (pags_blog, nombreDeEntrada, php, c1)
     * Ej: (pags_blog, nombreDeEntrada, html)
     * @param string $place namespace, carpetas separadas por "_" (ej: pags_blog da pags/blog)
     * @param string $object nombre del archivo (ej: miEntradaDeBlog)
     * @param string $extension php|html|etc
     * @param string $extraArg se agrega luego de el objeto y antes de la extención (ej: comentarios5)
     * @return string un path a un arch
     */
    public static function LoadObjectPath($place, $object, $extension, $extraArg = "") {
        $place = str_replace('_', DS, $place);
        $r = APP_ROOT.DS.(($place != "")? $place.DS : "").$object.(($extraArg != "")? ".$extraArg" : "").".$extension";
        //Debuguie::AddMsg("Loader - LoadObjectPath()", "return: $r", "info");
        return $r;
    }

}