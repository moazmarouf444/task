<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('country_key')->default('966');
            $table->string('phone')->nullable();
            $table->string('password');
            $table->timestamp('verified_at')->nullable();
            $table->string('avatar')->default('default.png');
            $table->boolean('is_blocked')->default(0);
            $table->enum('gender', ['male', 'female']);
            $table->string('code')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->text('address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->decimal('wallet_balance', 9, 2)->default(0);
            $table->boolean('is_notify')->default(true);
            $table->rememberToken();
            $table->softDeletes();

            $table->timestamps();
        });
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
};
