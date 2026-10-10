<?php
class Latihan1Controller extends controller
{
    public function index()
    {
        $data['datamhs'] = $this->load->model('Latihan1Model')->getDataMhs();
        $this->session->set_userdata('nmuser', 'Rafa Alghifari');
        $data['nama_user'] = $this->session->userdata('nmuser');
        $this->load->view('Latihan1View', $data);
    }
}
?>