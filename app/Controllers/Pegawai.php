<?php
namespace App\Controllers;
use App\Models\ModelPegawai;  // Add this import

class Pegawai extends BaseController
{
    private ModelPegawai $model;  // Declare the property
    
    public function __construct()
    {  
        // Use dependency injection
        $this->model = new ModelPegawai();
    }
    
    public function simpan()
    {
        return "Data Berhasil Disimpan";
    }
    public function index()
    {
        return view('Pegawai_view');
    }
}