<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Salon
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Salon extends CI_Controller
{
  public function __construct()
    {
        parent::__construct();
        $this->load->model('Salon_model');
    }

    public function index()
    {

        $data['salon'] = $this->Salon_model->tampil_salon();
        $this->load->view('v_data_salon', $data);

    }
    public function data_salon()
    {

        $data['salon'] = $this->Salon_model->tampil_salon();
        $this->load->view('v_data_salon', $data);

    }


    public function tambah_salon()
    {

          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->load->library('session');

          $this->form_validation->set_rules('salon','Salon','required');
          $this->form_validation->set_rules('kota','Kota','required');
          $this->form_validation->set_rules('alamat','Alamat','required');
          $this->form_validation->set_rules('telepon','Telepon','required');
          if($this->form_validation->run()== false)
          {
            $this->load->view('v_tambah_salon');
          }
          else
          {
              $this->Salon_model->simpan_data();
              $this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
              Data Berhasil Ditambahkan
            </div>');
              redirect('Salon/data_salon');
          }
      }

      public function edit_salon($id)
    	{
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('session');
    
            
            $data['salon'] = $this->Salon_model->getSalonById($id);

            $this->form_validation->set_rules('salon','Salon','required');
            $this->form_validation->set_rules('kota','Kota','required');
            $this->form_validation->set_rules('alamat','Alamat','required');
            $this->form_validation->set_rules('telepon','Telepon','required');
            
        if ($this->form_validation->run() == false) {
          $this->load->view('v_edit_salon', $data);
      } else {
          $this->Salon_model->edit_data();
          $this->session->set_flashdata('flash', 'Diubah');
          redirect('Salon/data_salon');
      }
        }

        public function hapus_salon($id)
        {
            $this->load->library('session');
            $this->Salon_model->hapus_data($id);
            $this->session->set_flashdata('message','<div class="alert alert-info" role="alert">
            Data Berhasil Dihapus
          </div>');
            redirect('Salon/data_salon');
        }
}


/* End of file Salon.php */
/* Location: ./application/controllers/Salon.php */