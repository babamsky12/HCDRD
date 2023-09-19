<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
  
        return view('products.index', compact('product'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
 
        return redirect()->route('products')->with('success', 'Product added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'Communication updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'Communication deleted successfully');
    }

    public function search(Request $request)
{
    $searchText = $request->input('query');

    // Check if the search query is empty or equals "0"
    if ($searchText === null || trim($searchText) === "" || $searchText === "0") {
        $products = []; // Return an empty array or collection
    } else {
        // Use the where clause to filter products based on your search criteria
        $products = Product::where('subject', 'LIKE', '%' . $searchText . '%')
            ->orWhere('requesting_party', 'LIKE', '%' . $searchText . '%')
            ->orWhere('address', 'LIKE', '%' . $searchText . '%')
            ->orWhere('reference_no', 'LIKE', '%' . $searchText . '%')
            ->get();
    }

    return view('products.search', compact('products', 'searchText'));
}



}