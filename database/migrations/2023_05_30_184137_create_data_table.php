<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("post_id");
            $table->string("img_path")->nullable();
            $table->string("html_file_path")->nullable();
            $table->timestamps();

            $table->index("post_id", "data_post_idx");
            $table->foreign("post_id", "data_post_fk")->on("posts")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
