<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Salon_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class Salon_model extends CI_Model
{
  private $_client;

  public function __construct()
  {
    $this->_client = new Client([
      'base_uri' =>'http://localhost:8080/rest-server-salon/index.php/'
        
    ]);
  }

  //tampildatasalon
  public function tampil_salon()
  {

    $response = $this->_client->request('GET','salon',[
        'query' =>[
          'API-TOKEN' => '12345'
        ]
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result['data'];
 
  }

  public function getSalonById($id)
  {
    return $this->db->get_where('tb_salon', ['ID_salon' => $id])->row_array();
  }

  public function simpan_data()
  {
    $data = [
      //  "ID_salon" => $this->input->post('ID_salon', true),
      "salon" => $this->input->post('salon', true),
      "kota" => $this->input->post('kota', true),
      "alamat" => $this->input->post('alamat', true),
      "telepon" => $this->input->post('telepon', true),
      'API-TOKEN' => '12345'
    ];

    $response = $this->_client->request('POST','salon',[
      'form_params' => $data
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result;

  }

  public function edit_data()
  {
    $data = [
      //  "ID_salon" => $this->input->post('ID_salon', true),
      "salon" => $this->input->post('salon', true),
      "kota" => $this->input->post('kota', true),
      "alamat" => $this->input->post('alamat', true),
      "telepon" => $this->input->post('telepon', true),
      "ID" => $this->input->post('id', true),
      'API-TOKEN' => '12345',
      
    ];

    $response = $this->_client->request('PUT','salon',[
      'form_params' => $data
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result;
  }

  public function hapus_data($id)
  {
    $response = $this->_client->request('DELETE','salon',[
      'form_params' =>[
        'API-TOKEN' => '12345',
        'ID' => $id
      ]
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result;

  }
}

/* End of file Salon_model.php */
/* Location: ./application/models/Salon_model.php */