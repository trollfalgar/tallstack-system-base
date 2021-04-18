<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->references('id')->on('users');
            $table->string('phone', 15);
            $table->enum('type', ['phone', 'mobile']);
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('updater_id')->nullable()->references('id')->on('users');
            $table->foreignId('excluder_id')->nullable()->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_contacts');
    }
}
