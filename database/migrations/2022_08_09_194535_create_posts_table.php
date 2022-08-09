<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
          $table->id();
          $table->foreignId('user_id')->constrained('users');
          $table->foreignId('social_plat_form_id')->constrained('social_plat_forms');
          $table->string('title')->nullable();
          $table->string('image_path')->nullable();
          $table->text('description')->nullable();
          $table->boolean('status')->default(1);
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
