<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;

class FeeCategoryController extends Controller
{
    public function ViewFeeCat()
    {
        $data['allData'] = FeeCategory::all();
        return view('backend.setup.fee_category.view_fee_cat', $data);
    }


    public function FeeCategoryAdd()
    {
        return view('backend.setup.fee_category.add_fee_cat');
    }

    public function FeeCategorytStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required | unique:fee_categories,name',

        ]);

        $data = new FeeCategory();
        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Fee Category Inserted Succesfully',
            'alert-type' => 'info'

        );
        return redirect()->route('fee.category.view')->with($notification);


        // return view('backend.setup.student_class.add_class');
    }
    public function StudentFeeEdit($id)
    {
        $editData = FeeCategory::find($id);
        return view('backend.setup.fee_category.edit_fee_cat', compact('editData'));
    }

    public function StudentFee_Cat_Update(Request $request, $id)
    {
        $data = FeeCategory::find($id);

        $validatedData = $request->validate([
            'name' => 'required | unique:fee_categories,name,' . $data->id

        ]);


        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Fee Category  Updated Succesfully',
            'alert-type' => 'info'

        );
        return redirect()->route('fee.category.view')->with($notification);
    }

    public function StudentFee_Cat_Delete($id)
    {
        $user = FeeCategory::find($id);
        $user->delete();



        $notification = array(
            'message' => 'Fee Category Deleted Succesfully',
            'alert-type' => 'info'

        );
        return redirect()->route('fee.category.view')->with($notification);
    }
}
