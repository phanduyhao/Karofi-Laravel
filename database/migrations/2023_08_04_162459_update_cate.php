<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Thêm column
    public function up()
    {
        Schema::table('cates', function (Blueprint $table) {
            $table->string('alias',255)->unique()->nullable();
            $table->string('short_desc',255);
            $table->binary('active')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cates', function (Blueprint $table) {
            $table->dropColumn('alias');
            $table->dropColumn('short_desc',255);
            $table->dropColumn('active');
        });
    }
};
