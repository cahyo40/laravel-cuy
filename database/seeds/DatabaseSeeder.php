<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role  = array(
            ['roles'=>'Kepala Desa'],
            ['roles'=>'Sekretaris Desa'],
            ['roles'=>'Warga Desa'],
            ['roles'=>'Bendahara Desa']
        );
        DB::table('roles')->insert($role);
        $warga = array(
            [
                'nik'=>'21120115120039',
                'nama'=>'Muchammad Dwi Cahyo Nugroho',
                'tempat_lahir'=>'Wonosobo',
                'tanggal_lahir'=>'2018-12-11',
                'jenis_kel'=>'Laki-Laki',
                'pekerjaan'=>'Mahasiswa',
                'agama_id'=> 1,
                'status' => 'Hidup',
                'role_id' => '3',
                'pendidikan_terakhir' => 'SMA',
                'created_at'=>now(+7),
                'updated_at'=>now(+7)
            ]
            );
            DB::table('wargas')->insert($warga);
            $agama = array(
                ['nama'=>'Islam'],
                ['nama'=>'Kristen'],
                ['nama'=>'Katolik'],
                ['nama'=>'Hindu'],
                ['nama'=>'Budha']
            );
            DB::table('agamas')->insert($agama);
            $admin = [
                'nama'=>'Muchammad Dwi Cahyo',
                'username'=>'cucu_40',
                'password'=>bcrypt('admin12345'),
                'level'=>'1',
                'created_at'=>now(+7),
                'updated_at'=>now(+7)
            ];
            DB::table('admins')->insert($admin);
    }
}
