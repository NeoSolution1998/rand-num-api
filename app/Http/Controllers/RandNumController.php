<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RandNum;
use Illuminate\Support\Facades\Storage;

class RandNumController extends Controller
{
    public function index()
    {
        $numbers = RandNum::all();
        return $numbers->toJson();
    }

    public function generate()
    {
        $number = new RandNum();
        $randNum = rand(0, 100000);

        $number->number = $randNum;
        $number->save();
        return $number->toJson();
    }

    public function retrieve($id)
    {
        $number = RandNum::findOrFail($id);
        return $number->toJson();
    }

    public function report()
    {
       // Storage::delete('report.txt');
        $numbers = new RandNum();
        $report = $numbers->all()->where('created_at', ">", now()->startOfDay());
        Storage::disk('local')->put('report.txt', $report->toJson());
        return $report;
    }
}
