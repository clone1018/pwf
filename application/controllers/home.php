<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Home';
        $data['content'] = $this->load->view('home', $data, true);

        $this->load->view('layouts/default');
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
