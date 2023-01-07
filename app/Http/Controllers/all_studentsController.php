<?php

namespace App\Http\Controllers;

use App\Models\ESP;
use App\Models\ISCAE;
use App\Models\FST;
use App\Models\SUPNUM;
use App\Models\tables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class all_studentsController extends Controller
{
    public function index(){
        $STAT =[ [SUPNUM::where('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022')->count(),
        SUPNUM::where([['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022'],['GENRE','=','F']])->count()
    ],
    [ESP::where('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022')->count(),
        ESP::where([['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022'],['GENRE','=','F']])->count()
    ],
    [ISCAE::where('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022')->count(),
        ISCAE::where([['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022'],['GENRE','=','F']])->count()
],
    [FST::where('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022')->count(),
    FST::where([['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022'],['GENRE','=','F']])->count()
]
];

$alllist =[
    
    ['etat' => 'SupNum (institut superieur du numerique)',
    'total' => $STAT[0][0],
    'Filles' => $STAT[0][1],
],
    ['etat' => 'ESP (ecole superieur polytechnique)',
    'total' => $STAT[1][0],
    'Filles' => $STAT[1][1],
],
['etat' => 'ISCAE (institut superieur de comptabilité et d\'administration des entreprises)',
'total' => $STAT[2][0],
'Filles' => $STAT[2][1],
], 
['etat' => 'FST (institut superieur de comptabilité et d\'administration des entreprises)',
'total' => $STAT[3][0],
'Filles' => $STAT[3][1],
],
    ['etat' => 'TOTAL',
    'total' =>$STAT[0][0]+$STAT[1][0]+$STAT[2][0]+$STAT[3][0],
    'Filles' => $STAT[1][1]+$STAT[0][1]+$STAT[2][1]+$STAT[2][1],
    ]
];

        return view('etudiants',['lists'=>$alllist]);
    }
    public function h(){
        $STAT =[ [SUPNUM::where('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022')->count(),
        SUPNUM::where([['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022'],['GENRE','=','F']])->count()
    ],
    [ESP::where('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022')->count(),
        ESP::where([['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022'],['GENRE','=','F']])->count()
    ],
    [ISCAE::where('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022')->count(),
        ISCAE::where([['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2021-2022'],['GENRE','=','F']])->count()
],
    [FST::where('ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2022-2023')->count(),
    FST::where([['ANNEE_UNIVERSITAIRE_DE_première_inscription_DANS_LE_CYCLE','=','2022-2023'],['GENRE','=','F']])->count()
]
];

$alllist =[
    
    ['etat' => 'SupNum (institut superieur du numerique)',
    'total' => $STAT[0][0],
    'Filles' => $STAT[0][1],
],
    ['etat' => 'ESP (ecole superieur polytechnique)',
    'total' => $STAT[1][0],
    'Filles' => $STAT[1][1],
],
['etat' => 'ISCAE (institut superieur de comptabilité et d\'administration des entreprises)',
'total' => $STAT[2][0],
'Filles' => $STAT[2][1],
], 
['etat' => 'FST (Faculite de Science et Technique)',
'total' => $STAT[3][0],
'Filles' => $STAT[3][1],
],
    ['etat' => 'TOTAL',
    'total' =>$STAT[0][0]+$STAT[1][0]+$STAT[2][0]+$STAT[3][0],
    'Filles' => $STAT[1][1]+$STAT[0][1]+$STAT[2][1]+$STAT[2][1],
    ]
];


        return view('index',['lists'=>$alllist,'TOTAL'=>$STAT[0][0]+$STAT[1][0]+$STAT[2][0]+$STAT[3][0]]);
    }
    public function tables(){
        $etats = DB::select('select abrev from tables');

        return  view('tables',['etats'=>$etats]);

    }
 public function tables_ex(){
        $etats =DB::select('select abrev from tables ');

        return  view('layout-sidenav-light',['etats'=>$etats]);
    }
}
