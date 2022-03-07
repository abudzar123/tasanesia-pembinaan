<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('province_id')->after('pm_email')->index();
            $table->string('city_id')->after('province_id')->index();
            $table->string('district_id')->after('city_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('province_id');
        $table->dropColumn('city_id');
        $table->dropColumn('district_id');
    }
}
