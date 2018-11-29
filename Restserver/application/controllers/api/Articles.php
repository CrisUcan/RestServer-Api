<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';
 
class Articles extends \Restserver\Libraries\REST_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Article_model');
    }

    /**
     * Add new Article with API
     * -------------------------
     * @method: GET
     */
    public function users_get()
    {
        $data = $this->Article_model->all();
        $this->response($data);


    }
}