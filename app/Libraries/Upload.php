<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Upload {

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->library('upload');
    }

    public function do_upload($field_name, $config)
    {
        $this->ci->upload->initialize($config);

        if ($this->ci->upload->do_upload($field_name)) {
            return $this->ci->upload->data();
        } else {
            return $this->ci->upload->display_errors();
        }
    }

}
