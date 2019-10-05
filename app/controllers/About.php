<?php

class About extends Controller
{
    public function index($nama = 'Mahdy', $jurusan = 'Teknik Informatika', $angkatan = '2017')
    {
        $data['nama'] = $nama;
        $data['jurusan'] = $jurusan;
        $data['angkatan'] = $angkatan;
        $data['judul'] = 'Halaman About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Halaman Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
