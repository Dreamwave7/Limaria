<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PriceController extends Controller
{
    public function medical()
    {
        return view('price.medical');
    }

    public function veterinary()
    {
        return view('price.veterinary');
    }

    public function food()
    {
        return view('price.food');
    }

    public function priceDownload(Request $request)
    {
        $priceName = $request->get("priceName");

        if(!Storage::disk('price')->exists($priceName . ".pdf"))
        {
            return redirect()->back();
        }

        return Storage::disk('price')->download(str($priceName).".pdf");

    }
}
