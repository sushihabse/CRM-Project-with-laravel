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
        Schema::create('search_management_reports', function (Blueprint $table) {
            $table->id();
            $table->string('projectName');
            $table->string('projectDuration');
            $table->string('projectAmount');
            $table->string('StartDate');
            $table->string('EndDate');
            $table->string('projectDeliveryDate');
            $table->string('projectStatus');
            $table->timestamps();
        }); 
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search_management_reports');
    }
};
