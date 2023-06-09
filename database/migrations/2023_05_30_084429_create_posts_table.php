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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("load_by");
            $table->unsignedBigInteger("author_id");
            $table->string("type");
            $table->string("heading");
            $table->text("description");
            $table->unsignedInteger("price");
            $table->boolean("can_pay_pushkin")->default(false);
            $table->string("city");
            $table->string('address');
            $table->timestamp("launch_date")->nullable();
            $table->timestamps();

            $table->index("author_id", "post_user_idx");
            $table->foreign("author_id", "post_user_fk")->on("users")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
