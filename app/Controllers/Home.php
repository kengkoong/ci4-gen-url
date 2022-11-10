<?php

namespace App\Controllers;

use App\Models\GenerateShortUrlModel;
use CodeIgniter\HTTP\Response;

class Home extends BaseController
{
    public function index()
    {
        $urls = $this->getAllUrl();      
        $data['urls'] = $urls;
       return view('url_lists', $data);
    }

    public function getAllUrl()
    {
        $GenUrlModel = new GenerateShortUrlModel();
        $urls= $GenUrlModel->getAll();             
        
        return $urls;

    }


    public function createUrl(){
        return view("url_create");
    }

    public function showEditUrl($id = null) {
        $GenUrlModel = new GenerateShortUrlModel();
        $data['url_obj'] = $GenUrlModel->where('id', $id)->first();  
       return view('url_edit', $data);
    }

    public function editUrl(){
        return view("url_edit");
    }

    public function redirectUrl($shortCode){   
        $GenUrlModel = new GenerateShortUrlModel();
        $item = $GenUrlModel->getByCode($shortCode);
        $longUrl = $item["long_url"];   

        
        $calHits = $item['hits']+1;
        $data = ['hits' => $calHits];
        $GenUrlModel->updateData($shortCode, $data);
        return redirect()->to($longUrl);        
    }

    public function scanQR($shortCode){   
        $GenUrlModel = new GenerateShortUrlModel();
        $item = $GenUrlModel->getByCode($shortCode);
        $longUrl = $item["long_url"];   
        $newUrl = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$longUrl."&choe=UTF-8";
        
      
        return redirect()->to($newUrl);        
    }


    public function delete($id = null) {
        $GenUrlModel = new GenerateShortUrlModel();
        $data['user'] = $GenUrlModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/'));
    }
}
