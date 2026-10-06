<?php
class Latihan1Controller extends controller
{
    public function index()
    {
        $data['datamhs'] = $this->load->model('Latihan1Model')->getDataMhs();
        $this->session->set_unset_userdata('nmuser', 'Rafa Alghifari');
        $data['nmuser'] = $this->session->userdata('nmuser');
        $this->load->view('Latihan1View', $data);
    }
}
?>