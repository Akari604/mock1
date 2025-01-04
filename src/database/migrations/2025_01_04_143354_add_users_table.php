<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('number')->comment('郵便番号')->after('email');
            $table->string('address')->comment('住所')->after('number');
            $table->string('building')->comment('建物名')->after('address');
            $table->string('image')->comment('ユーザーの画像')->after('building');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('number');  
            $table->dropColumn('address');  
            $table->dropColumn('building');  
            $table->dropColumn('image');  
        });
    }
}
