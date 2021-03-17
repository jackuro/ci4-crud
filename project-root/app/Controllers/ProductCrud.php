<?php 
namespace App\Controllers;
use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductCrud extends Controller
{
    // show products list
    public function index(){
        $productModel = new ProductModel();
        $data['product'] = $productModel->orderBy('id', 'DESC')->findAll();
        return view('product_view', $data);
    }

    // add product form
    public function create(){
        return view('add_product');
    }
 
    // insert data
    public function store() {
        $productModel = new ProductModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'description'  => $this->request->getVar('description'),
            'price'  => $this->request->getVar('price'),
            'created_at'  => date('Y-m-d H:m:s'),
        ];
        $productModel->insert($data);
        return $this->response->redirect(site_url('/products-list'));
    }

    // show single product
    public function singleProduct($id = null){
        $productModel = new ProductModel();
        $data['product_obj'] = $productModel->where('id', $id)->first();
        return view('edit_view', $data);
    }

    // update product data
    public function update(){
        $productModel = new ProductModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'description'  => $this->request->getVar('description'),
            'price'  => $this->request->getVar('price'),
            'updated_at'  => date('Y-m-d H:m:s'),
        ];
        $productModel->update($id, $data);
        return $this->response->redirect(site_url('/products-list'));
    }
 
    // delete product
    public function delete($id = null){
        $productModel = new ProductModel();
        $data['product'] = $productModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/products-list'));
    }    
}