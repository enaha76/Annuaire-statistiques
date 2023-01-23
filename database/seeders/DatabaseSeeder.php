<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cycle;
use App\Models\Etablissement;
use Illuminate\Database\Seeder;

use function PHPSTORM_META\type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Cycle::create([
         'nom'=>'LMD'
        ]);
                Cycle::create([
                    'nom'=>'PCM'
                            ]);
                            Cycle::create([
                                'nom'=>'ANNE'
                                        ]);
        Etablissement::create([
            'nom' => 'Université Al-Asriya de Nouakchott',
            'abrev' => 'UNA',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>0,
            'type' => 'Université',
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' => 'Universités des Sciences Islamiques d’Aioun',
            'abrev' => 'USIA',
            'tutelle' => 'Ministère des Affaires Islamiques et de l\'Enseignement Originel',
            'privee'=>0,
            'type' => 'Université',
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' => 'Ecole Supérieure Polytechnique',
            'abrev' => 'ESP',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication et Ministère de la Défense Nationale',
            'privee'=>0,
            'type' => 'Ecole',
            'id_cycle' =>3
        ]);
        Etablissement::create([
            'nom' => 'Academie navale',
            'abrev' => 'AN',
            'tutelle' => 'Ministère de la Défense Nationale',
            'privee'=>0,
            'type' => 'Academie',
            'id_cycle' =>3
        ]);
        Etablissement::create([
            'nom' => 'Institut Supérieur de Comptabilité et d’Administration des Entreprises',
            'abrev' => 'ISCAE',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>0,
            'type' => 'Institut',
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' => 'Ecole Normale Supérieure',
            'abrev' => 'ENS',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>0,
            'type' => 'Ecole',
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' => 'Institut Supérieur d’Anglais',
            'abrev' => 'ISA',
            'cotutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication et Ministère de la Défense Nationale',
            'privee'=>0,
            'type' => 'Institut',
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' => 'Institut Supérieur des Etudes et de Recherches Islamiques',
            'abrev' => 'ISERI',
            'tutelle' => 'Ministère des Affaires Islamiques et de l\'Enseignement Originel',
            'privee'=>0,
            'type' => 'Institut',
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' => 'Institut Supérieur de l’Enseignement Technologique',
            'abrev' => 'ISET',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>1,
            'type' => 'Institut',
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' => 'Institut Supérieur Professionnel de Langues, de Traduction et d’Interprétariat',
            'abrev' => 'ISPLTI',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>0,
            'type' => 'Institut',
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' =>'Faculté des Lettres et des Sciences Humaines',
            'abrev' => 'FLSH',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>0,
            'type' => 'Faculté',
            'identifiant' =>1,
            'id_cycle' =>1

        ]);
        Etablissement::create([
            'nom' =>'Faculté de Médecine',
            'abrev' => 'FM',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>0,
            'type' => 'Faculté',
            'identifiant' =>1,
            'id_cycle' =>2
        ]);
        Etablissement::create([
            'nom' =>'Faculté des Sciences Juridiques et Economiques',
            'abrev' => 'FSJE',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>0,
            'type' => 'Faculté',
            'identifiant' =>1,
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' =>'Faculté des Sciences et Techniques',
            'abrev' => 'FST',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>0,
            'type' => 'Faculté',
            'identifiant' =>1,
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' =>'Institut Universitaire Professionnel',
            'abrev' => 'IUP',
            'tutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication',
            'privee'=>1,
            'type' => 'Institut',
            'identifiant' =>1,
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom'=>'Faculté Cheriaa',
            'abrev'=>'FC',
            'tutelle'=>'Ministère des Affaires Islamiques et de l\'Enseignement Originel',
            'type'=>'Faculté',
            'privee'=>0,
            'identifiant'=>2,
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom'=>'Faculté de Langue Arabe et Sciences Humaines',
            'abrev'=>'FLASH',
            'tutelle'=>'Ministère des Affaires Islamiques et de l\'Enseignement Originel',
            'privee'=>0,
            'type'=>'Faculté',
            'identifiant'=>2,
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom'=>'Faculté Oussoul Eddine',
            'abrev'=>'FOE',
            'tutelle'=>'Ministère des Affaires Islamiques et de l\'Enseignement Originel',
            'privee'=>0,
            'type'=>'Faculté',
            'identifiant'=>2,
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' =>'Classe Préparatoire au Grandes Ecoles d\'Ingénieurs',
            'abrev' =>'CPGEI',
            'cotutelle' =>'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication et Ministère de la Défense Nationale',
            'privee'=>0,
            'type' => 'Cycle ingénieur',
            'identifiant'=>3,
            'id_cycle' =>3
        ]);
        Etablissement::create([
            'nom' =>'Institut Supérieur des Métiers du Bâtiment, des Traveaux Publiques et de l’Urbanisme',
            'abrev' =>'ISMBTPU',
            'cotutelle' =>'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication et Ministère de la Défense Nationale',
            'privee'=>0,
            'type' => 'Institut',
            'identifiant'=>3,
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' =>'Institut des Métiers de la Mine',
            'abrev' =>'ISMM',
            'cotutelle' =>'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication et Ministère de la Défense Nationale',
            'privee'=>0,
            'type' => 'Institut',
            'identifiant'=>3,
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' =>'Institut Supérieur des Sciences de la Mer ',
            'abrev' =>'I2SM',
            'cotutelle' =>'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication et Ministère de la Défense Nationale',
            'privee'=>0,
            'type' => 'Institut',
            'identifiant'=>3,
            'id_cycle' =>1
        ]);
        Etablissement::create([
            'nom' => 'Ecole superieur O',
            'abrev' => 'ESO',
            'cotutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication et Ministère de la Défense Nationale',
            'privee'=>0,
            'type' => 'Ecole',
            'identifiant' => 4,
            'id_cycle' =>3
        ]);
        Etablissement::create([
            'nom' => 'Institut superieur SM',
            'abrev' => 'ISSM',
            'cotutelle' => 'Ministère de l’Enseignement Supérieur, de la Recherche Scientifique et des des Technologies de l\'Information et de la Communication et Ministère de la Défense Nationale',
            'privee'=>0,
            'type' => 'Institut',
            'identifiant' => 4,
            'id_cycle' =>1
        ]);
    }
}
