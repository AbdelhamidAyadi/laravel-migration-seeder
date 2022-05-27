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

        $train ->azienda = 'TrenItalia';
        $train ->stazione_di_partenza = 'Verona';
        $train ->stazione_di_arrivo = 'Milano';
        $train ->data_di_partenza = '2022-05-29';
        $train ->orario_di_partenza = '11:00:00';
        $train ->orario_di_arrivo = '13:00:00';
        $train ->codice_treno = 'it113035';
        $train ->numero_carrozze = 7;
        $train ->in_orario = true;
        $train ->cancellato = false;

        $train -> save();

    }
}
