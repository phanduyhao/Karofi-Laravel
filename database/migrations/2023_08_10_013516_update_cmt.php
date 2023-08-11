<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Xóa khóa ngoại cũ trước khi thay đổi tùy chọn
            $table->dropForeign(['cate_id']);

            // Thay đổi tùy chọn của khóa ngoại cate_id
            $table->foreign('cate_id')->references('id')->on('cates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Xóa khóa ngoại cũ trước khi thay đổi tùy chọn
            $table->dropForeign(['cate_id']);

            // Thay đổi tùy chọn của khóa ngoại cate_id
            $table->foreign('cate_id')->references('id')->on('cates');
        });
    }
};
