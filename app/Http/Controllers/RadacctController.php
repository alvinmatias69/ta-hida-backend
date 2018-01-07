<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RadacctController extends Controller {
  public function get () {
    $radacct = DB::table('radacct')
                  ->leftJoin('lokasi_mac', 'radacct.calledstationid', '=', 'lokasi_mac.calledstationid')
                  ->select('username', 'lokasi', 'callingstationid', 'acctstarttime')
                  ->get();

    return response()->json($radacct);
  }

  public function find (Request $request) {
    $radacct = DB::table('radacct')
                  ->leftJoin('lokasi_mac', 'radacct.calledstationid', '=', 'lokasi_mac.calledstationid')
                  ->select('username', 'lokasi', 'callingstationid', 'acctstarttime')
                  ->where('username', 'like', '%' . $request->input('username') . '%')
                  ->get();

    return response()->json($radacct);
  }
}
