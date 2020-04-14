<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\FlowerModel;
 
class FlowerController extends Controller
{
    public function index()
    {    
        $model = new FlowerModel();
        $data['flowers'] = $model->orderBy('nume', 'ASC')->findAll();
        return view('flowers_view', $data);
    }   
    public function metoda2()
    {    
        $model = new FlowerModel();
        $data['flowers'] = $model->orderBy('nume', 'ASC')->findAll();
        return view('flowers_view2', $data);
    }
    public function view($id=NULL){
        $model = new FlowerModel();
        $data['flower'] = $model->where('id', $id)->first();
 
     return view('single_flower_view', $data);
    }
}
