<?php
/**
 * Created by PhpStorm.
 * User: Gavin
 * Date: 2015/6/23
 * Time: 15:20
 */

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder{
    public function run(){
        DB::table('user')->delete();

        for($i=0;$i<10;$i++){
            User::create(array(
                'account'=>'accountI'.$i,
                'password'=>'passwordU'.$i
            ));
        }
    }
}