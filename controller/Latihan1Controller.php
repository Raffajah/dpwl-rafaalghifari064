<?php
class Latihan1Controller extends controller
{
    public function index()
    {
        $data['datamhs'] = $this->load->model('Latihan1Model')->getDataMhs();
        $this->load->view('Latihan1View', $data);
    }
}
?>