<?php
ob_start();
include_once 'Model.php';

class Mycontrol extends Model
{
    public function __construct()
    {
        parent::__construct();
        $url = $_SERVER['PATH_INFO'];
        // echo $url;
        switch($url)
        {  
            case '/Addemployee':
                                    
                // $data = $this->SelectAll("country");
                //insert data
                if(isset($_POST['submit']))
                {
                    $name = $_POST['Name'];
                    $mname = $_POST['Name1'];
                    $lname = $_POST['Name2'];
                    $pno = $_POST['Pno'];
                    $city = $_POST['City'];

                    $data = array('fname'=>$name,
                                  'mname'=>$mname,
                                  'lname'=>$lname,
                                  'mobile_no'=>$pno,
                                  'city'=>$city);
                                //   print_r($data);exit;
                    $this->InsertData("employee",$data);
                }
                include_once 'Addemployee.php';
                
                break;
        }
    } 
}
$obj = new Mycontrol;
ob_flush();
?>