<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AssignDefaultRoleToExistingUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Get the ID of the 'user' role
        $roleId = DB::table('roles')->where('name', 'user')->value('id');

        // Get all users and assign the 'user' role to each
        $users = DB::table('users')->select('id')->get();

        foreach ($users as $user) {
            DB::table('role_user')->insert([
                'user_id' => $user->id,
                'role_id' => $roleId,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Optionally, you can remove the assigned roles if necessary
        $roleId = DB::table('roles')->where('name', 'user')->value('id');
        DB::table('role_user')->where('role_id', $roleId)->delete();
    }
}
