<?php
//require_once 'model/Latihan1Model.php';
class Latihan1Controller{
    public function index()
    {
        $model = new Latihan1Model();
        $data = $model->getDataMhs();
        require './view/Latihan1View.php';}
}
?>