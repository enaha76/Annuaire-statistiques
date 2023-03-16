<?php
use App\Models;
function cand($sheet_df, $year, $code) {
   
    if ($code == "cand1") {
        // Insert data into cand1 table
            $rowCounter = 0;
            foreach ($sheet_df as $row) {
                // Skip the first three rows
                if ($rowCounter < 1) {
                    $rowCounter++;
                    continue;
                }
            $cand1_obj = new Cand1([
                'annee_scolaire' => $year,
                'wilaya' => $row[0],
                'effectif' => $row[1],
            ]);
            $cand1_obj->save();
        }
    } elseif ($code == "cand2") {
     $rowCounter = 0;
        $rowCounter = 0;
        foreach ($sheet_df as $row) {
            // Skip the first three rows
            if ($rowCounter < 1) {
                $rowCounter++;
                continue;
            }
            // Skip the first three rows
            if ($rowCounter < 1) {
                $rowCounter++;
                continue;
            }
            $cand2_obj = new Cand2([
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
        $rowCounter = 0;
        foreach ($sheet_df as $row) {
            // Skip the first three rows
            if ($rowCounter < 2) {
                $rowCounter++;
                continue;
            }
            // Skip the first two rows since they contain the sheet name and year
            
            $cand3_obj = new Cand3([
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
        $rowCounter = 0;
        foreach ($sheet_df as $row) {
            // Skip the first three rows
            if ($rowCounter < 1) {
                $rowCounter++;
                continue;
            }
            // Skip the first row since it contains the sheet name and year
            
            $cand4_obj = new Cand4([
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
    return false;
}

    


function replace_nan_with_zero($sheet_df) {
    return $sheet_df->fillna(0);
}

// function ensg($sheet_df, $year, $code) {
//     $sheet_df = replace_nan_with_zero($sheet_df);
//     // Check the type of sheet based on the sheet name
//     switch ($code) {
//         case "ensg1":
//             // Insert data into ensg1 table
//             foreach($sheet_df as $index => $row) {
//                 // Skip the first row since it contains the sheet name and year
//                 if ($index == 0) continue;
//                 if ($row[1] == 0) {
//                     $ensg1_obj = new ensg1(array(
//                         'etablissements' => $row[0],
//                         'annee_scolaire' => $year,
//                         'nb1' => $row[2]
//                     ));
//                 } else {
//                     $ensg1_obj = new ensg1(array(
//                         'etablissements' => $row[1],
//                         'annee_scolaire' => $year,
//                         'nb1' => $row[2]
//                     ));
//                 }
//                 $ensg1_obj->save();
//             }
//             break;

//         case "ensg2":
//             // Insert data into ensg2 table
//             foreach($sheet_df as $index => $row) {
//                 // Skip the first row since it contains the sheet name and year
//                 if ($index == 0) continue;
//                 $ensg2_obj = new ensg2(array(
//                     'tranche_age' => $row[0],
//                     'annee_scolaire' => $year,
//                     'nb1' => $row[1]
//                 ));
//                 $ensg2_obj->save();
//             }
//             break;

//         case "ensg3":
//             // Insert data into ensg3 table
//             foreach($sheet_df as $index => $row) {
//                 // Skip the first two rows since they contain the sheet name and year
//                 if ($index == 0 || $index == 1) continue;
//                 $etablissements = $row[0];
//                 $ensg3_obj = new ensg3(array(
//                     'etablissements' => $etablissements,
//                     'annee_scolaire' => $year,
//                     'nb1' => $row[1],
//                     'nb2' => $row[2],
//                     'nb3' => $row[3],
//                     'nb4' => $row[4],
//                     'nb5' => $row[5],
//                     'nb6' => $row[6],
//                     'nb7' => $row[7]
//                 ));
//                 $ensg3_obj->save();
//             }
//             break;

//         case "ensg4":
//             // Insert data into ensg4 table
//             foreach($sheet_df as $index => $row) {
//                 // Skip the first two rows since they contain the sheet name and year
//                 if ($index == 0 || $index == 1) continue;
//                 $etablissements = $row[0];
//                 $ensg4_obj = new ensg4(array(
//                     'etablissements' => $etablissements,
//                     'annee_scolaire' => $year,
//                     'nb1' => $row[1],
//                     'nb2' => $row[2],
//                     'nb3' => $row[3],
//                     'nb4' => $row[4],
//                     'nb5' => $row[5],
//                     'nb6' => $row[6],
//                     'nb7' => $row[7],
//                     'nb8' => $



?>