<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GenerateShortUrlModel;
use CodeIgniter\HTTP\Response;

class GenerateShortUrl extends BaseController
{
    protected static $chars = "abcdfghjkmnpqrstvwxyz|ABCDFGHJKLMNPQRSTVWXYZ|0123456789";
    protected static $table = "short_urls";
    protected static $checkUrlExists = false;
    protected static $codeLength = 7;

    
    public function index()
    {
      
        $longUrl = "www.google.com";
        $code = $this->urlToShortCode($longUrl);     
      

       $this->getByCode("DtptdT0");
       

        //echo "http://localhost:8081/".$code;
        
    }



    public function getByCode($code)
    {
        $GenUrlModel = new GenerateShortUrlModel();
        $item = $GenUrlModel->getByCode($code);
        echo "data=>".$item["long_url"];

        return redirect()->to($item["long_url"]);
    }

	public function save($longUrl, $code) {
		// $first_name	= $this->request->getPost('long_url');
		// $last_name	= $this->request->getPost('txtLastName');
		// $email		= $this->request->getPost('txtEmail');
        
        $GenUrlModel = new GenerateShortUrlModel();
		$data = [
			'long_url'		=> $longUrl,
			'short_code'		=> $code,
			'hits'			=> 1,
			'created'			=> date("Y-m-d h:i:sa"),
		];

		$result = $GenUrlModel->add($data);
		if($result) {
			echo "New user is added successfully.";
		} else {
			echo "Something went wrong";
		}
	}

    public function urlToShortCode(){ 
        $url = $this->request->getPost("long_url");
        $shortCode = $this->createShortCode($url);   
        $data["result"] = $shortCode;

      
        return $this->response->redirect(site_url('/'));
    }   
    
    protected function createShortCode($url){
        $shortCode = $this->generateRandomString(self::$codeLength);   
        $id = $this->save($url, $shortCode);    
        return $shortCode;
    }

    public function edit() {
        $GenUrlModel = new GenerateShortUrlModel();
        $id = $this->request->getVar('id');
        $longUrl = $this->request->getVar('long_url');
        $shortCode =  $this->generateRandomString(self::$codeLength);  

        $data = [
            'long_url' => $longUrl,            
            'short_code' => $shortCode,            
        ];

        echo $id;
        echo $longUrl;
        echo $shortCode;
        
        print_r($data);
        $GenUrlModel->updateDataById($id, $data);
        return $this->response->redirect(site_url('/'));
    }

    protected function generateRandomString($length = 6){
        $sets = explode('|', self::$chars);
        $all = '';
        $randString = '';
        foreach($sets as $set){
            $randString .= $set[array_rand(str_split($set))];
            $all .= $set;
        }
        $all = str_split($all);
        for($i = 0; $i < $length - count($sets); $i++){
            $randString .= $all[array_rand($all)];
        }
        $randString = str_shuffle($randString);
        return $randString;
    }  
    
    

    
}
