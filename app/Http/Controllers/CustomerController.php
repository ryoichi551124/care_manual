<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    //customer_index
    public function index(Request $request) 
    {
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['customers' => $customers, 'user' => $user];
        return view('customer.index', $param);
    }

    //customer_list
    public function list(Request $request)
    {
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['customers' => $customers, 'user' => $user];
        return view('customer.list', $param);
    }

    //customer_show
    public function show(Request $request)
    {
        $customer = Customer::find($request->id);
        $user = Auth::user();
        $param = ['customer' => $customer, 'user' => $user];
        return view('customer.show', $param);
    }

    //customer_create
    public function create(Request $request)
    {   
        $user = Auth::user();
        $param = ['user' => $user];
        return view('customer.create', $param);
    }

    public function add(Request $request)
    {
        $this->validate($request, Customer::$rules);
        $customer = new Customer;
        $form = $request->all();
        unset($form['_token']);
        $customer->fill($form)->save();
        return redirect('/customer/list');
    }

    //customer_edit_select
    public function edit_select(Request $request)
    {
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['customers' => $customers, 'user' => $user];
        return view('customer.edit_select', $param);
    }

    //customer_edit
    public function edit(Request $request)
    {
        $customer = Customer::find($request->id);
        $user = Auth::user();
        $param = ['form' => $customer, 'user' => $user];
        return view('customer.edit', $param);
    }

    public function update(Request $request)
    {
        $this->validate($request, Customer::$rules);
        $customer = Customer::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $customer->fill($form)->save();
        return redirect('/customer/edit_select');
    }

    //customer_delete
    public function delete(Request $request)
    {
        $customer = Customer::find($request->id);
        $user = Auth::user();
        $param = ['form' => $customer, 'user' => $user];
        return view('customer.del', $param);
    }

    public function remove(Request $request)
    {
        Customer::find($request->id)->delete();
        return redirect('/customer/edit_select');
    }

    //customer_selected
    public function selected(Request $request)
    {
        $customer = Customer::find($request->id);
        $user = Auth::user();
        $param = ['customer' => $customer, 'user' => $user];
        return view('customer.selected', $param);
    }
}
