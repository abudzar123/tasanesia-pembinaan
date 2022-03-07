<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableFunderproject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funder_projects', function (Blueprint $table) {
            $table->string('project_id')->after('fixfund')->index();
            $table->string('funder_id')->after('id')->index();
            $table->string('fund_type')->after('funder_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funder_projects', function (Blueprint $table) {
            $table->dropColumn('project_id');
            $table->dropColumn('funder_id');
            $table->dropColumn('fund_type');
        });
    }
}
