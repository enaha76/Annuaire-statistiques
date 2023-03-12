<?php

namespace App\Http\Controllers;
use App\Models\Headertablemap;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
include_once('./app/Http/my_functions/funs.php');

class ArchiveController extends Controller
{
    



   
    
    public function insert(Request $request)
    {
        $form = $request->validate([
            'file' => 'required'
        ]);
    
        $uploaded_file = $request->file('file');
        $file_contents = file_get_contents($uploaded_file);
    
        // Get the sheet names and their corresponding DataFrames
        $excel_data = Excel::load($uploaded_file, null, null, true)->get();
    
        // Get the sheet name and table name from the first sheet
        $first_sheet_df = Excel::load($uploaded_file, null, null, true)->first();
        $sheet_name_col = $first_sheet_df->get()[0];
        $table_name_col = $first_sheet_df->get()[2];
    
    
        // Iterate over all sheets and extract headers
        foreach ($excel_data as $sheet_name => $sheet_data) {
            if ($sheet_name == "Feuil1") {
                continue;
            }
            $sheet_df = $sheet_data->first();
            $row_index = $sheet_name_col->search($sheet_name);
            $value = $first_sheet_df->get($row_index, 2);
            if (!is_string($value)) {
                continue;
            }
            if (strpos($value, 'cand') !== false) {
                cand($sheet_df, $request->post('year'), $value);
            }
            if (strpos($value, 'etu') !== false) {
                etu($sheet_df, $request->post('year'), $value);
            }
            if (strpos($value, 'ensg') !== false) {
                ensg($sheet_df, $request->post('year'), $value);
            }
    ;
        }
    
        $header_table_map = Headertablemap::all();
        return view('upload', compact('header_table_map'));
    }
    
}
