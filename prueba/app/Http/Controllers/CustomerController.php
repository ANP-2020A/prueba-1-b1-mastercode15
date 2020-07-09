<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all();
    }
    public function show($id)
    {
        return Customer::find($id);
    }
    public function store(Request $request)
    {
        return Customer::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $article = Customer::findOrFail($id);
        $article->update($request->all());
        return $article;
    }
    public function delete(Request $request, $id)
    {
        $article = Customer::findOrFail($id);
        $article->delete();
        return 204;
    }
}
