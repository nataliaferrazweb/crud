<?php
/**
 * User: Natalia Ferraz
 */

namespace Core;

class ConfigController
{

    private $url;
    private $uri;
    private $urlController;
    private $urlMethod;

    public function __construct()
    {

        if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->uri = explode("/", $this->url);

            $this->urlController = $this->uri[0];
            if(isset($this->uri[1])){
                $this->urlMethod = $this->uri[1];
            } else {
                $this->urlMethod = 'index';
            }


        } else {
            $this->urlController = "Home";
            $this->urlMethod = 'index';
        }

    }

    public function load(){
        $classController = "\\App\\Controllers\\" . ucfirst($this->urlController);
        $loadClass = new $classController;
        $loadClass->index();
    }
}