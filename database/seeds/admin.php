<?php

use Illuminate\Database\Seeder;
use App\DBUser;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();
        $admin = new DBUser;
        // $admin->userid = '1';
        $admin->NRP_NIP = 10000;
        $admin->name = 'admin';
        $admin->password = 'admin';
        $admin->password = bcrypt($admin->password);
        $admin->save();
    }
}
