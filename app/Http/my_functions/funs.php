<?php
namespace App\Models;
use Exception;


function cand($sheet_df, $year, $code) {
   
    if ($code == "cand1") {
        // Insert data into cand1 table
          
            foreach ($sheet_df as $row) {
                
            $cand1_obj = new cand1([
                'annee_scolaire' => $year,
                'wilaya' => $row[0],
                'effectif' => $row[1],
            ]);
            $cand1_obj->save();
        }
    } elseif ($code == "cand2") {
   
      
        foreach ($sheet_df as $row) {
           
            $cand2_obj = new cand2([
                'annee_scolaire' => $year,
                'nb1' => $row[2],
                'nb2' => $row[3],
                'nb3' => $row[4],
                'nb4' => $row[5],
                'nb5' => $row[6],
            ]);
            $cand2_obj->save();
    }
    } elseif ($code == "cand3") {
        // Insert data into cand3 table
      
        foreach ($sheet_df as $row) {
            // Skip the first three rows
           
            // Skip the first two rows since they contain the sheet name and year
            
            $cand3_obj = new cand3([
                'annee_scolaire' => $year,
                'serie' => $row[0],
                'nb1' => $row[1],
                'nb2' => $row[2],
                'nb3' => $row[3],
                'nb4' => $row[4],
                'nb5' => $row[5],
                'nb6' => $row[6],
                'nb7' => $row[7],
                'nb8' => $row[8],
            ]);
            $cand3_obj->save();
        }
    } elseif ($code == "cand4") {
        // Insert data into cand4 table
      
        foreach ($sheet_df as $row) {
            
            $cand4_obj = new cand4([
                'filiere' => $row[0],
                'nb1' => $row[1],
                'nb2' => $row[2],
                'nb3' => $row[3],
                'nb4' => $row[4],
                'nb5' => $row[5],
            ]);
            $cand4_obj->save();
        }
    } else {
        throw new Exception("Unknown sheet type: $code");
    }
    
}

    


function replace_nan_with_zero($sheet_df) {
    return $sheet_df->fillna(0);
}
function ensg($sheet_df, $year, $code) {
    if ($code == "ensg1") {
        // Insert data into ensg1 table
        foreach ($sheet_df as $row) {
            $ensg1_obj = new ensg1([
                'etablissements' => $row[0],
                'annee_scolaire' => $year,
                'nb1' => $row[1],
            ]);
            $ensg1_obj->save();
        }
    } elseif ($code == "ensg2") {
        // Insert data into ensg2 table
        foreach ($sheet_df as $row) {
            $ensg2_obj = new ensg2([
                'annee_scolaire' => $year,
                'tranche_age' => $row[0],
                'nb1' => $row[1],
            ]);
            $ensg2_obj->save();
        }
    } elseif ($code == "ensg3") {
        // Insert data into ensg3 table
        foreach ($sheet_df as $row) {
            $ensg3_obj = new ensg3([
                'annee_scolaire' => $year,
                'etablissements' => $row[0],
                'nb1' => $row[1],
                'nb2' => $row[2],
                'nb3' => $row[3],
                'nb4' => $row[4],
                'nb5' => $row[5],
                'nb6' => $row[6],
                'nb7' => $row[7],
                'nb8' => $row[8],
            ]);
            $ensg3_obj->save();
        }
    } elseif ($code == "ensg4") {
        // Insert data into ensg4 table
        foreach ($sheet_df as $row) {
            $ensg4_obj = new ensg4([
                'annee_scolaire' => $year,
                'etablissements' => $row[0],
                'nb1' => $row[1],
                'nb2' => $row[2],
                'nb3' => $row[3],
                'nb4' => $row[4],
                'nb5' => $row[5],
                'nb6' => $row[6],
                'nb7' => $row[7],
                'nb8' => $row[8],
                'nb9' => $row[9],
                'nb10' => $row[10],
                'nb11' => $row[11],
                'nb12' => $row[12],
                'nb13' => $row[13],
                'nb14' => $row[14],
                'nb15' => $row[15],
                'nb16' => $row[16],
                'nb17' => $row[17],
                'nb18' => $row[18],
                'nb19' => $row[19],
                'nb20' => $row[20],
                'nb21' => $row[21],
            ]);
            $ensg4_obj->save();
        }
    } elseif ($code == "ensg5") {
        // Insert data into ensg5 table
        foreach ($sheet_df as $row) {
            $ensg5_obj = new ensg5([
                'annee_scolaire' => $year,
                'domaine' => $row[0],
                'nb1' => $row[1],
            ]);
            $ensg5_obj->save();
        }
    } elseif ($code == "ensg6") {
        // Insert data

        foreach ($sheet_df as $row) {
            $ensg6_obj = new ensg6([
                'annee_scolaire' => $year,
                'etablissements' => $row[0],
                'nb1' => $row[1],
                'nb2' => $row[2],
                'nb3' => $row[3],
                'nb4' => $row[4],
                'nb5' => $row[5],
                'nb6' => $row[6],
                'nb7' => $row[7],
                'nb8' => $row[8],
                'nb9' => $row[9],
                'nb10' => $row[10],
                'nb11' => $row[11],
                'nb12' => $row[12],
                'nb13' => $row[13],
                'nb14' => $row[14],
                'nb15' => $row[15],
                'nb16' => $row[16],
                'nb17' => $row[17],
                'nb18' => $row[18],
                'nb19' => $row[19],
                'nb20' => $row[20],
                'nb21' => $row[21],
            ]);
            $ensg6_obj->save();
    }}

}




