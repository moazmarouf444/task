<?php

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('avatar', 50)->nullable();
            $table->boolean('is_blocked')->default(0);
            $table->boolean('is_notify')->default(true);
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
        $role = Role::create([
            'name' => ['ar' => 'مدير عام', 'en' => 'Admin'],
        ]);

        Admin::create([
            'name'     => 'Manager',
            'email'    => 'activation@admin.com',
            'phone'    => '01222442506',
            'password' => 123456,
            'role_id'  => $role->id,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
