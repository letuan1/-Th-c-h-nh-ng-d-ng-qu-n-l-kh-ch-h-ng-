<?php

namespace App\Http\Controllers;

use App\Model\Cusroner;
use Illuminate\Http\Request;
use Session;

class CusromerController extends Controller
{
    public function index()
    {
        $customers = Cusroner::paginate(10);
        return view('listCostomerManagement', ['customers' => $customers]);

    }

    public function delete($id) {
        $customer = Cusroner::find($id)
            ->delete();
        Session::flash('success', 'Xóa khách hàng thành công');
        return redirect()->route('list');
    }

    public function update(Request $request, $id) {
        $update = Cusroner::where('id',$id)
            ->update([
            'name' => "$request->name",
            'dob' => "$request->dob",
            'email' => "$request->email",
        ]);

        return redirect(route('list'));
    }

    public function getDataId($id) {
        $getData = Cusroner::find($id);
        return view('update',
            [
                'getData' => $getData,
                'id' => $id,
            ]);
    }

    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return redirect()->back();
    }

    public function viewInsert() {
        return view('insert');
    }
    public function insert(Request $request) {
        $customer = new Cusroner();
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->dob      = $request->input('dob');
        $customer->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới khách hàng thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('list');
    }
}
