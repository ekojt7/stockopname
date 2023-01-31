<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockopnameController extends Controller
{
    public function index()
    {
    
        $stock_opnames = DB::table('stockopnames')
                ->select('barangs.kode_barang','barangs.kategori','barangs.nama_barang','barangs.jumlah','stockopnames.jumlah_fisik')
                ->join('barangs', 'barangs.id', '=', 'stockopnames.id_barang')
                ->get();

        
        return view('stockopname', compact('stock_opnames'));
    }
}
