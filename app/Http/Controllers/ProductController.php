<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeProductsRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __constructor()
    {
        // $this->middleware('auth')->except('store');
    }

    public function index()
    {
        $products = Product::latest()->paginate(10);

        return view('admin.pages.products.index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    public function store(storeProductsRequest $request)
    {
        // dd($request)->only('description')
        // dd($request->only['name', 'description'])
        // dd($request->all());
        // dd($request->description); 
        // dd($request->has('description'));
        // dd($request->input('teste', 'Se não tiver valor, esse será o valor padrão'));
        // dd($request->except(['description', 'name']));

        /* Pegando arquivo */
        // dd($request->file('foto'));

        /* Verificar se o arquivo é válido */
        // dd($request->file('foto')->isValid());

        /* Enviando arquivo para a pasta storage/app/products */
        // if($request->foto->isValid()){
        //     dd($request->foto->store('products')); 
        // }


        /* Validação */
        // $request->validate([
        //     'name' => 'required|min:3|max:255',
        //     'description' => 'nullable|min:3|max:1000',
        //     'foto' => 'required|image'
        // ]);

        $data = $request->only('name', 'price', 'description');
        Product::create($data);

        // $newNameImg = '';
        // if ($request->foto->isValid()) {
        //     $newNameImg = $request->foto->store('products');
        // }

        // $product = new Product;
        // $product->name = $request->name;
        // $product->description = $request->description;
        // $product->price = $request->price;
        // $product->image = $newNameImg;
        // $product->save();

        return redirect()->route('products.index');
    }

    public function show($id)
    {


        $product = Product::find($id);

        //Verificar se existe algum produto, caso não exista, eu volto ele para página que estava.
        if (!$product) {
            return redirect()->back();
        }
        return view('admin.pages.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.pages.products.edit', compact('product'));
    }


    public function update(storeProductsRequest $request, $id)
    {
        //Verificar se existe o produto pelo id
        if(!$product = Product::find($id))
            return redirect()->back();

        $product->update($request->all());
            
        return redirect()->route('products.index');
    }


    public function destroy($id)
    {   
        //Verificar se o produto existe
        $product = Product::find($id);

        if(!$product)
            return redirect()->back();
        
        $product->delete();

        return redirect()->route('products.index');
    }

    public function search(Product $productModel, Request $request){

        /* Pegando todos os dados do filtro */
        $filters = $request->except('_token');
        
        $products = $productModel->search($request->filter);
 
        return view('admin.pages.products.index', compact('products', 'filters'));
    }
}
