<?php

namespace App\Http\Controllers;

use App\Radacct;
use Illuminate\Http\Request;

class RadacctController extends Controller {
  public function get () {
    //$radacct = Radacct::all();
    $radacct = Radacct::select('username', 'calledstationid', 'callingstationid', 'acctstarttime')->get();

    return response()->json($radacct);
  }

  public function find (Request $request) {
    $radacct = Radacct::select('username', 'calledstationid', 'callingstationid', 'acctstarttime')->where('username', 'like', '%' . $request->input('username') . '%')->get();

    return response()->json($radacct);
  }
}
