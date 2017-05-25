<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class AddSuperAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
           $table->boolean('isSuperAdmin')->after('password');
        });

        $user = new \App\User();
        $user->name = 'Superadmin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('ChangeMeFast');
        $user->isSuperAdmin = true;
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('isSuperAdmin');
        });
    }
}
