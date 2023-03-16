<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
include_once('../app/Http/my_functions/funs.php');

class ArchiveController extends Controller
{
    
    public function up(Request $request)
    {
        
    
        
            try {
                $data=$request->json()->all();
                $i = 0; 

                foreach ($data as $key => $value) {
                    if (!is_string($key)) {
                        continue;
                    }
                    if (strpos($key, 'cand') !== false) {
                       cand($value, $request->post('year'), $key);
                    }
                    // if (strpos($key, 'etu') !== false) {
                    //     etu($value, $request->post('year'), $key);
                    // }
                    // if (strpos($key, 'ensg') !== false) {
                    //     ensg($value, $request->post('year'), $key);
                    // }
                }
            











                \Session::flash('success', 'Users uploaded successfully.');
                return redirect()->back();
            } catch (\Exception $e) {
                \Session::flash('error', $e->getMessage());
                return redirect()->back();
            }
        
    } 
//     public function insert(Request $request){
//         $form = $request->validate([
//             'file' => 'required'
//         ]);
    
//         $uploaded_file = $request->file('file');
//     $file_contents = file_get_contents($uploaded_file);

//     // Get the sheet names and their corresponding DataFrames
//     $spreadsheet = IOFactory::load($uploaded_file);
//     $excel_data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
// dd($excel_data);
//     // Get the sheet name and table name from the first sheet
//     $first_sheet = $spreadsheet->getSheet(0);
//     $sheet_name_col = $first_sheet->getColumnIterator()->current()->toArray(null, true, true, true);
//     $table_name_col = $first_sheet->getColumnIterator()->next()->toArray(null, true, true, true);

    
//         $ones = [];
//         // Iterate over all sheets and extract headers
//         foreach ($excel_data as $sheet_name => $sheet_data) {
//             if ($sheet_name == "Feuil1") {
//                 continue;
//             }
//             $sheet_df = $sheet_data->first();
//             $row_index = $sheet_name_col->search($sheet_name);
//             $value = $first_sheet_df->get($row_index, 2);
            
//     // ;
//         }
    
//         return redirect()->route('helo')->with(compact('ones'));
//     }
    
    

}
