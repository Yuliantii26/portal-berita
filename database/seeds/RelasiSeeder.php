<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        // Membuat Data Dosen
       $dosen = Dosen::create(array(
            'nipd'=>'1234567890',
            'nama'=>'yulianti',
        )) ;
        $this->command->info('Data Dosen Telah Diisi');

        // Membuat Data Mahasiswa
        $yuli = Mahasiswa::create(
            array(
                'nama' => 'vinaTN',
                'nim' => '1010101',
                'id_dosen'=> $dosen->id
            ));

        $vina = Mahasiswa::create(array(
            'nama' => 'Icih',
            'nim' => '1010102',
            'id_dosen'=>$dosen->id
        ));

        $haikal = Mahasiswa::create(
        array(
             'nama' => 'Hae',
             'nim' => '1010103',
             'id_dosen'=>$dosen->id
        ));

            $this->command->info('Data Mahasiswa Berhasil disini!');

                    //membuat data Wali
                    $dadang = wali::create(array(
                        'nama' => 'dadang ',
                        'id_mahasiswa' => $yuli->id
                    ));
                    $ucup = wali::create(array(
                        'nama' => 'ucup mambo',
                        'id_mahasiswa' => $vina->id
                    ));
                    $agus = wali::create(array(
                        'nama' => 'agus ',
                        'id_mahasiswa' => $haikal->id
                    ));
                    $this->command->info('Data Wali berhasil diisi!');

                    // Membuat Data Hobi
                    $melukis_langit = Hobi::create(array('hobi' => 'melukis Langit'));
                    $mandi_hujan = Hobi::create(array('hobi' => 'Mandi Hujan'));
                    $ambyar = Hobi::create(array('hobi' => 'Stalking Mantan'));

                    $yuli->hobi()->attach($melukis_langit->id);
                    $yuli->hobi()->attach($ambyar->id);
                    $vina->hobi()->attach($mandi_hujan->id);
                    $haikal->hobi()->attach($ambyar->id);

                    $this->command->info('data hobi berhsil diisi');
    }
}
