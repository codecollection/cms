<?php

/**
 * app的调用接口的父控制器
 */
class App_Controller extends CAdminBase {

    protected $bindModel = "";

    public $subject = "TF";

    public $schId = 2;
    public function __construct() {
        parent::__construct();

        if (!empty($this->controllerId)) {

            $this->load->model("app/" . $this->controllerId . '_model', $this->controllerId);
            $this->bindModel = $this->{$this->controllerId};
        }

        if($this->input->get_post('subject')){
            $this->subject = $this->input->get_post('subject');
        }
    }

}
