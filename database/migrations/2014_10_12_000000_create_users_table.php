<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            
            // 0 - user, 1 - volunteer, 2 - admin, 3 - super
            $table->tinyInteger('level')->default(0);
            
            $table->rememberToken();
            $table->timestamps();
            
            // User public display info
            $table->string('bio')->default("");
            $table->string('iconId')->default("icon.png");
            
            $table->string('formId')->default("");
            
        });
        
        // TODO REMOVE ON DEPLOYMENT
        // Developmental super user (created every migration)
        $User = new User();
        $User->name='Root';
        $User->email = 'test@test.com';
        $User->password = bcrypt('123456');
        $User->bio = 'This is root';
        $User->level = 3;
        $User->save();
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
