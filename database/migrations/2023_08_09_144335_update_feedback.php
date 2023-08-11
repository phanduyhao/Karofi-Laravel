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
        Schema::table('feedbacks', function (Blueprint $table) {
            // Thêm nullable() vào trường seen
            $table->binary('seen')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            // Nếu cần rollback, bạn có thể xóa nullable()
            $table->binary('seen')->change();
        });
    }
};
