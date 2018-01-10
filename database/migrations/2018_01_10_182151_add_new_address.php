<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('address')->insert(array(
            'name'=>'Mitch van Wijngaarden',
            'street'=>'Meidoornstraat 10',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ));

        DB::table('address')->insert(array(
            'name'=>'Iris Verhoef',
            'street'=>'Bandoengstraat 33',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('address')->where('name', '=', 'Mitch van Wijngaarden')->delete();
        DB::table('address')->where('name', '=', 'Iris Verhoef')->delete();
    }
}
