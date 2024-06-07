<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bcrypt', function (Blueprint $table) {
            $users = DB::table('users')->get();
            foreach ($users as $user) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update(['password' => Hash::make($user->password)]);
            }
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bcrypt', function (Blueprint $table) {
            //
        });
    }
};

