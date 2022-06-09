<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User                 as User;

use Illuminate\Support\Facades\Hash;

class AkunAkses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Seeder_User                        = new User();
            $Seeder_User->name              = 'Admin Super';
            $Seeder_User->nik               = '2124000043';
            $Seeder_User->email             = 'admin@gmail.com';
            $Seeder_User->password          = Hash::make('00000');
            $Seeder_User->show_password     = '00000';
            $Seeder_User->akses             = 'Admin Super';
        $Seeder_User->save();
    }
}
