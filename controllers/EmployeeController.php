<?php
class EmployeeController extends Controller
{

    public function __construct()
    {
        parent::__construct();
  
    }
    public function index()
    {
        $this->view->js = array('employee/js/default');
		$this->view->css = array('employee/css/default');
        $this->view->render('employee/index');
    }
}
?>