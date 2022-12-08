<?php
ob_start();
include_once 'Model.php';

class Mycontrol extends Model
{
    public function __construct()
    {
        parent::__construct();
        $url = $_SERVER['PATH_INFO'];
        // $data = $this->SelectAll("country");
        //  echo $url;
        switch($url)
        {
                case '/Showemployee':
                    
                    $user1 = $this->SelectAll('employee');
                    include_once 'employee.php';
                    
                    break;
                
                
                                
            
        }
    } 
}
$obj = new Mycontrol;
ob_flush();
?>