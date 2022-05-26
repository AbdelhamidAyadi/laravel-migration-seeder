<?php

use Illuminate\Database\Seeder;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train ->azienda = 'Italo';
        $train ->stazione_di_partenza = 'Verona';
        $train ->stazione_di_arrivo = 'Milano';
        $train ->orario_di_partenza = '10:00';
        $train ->orario_di_arrivo = '11:00';
        $train ->codice_treno = '113445';
        $train ->numero_carrozze = 7;
        $train ->in_orario = true;
        $train ->cancellato = false;

        $train -> save();

    }
}
