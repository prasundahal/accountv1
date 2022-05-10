<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class ActivityStatusController extends Controller
{
    public function changeActivityStatus(Request $request)
    {
        $forms = Form::with('activityStatus')->find($request->id);
        if(isset($forms)){
            $forms->update(['status_id' => $request->status]);
            return response()->json(['status' => 'ok', 'message' => 'Status Updated', 'data' => $forms], 200);
        }else{
            return response()->json(['status' => 'failed', 'message' => 'Status Update Failed.'], 422);
        }
    }
}
