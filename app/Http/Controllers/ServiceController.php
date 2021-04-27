<?php

namespace App\Http\Controllers;

use App\Service;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    //service_index
    public function index(Request $request)
    {
        $services = Service::all();
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['services' => $services, 'customers' => $customers, 'user' => $user];
        return view('service.index', $param);
    }

    //service_select_category
    public function select_category(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer_id = $request->id;
        $user = Auth::user();
        $param = ['customer_id' => $customer_id, 'customer' => $customer, 'user' => $user];
        return view('service.select_category', $param);
    }

    //service_create
    public function create(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer_id = $customer->id;
        $customer_name = $customer->name;
        $category = $request->cate;
        $user = Auth::user();
        $param = ['customer_id' => $customer_id, 'category' => $category,
                    'customer_name' => $customer_name, 'user' => $user];
        return view('service.create', $param);
    }

    public function add(Request $request)
    {
        $this->validate($request, Service::$rules);
        $service = new Service;
        $form = $request->all();
        unset($form['_token']);
        $customer_id = $request->customer_id;
        $id_url = 'customer/selected?id='.$customer_id;
        $service->fill($form)->save();
        return redirect($id_url);
    }

    //service_edit
    public function edit(Request $request)
    {
        $service = Service::find($request->id);
        $category = $request->cate;
        $user = Auth::user();
        $param = ['service' => $service, 'category' => $category, 'user' => $user];
        return view('service.edit', $param);
    }

    public function update(Request $request)
    {
        $this->validate($request, Service::$rules);
        $service = Service::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $service->fill($form)->save();
        $customer_id = $service->customer->id;
        $id_url = '/customer/selected?id='.$customer_id;
        return redirect($id_url);
    }

    //service_delete
    public function delete(Request $request)
    {
        $service = Service::find($request->id);
        $category = $request->cate;
        $user = Auth::user();
        $param = ['form' => $service, 'category' => $category, 'user' => $user];
        return view('service.del', $param);
    }

    public function remove(Request $request)
    {
        $service = Service::find($request->id);
        if ($request->category=='wake')
            $service->wakeup = '';
        elseif ($request->category=='bed')
            $service->bedtime = '';
        elseif ($request->category=='feed')
            $service->feeding = '';
        elseif ($request->category=='bath')
            $service->bathing = '';
        elseif ($request->category=='other')
            $service->others = '';
        $service->save();
        $customer_id = $service->customer->id;
        $id_url = '/customer/selected?id='.$customer_id;
        return redirect($id_url);
    }

    //service_select
    public function select(Request $request)
    {
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['customers' => $customers, 'user' => $user];
        return view('service/select', $param);
    }


    //サービス別一覧表示
    //service_wakeup
    public function wakeup(Request $request)
    {
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['customers' => $customers, 'user' => $user];
        return view('service/wakeup', $param);
    }
    //service_bedtime
    public function bedtime(Request $request)
    {
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['customers' => $customers, 'user' => $user];
        return view('service/bedtime', $param);
    }
    //service_feeding
    public function feeding(Request $request)
    {
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['customers' => $customers, 'user' => $user];
        return view('service/feeding', $param);
    }
    //service_bathing
    public function bathing(Request $request)
    {
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['customers' => $customers, 'user' => $user];
        return view('service/bathing', $param);
    }
    //service_others
    public function others(Request $request)
    {
        $customers = Customer::all();
        $user = Auth::user();
        $param = ['customers' => $customers, 'user' => $user];
        return view('service/others', $param);
    }
}
