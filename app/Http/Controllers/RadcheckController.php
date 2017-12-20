<?php

namespace App\Http\Controllers;

use App\Radcheck;
use Illuminate\Http\Request;

class RadcheckController extends Controller {
  public function submit (Request $request) {
    $radcheck = new Radcheck;
    $radcheck->username = $request->username;
    $radcheck->attribute = $request->attribute;
    $radcheck->value = $request->value;
    $radcheck->save();
    return response()->json(['code' => 'success']);
  }
}
