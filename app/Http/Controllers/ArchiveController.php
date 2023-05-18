<?php



namespace App\Http\Controllers;

use App\Models\cand1;
use App\Models\cand2;
use App\Models\cand3;
use App\Models\cand4;
use App\Models\ensg1;
use App\Models\ensg2;
use App\Models\ensg3;
use App\Models\ensg4;
use App\Models\ensg5;
use App\Models\ensg6;
use App\Models\etu1;
use App\Models\etu2;
use App\Models\etu3;
use App\Models\etu4;
use App\Models\etu5;
use App\Models\etu6;
use App\Models\etu7;
use App\Models\etu8;
use App\Models\etu9;
use App\Models\sort1;
use App\Models\sort2;
use App\Models\cnou;
use Exception;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{

    public function up(Request $request)
    {

        try {
            $data = json_decode($request->input('data'));

            foreach ($data as $key => $value) {

                if (!is_string($key)) {
                    continue;
                }
                if (strpos($key, 'cand') !== false) {
                    $this->cand($value, $request->input('year'), $key);
                }
                if (strpos($key, 'etu') !== false) {
                    $this->etu($value, $request->input('year'), $key);
                }
                if (strpos($key, 'ensg') !== false) {
                    $this->ensg($value, $request->input('year'), $key);
                }
                if (strpos($key, 'sort') !== false) {
                    $this->sort($value, $request->input('year'), $key);
                }
                if (strpos($key, 'cnou') !== false) {
                    $this->cnou($value, $request->input('year'), $key);
                }
                if (strpos($key, 'bour') !== false) {
                    $this->bour($value, $request->input('year'), $key);
                }
            }
            \Session::flash('success', 'Users uploaded successfully.');
            // dd('success');
            return redirect()->back();
        } catch (Exception $e) {
            // dd( $e->getMessage());
            \Session::flash('error', $e->getMessage());
            return redirect()->back();
        }

    }







    function cand($sheet_df, $year, $code)
    {

        try {
            if ($code == "cand1") {
                // Insert data into cand1 table

                foreach ($sheet_df as $row) {

                    $cand1_obj = new cand1([
                        'annee_scolaire' => $year,
                        'wilaya' => $row[0],
                        'nb1' => $row[1],
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
                        'annee_scolaire' => $year,
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
        } catch (Exception $e) {
            //   dd($e->getMessage());
        }

    }




    function replace_nan_with_zero($sheet_df)
    {
        return $sheet_df->fillna(0);
    }
    function ensg($sheet_df, $year, $code)
    {
        try {
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

                }
            } else {
                throw new Exception("Unknown sheet type: $code");
            }
        } catch (Exception $e) {
            //   dd($e->getMessage());
        }


    }




    function etu($sheet_df, $year, $code)
    {
        try {

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
            } elseif ($code == "etu4") {
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
            } elseif ($code == "etu5") {
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
            } elseif ($code == "etu6") {
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
            } elseif ($code == "etu7") {
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
            } elseif ($code == "etu8") {
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

            } elseif ($code == "etu9") {
                // Insert data into etu9 table
                foreach ($sheet_df as $row) {


                    $etu9_obj = new etu9([
                        'annee_scolaire' => $year,
                        'domaine' => $row[0],
                        'nb1' => $row[1],
                    ]);
                    $etu9_obj->save();

                }





            } else {
                throw new Exception("Unknown sheet type: $code");
            }
        } catch (Exception $e) {
            //  dd($e->getMessage());
        }


    }


    // another function sort() like the ones above only for models sort1 and sort2 
    function sort($sheet_df, $year, $code)
    {

        try {
            if ($code == "sort1") {

                foreach ($sheet_df as $row) {
                    $sort1_obj = new sort1([
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
                    ]);
                    $sort1_obj->save();

                }
            } else if ($code == "sort2") {
                foreach ($sheet_df as $row) {
                    $sort2_obj = new sort2([
                        'annee_scolaire' => $year,
                        'domaine_specilise' => $row[0],
                        'nb1' => $row[1]
                    ]);
                    $sort2_obj->save();
                }
            }

        } catch (\Throwable $th) {
            //throw $th;
        }

    }

    function cnou($sheet_df, $year, $code)
    {
        try {
            if ($code == "cnou") {
                foreach ($sheet_df as $row) {
                    $cnou1_obj = new cnou([
                        'annee_scolaire' => $year,
                        'fonction' => $row[0],
                        'nb1' => $row[1],
                        'nb2' => $row[2]
                    ]);
                    $cnou1_obj->save();
                }
            }


        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    function bour($sheet_df, $year, $code)
    {
        try {
            if ($code == "bour1") {
                foreach ($sheet_df as $row) {
                    $bour1_obj = new bour1([
                        'annee_scolaire' => $year,
                        'genre' => $row[1],
                        'niveaux' => $row[0],
                        'ALGERIE' => $row[2],
                        'ALLEMAGNE' => $row[3],
                        'CANADA' => $row[4],
                        'COTE_D_IVOIRE' => $row[5],
                        'EGYPTE' => $row[6],
                        'FRANCE' => $row[7],
                        'MALI' => $row[8],
                        'MAROC' => $row[9],
                        'SENEGAL' => $row[10],
                        'TUNISIE' => $row[11],
                        'TOTAL' => $row[12],
                    ]);
                    $bour1_obj->save();
                }
            }
            else if ($code == "bour2") {
                foreach ($sheet_df as $row) {
                    $bour2_obj = new bour2([
                        'annee_scolaire' => $year,
                        'pays' => $row[0],
                        'nb1' => $row[1],
                        'nb2' => $row[2],
                        'nb3' => $row[3],
                        'nb4' => $row[4],
                        'nb5' => $row[5],
                        'nb6' => $row[6],
                        'nb7' => $row[7],
                        'nb8' => $row[8],
                    ]);
                    $bour2_obj->save();
                }
            }
            else if ($code == "bour3") {
                foreach ($sheet_df as $row) {
                    $bour3_obj = new bour3([
                        'annee_scolaire' => $year,
                        'pays' => $row[0],
                        'nb1' => $row[1],
                        'nb2' => $row[2],
                        'nb3' => $row[3],
                        'nb4' => $row[4],
                        'nb5' => $row[5],
                        'nb6' => $row[6],
                        'TOTAL' => $row[7],
                      
                    ]);
                    $bour3_obj->save();
                }
            }
            


        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}