function etu($sheet_df, $year, $code) {
    if ($code == "etu1") {
        // Insert data into etu1 table
        foreach ($sheet_df as $row) {
            $etu1_obj = new etu1([
                'annee_scolaire' => $year,
                'etablissements' => $row[0],
                'nb1' => $row[1],
                'nb2' => $row[2],
                'nb3' => $row[3],
                'nb4' => $row[4],
                'nb5' => $row[5],
                'nb6' => $row[6],
            ]);
            $etu1_obj->save();
        }
    } elseif ($code == "etu2") {
        // Insert data into etu2 table
        foreach ($sheet_df as $row) {
            $etu2_obj = new etu2([
                
                'annee_scolaire' => $year,
                'institutions' => $row[0],
                'nb1' => $row[1],
                'nb2' => $row[2],
                'nb3' => $row[3],
                'nb4' => $row[4],
                'nb5' => $row[5],
                'nb6' => $row[6],
                'nb7' => $row[7],
                'nb8' => $row[8],
                'nb9' => $row[9],
                'nb10' => $row[10],
                'nb11' => $row[11],
                'nb12' => $row[12],
                'nb13' => $row[13],
                'nb14' => $row[14],
                'nb15' => $row[15],
                'nb16' => $row[16],
                'nb17' => $row[17],
                'nb18' => $row[18],
                'nb19' => $row[19],
                'nb20' => $row[20],
                'nb21' => $row[21],
               
            ]);
            $etu2_obj->save();
        }
    } elseif ($code == "etu3") {
        // Insert data into etu3 table
        foreach ($sheet_df as $row) {
            $etu3_obj = new etu3([
                'annee_scolaire' => $year,
                'institutions' => $row[0],
                'nb1' => $row[1],
                'nb2' => $row[2],
                'nb3' => $row[3],
                'nb4' => $row[4],
                'nb5' => $row[5],
                'nb6' => $row[6],
                'nb7' => $row[7],
                'nb8' => $row[8],
                'nb9' => $row[9],
                'nb10' => $row[10],
                'nb11' => $row[11],
                'nb12' => $row[12],
                'nb13' => $row[13],
                'nb14' => $row[14],
                'nb15' => $row[15],
                'nb16' => $row[16],
                'nb17' => $row[17],
                'nb18' => $row[18],
                'nb19' => $row[19],
                'nb20' => $row[20],
            ]);
            $etu3_obj->save();
        }
        }elseif ($code == "etu4") {
            // Insert data into etu4 table
            foreach ($sheet_df as $row) {
                $etu4_obj = new etu4([
                    'annee_scolaire' => $year,
                    'institutions' => $row[0],
                    'nb1' => $row[1],
                    'nb2' => $row[2],
                    'nb3' => $row[3],
                    'nb4' => $row[4],
                    'nb5' => $row[5],
                    'nb6' => $row[6],
                    'nb7' => $row[7],
                    'nb8' => $row[8],
                    'nb9' => $row[9],
                    'nb10' => $row[10],
                    'nb11' => $row[11],
                    'nb12' => $row[12],
                    'nb13' => $row[13],
                    'nb14' => $row[14],
                    'nb15' => $row[15],
                    'nb16' => $row[16],
                    'nb17' => $row[17],
                    'nb18' => $row[18],
                ]);
                $etu4_obj->save();
            }
        }

        elseif ($code == "etu5") {
            // Insert data into etu5 table
            foreach ($sheet_df as $row) {
                $etu5_obj = new etu5([
                    'annee_scolaire' => $year,
                    
                    'nb1' => $row[0],
                    'nb2' => $row[1],
                    'nb3' => $row[2],
                    'nb4' => $row[3],
                    'nb5' => $row[4],
                    'nb6' => $row[5],
                    'nb7' => $row[6],
                    'nb8' => $row[7],
                    'nb9' => $row[8],
                    'nb10' => $row[9],
                    
                ]);
                $etu5_obj->save();
            }
        }
        elseif ($code == "etu6") {
            // Insert data into etu6 table
            foreach ($sheet_df as $row) {
                $etu6_obj = new etu6([
                    'annee_scolaire' => $year,
                    'domaine' => $row[0],
                    'nb1' => $row[1],
                    'nb2' => $row[2],
                    'nb3' => $row[3],
                    'nb4' => $row[4],
                    'nb5' => $row[5],
                    'nb6' => $row[6],
                    'nb7' => $row[7],
                    'nb8' => $row[8],
                    'nb9' => $row[9],
                    'nb10' => $row[10],
                    'nb11' => $row[11],
                    'nb12' => $row[12],
                    'nb13' => $row[13],
                    'nb14' => $row[14],
                    'nb15' => $row[15],
                    'nb16' => $row[16],
                    'nb17' => $row[17],
                    'nb18' => $row[18],
                    'nb19' => $row[19],
                    'nb20' => $row[20],
                    'nb21' => $row[21],
                    'nb22' => $row[22],
                ]);
                $etu6_obj->save();
            }
        }

        elseif ($code == "etu7") {
            // Insert data into etu7 table
            foreach ($sheet_df as $row) {
                $etu7_obj = new etu7([
                    'annee_scolaire' => $year,
                    'domaine' => $row[0],
                    'nb1' => $row[1],
                    'nb2' => $row[2],
                ]);
                $etu7_obj->save();
            }
        }


elseif ($code == "etu8") {
    // Insert data into etu8 table
    foreach ($sheet_df as $row) {
        $etu8_obj = new etu8([
            'annee_scolaire' => $year,
            'domaine' => $row[0],
            'nb1' => $row[1],
            'nb2' => $row[2],
            'nb3' => $row[3],
        ]);
        $etu8_obj->save();
    }

}
elseif ($code == "etu9") {
    // Insert data into etu9 table
    foreach ($sheet_df as $row) {
        $etu9_obj = new etu9([
            'annee_scolaire' => $year,
            'domaine' => $row[0],
            'nb1' => $row[1],
        ]);
        $etu9_obj->save();
    }


}
else{
    return false;
}
}
?>