<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loader;

class CsvImportController extends Controller
{
    public function showUploadForm()
    {
        return view('upload_form');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('csv_file')) {
            $path = $request->file('csv_file')->getRealPath();
            $data = array_map('str_getcsv', file($path));

            foreach ($data as $row) {
                Loader::create([
                    'name' => $row[1],
                    'lastname' => $row[2],
                    'address' => $row[3],
                    'university_id' => $row[4],
                    'mobile' => $row[5],
                    'status' => $row[6],
                    // Map other columns accordingly
                ]);
            }

            return redirect()->back()->with('success', 'CSV data imported successfully.');
        }

        return redirect()->back()->with('error', 'No file selected.');
    }
}
