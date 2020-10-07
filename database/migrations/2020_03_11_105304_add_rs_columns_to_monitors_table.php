<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRsColumnsToMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('monitors', function (Blueprint $table) {
            $table->string('linkedin')->after('monitor_img')->nullable();
            $table->string('facebook')->after('monitor_img')->nullable();
            $table->string('instagram')->after('monitor_img')->nullable();
            $table->string('twitter')->after('monitor_img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monitors', function (Blueprint $table) {
            
            $table->dropColumn(['linkedin', 'facebook', 'instagram', 'twitter']);
        });
    }
}
