<?php

namespace Database\Seeders;

use App\Models\RejectModel;
use App\Models\GejalaModel;
use App\Models\SolusiModel;
use App\Models\RejectGejalaModel;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reject = [
            [
                'id_reject' => 'R1',
                'nama' => 'orange peel',
            ],
        ];

        $solusi = [
            [
                'id_solusi' => 'S1',
                'keterangan' => 'Turunkan viscositas cat',
            ],
            [
                'id_solusi' => 'S2',
                'keterangan' => 'Jaga proses aplikasi agar tidak terlalu tebal',
            ],
            [
                'id_solusi' => 'S3',
                'keterangan' => 'Atur jarak antara spraygun dan bidang yang dicat',
            ],
            [
                'id_solusi' => 'S4',
                'keterangan' => 'Perhatikan tekanan angin yang digunakan',
            ],
        ];

        $gejala = [
            [
                'id_gejala' => 'G1',
                'nama' => 'Adanya gelombang yang menyerupai kulit jeruk pada permukaan cat',
                'kode_solusi' => 'S1'
            ],
            [
                'id_gejala' => 'G2',
                'nama' => 'Adanya cat yang telalu kental pada permukaan cat',
                'kode_solusi' => 'S1'
            ],
            [
                'id_gejala' => 'G3',
                'nama' => 'Adanya cat yang telalu tebal pada satu sisi',
                'kode_solusi' => 'S2'
            ],
            [
                'id_gejala' => 'G4',
                'nama' => 'Pengecatan cat yang dilakukan operator terlalu dekat',
                'kode_solusi' => 'S3'
            ],
            [
                'id_gejala' => 'G5',
                'nama' => 'Operator menggunakan angin yang terlalu tinggi saat proses pengecatan',
                'kode_solusi' => 'S4'
            ]
        ];

        $rg = [
            [
                'id' => '1',
                'kode_reject' => 'R1',
                'kode_gejala' => 'G1',
                'keterangan' => '0'
            ],
            [
                'id' => '2',
                'kode_reject' => 'R1',
                'kode_gejala' => 'G2',
                'keterangan' => '0'
            ],
            [
                'id' => '3',
                'kode_reject' => 'R1',
                'kode_gejala' => 'G3',
                'keterangan' => '0'
            ],
            [
                'id' => '4',
                'kode_reject' => 'R1',
                'kode_gejala' => 'G4',
                'keterangan' => '0'
            ],
            [
                'id' => '5',
                'kode_reject' => 'R1',
                'kode_gejala' => 'G5',
                'keterangan' => '0'
            ]
        ];
        RejectModel::insert($reject);
        SolusiModel::insert($solusi);
        GejalaModel::insert($gejala);
        RejectGejalaModel::insert($rg);
    }
}
