<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->id(); // Auto Increment の id カラムを作ってくれる
            $table->string('message'); // VARCHAR(255) が作成される
            $table->foreignId('user_id')->constrained(); // 外部キー制約を作成
            $table->timestamps(); // created_at と updated_at カラムを作ってくれる
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
}
