<?php

namespace App\Http\Controllers;

use App\Model\Cusroner;
use Illuminate\Http\Request;

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
}
