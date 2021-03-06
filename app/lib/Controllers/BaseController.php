<?php

namespace Company\Controllers;

abstract class BaseController {

    protected abstract function getResourceName();

    public function render($template, $data) {
        $template = $this->getResourceName() . "/$template";
        include __DIR__ . "/../../templates/layout/application.php";
    }

    public function index() {
        $mapper = $this->getMapperInstance();
        $models = $mapper->all();
        $this->render('index.php', $models);
    }

    public function view($column_name, $id) {
        $mapper = $this->getMapperInstance();
        $model = $mapper->find($column_name, $id);
        $this->render('view.php', $model);
    }

    private function getMapperInstance() {
        $class = 'Company\Mappers\\' . ucfirst($this->getResourceName()) . "Mapper";
        return new $class();
    }
}
