<?php 

namespace App\Controllers;
use App\Models\MsDashboard;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->cek_login();
        $this->MsDashboard = new MsDashboard();
    }
     
    public function index()
    {
        if($this->cek_login() == FALSE){
            session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
            return redirect()->to('/auth/login');
        }
        $data['total_transaction']  = $this->MsDashboard->getCountTrx();
        $data['total_product']      = $this->MsDashboard->getCountProduct();
        $data['total_category']     = $this->MsDashboard->getCountCategory();
        $data['total_user']         = $this->MsDashboard->getCountUser();
        $data['latest_trx']         = $this->MsDashboard->getLatestTrx();
 
        $chart['grafik']            = $this->MsDashboard->getGrafik();
 
        echo view('dashboard', $data);
        echo view('layouts/footer', $chart);
    }    
}