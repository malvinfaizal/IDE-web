<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Url_model extends CI_Model
{

    private $_table = "shrt_url";

    public $id;
    public $url;
    public $token;

    public function rules()
    {
        return [
            ['field' => 'url',
            'label' => 'url',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($url)
    {
        return $this->db->get_where($this->_table, ["url" => $url])->row();
    }

    public function save()
    {
        $newToken = generateRandomString();
        $post = $this->input->post();
        $this->url = $post["url"];
        $this->token = $post[$newToken];
        return $this->db->insert($this->_table, $this);
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function delete($url)
    {
        return $this->db->delete($this->_table, array("url" => $url));
    }
}