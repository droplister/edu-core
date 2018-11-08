<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateSchoolSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_school_surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('csource');
            $table->integer('p135');
            $table->integer('p140')->nullable();
            $table->integer('p145');
            $table->integer('p150')->nullable();
            $table->integer('p155');
            $table->integer('p160')->nullable();
            $table->integer('p165');
            $table->integer('p170')->nullable();
            $table->integer('p175');
            $table->integer('p180')->nullable();
            $table->integer('p185');
            $table->integer('p190')->nullable();
            $table->integer('p195');
            $table->integer('p200')->nullable();
            $table->integer('p205');
            $table->integer('p210')->nullable();
            $table->integer('p215');
            $table->integer('p220')->nullable();
            $table->integer('p225');
            $table->integer('p230')->nullable();
            $table->integer('p235');
            $table->integer('p240')->nullable();
            $table->integer('p245');
            $table->integer('p250')->nullable();
            $table->integer('p255');
            $table->integer('p260')->nullable();
            $table->integer('p265');
            $table->integer('p270')->nullable();
            $table->integer('p275');
            $table->integer('p280')->nullable();
            $table->integer('p285');
            $table->integer('p290')->nullable();
            $table->integer('p295');
            $table->integer('p300')->nullable();
            $table->integer('p305');
            $table->integer('p320');
            $table->integer('p330');
            $table->integer('p325');
            $table->integer('p316')->nullable();
            $table->integer('p318')->nullable();
            $table->integer('p310')->nullable();
            $table->integer('p332')->nullable();
            $table->integer('p335');
            $table->integer('p340')->nullable();
            $table->integer('p345');
            $table->integer('p350')->nullable();
            $table->integer('p360')->nullable();
            $table->integer('p365');
            $table->integer('p370')->nullable();
            $table->integer('p385');
            $table->integer('p390');
            $table->integer('p395');
            $table->integer('p400');
            $table->integer('p405');
            $table->integer('p410');
            $table->integer('p415');
            $table->integer('p420');
            $table->integer('p425');
            $table->integer('p430');
            $table->integer('p435')->nullable();
            $table->integer('p440')->nullable();
            $table->integer('p445')->nullable();
            $table->integer('p450');
            $table->integer('p455');
            $table->integer('p460');
            $table->integer('p465');
            $table->integer('p467');
            $table->integer('p468');
            $table->integer('p470');
            $table->integer('p480');
            $table->integer('p485');
            $table->integer('p490');
            $table->integer('p492');
            $table->integer('p495');
            $table->integer('p500');
            $table->integer('p505');
            $table->integer('p510');
            $table->integer('p515');
            $table->integer('p520');
            $table->integer('p522');
            $table->integer('p525');
            $table->integer('p530');
            $table->integer('p535');
            $table->integer('p540');
            $table->integer('p542');
            $table->integer('p545');
            $table->integer('p550');
            $table->integer('p555');
            $table->integer('p575');
            $table->integer('p580');
            $table->integer('p585');
            $table->integer('p590');
            $table->integer('p600');
            $table->integer('p602');
            $table->integer('p605');
            $table->integer('p610');
            $table->integer('p620');
            $table->integer('p622');
            $table->integer('p630');
            $table->integer('p635');
            $table->integer('p640');
            $table->integer('p645');
            $table->integer('p650');
            $table->integer('p655');
            $table->integer('p660');
            $table->integer('p661');
            $table->integer('p662')->nullable();
            $table->integer('p663');
            $table->integer('p664')->nullable();
            $table->integer('p665')->nullable();
            $table->string('ppin');
            $table->string('pinst');
            $table->string('paddrs');
            $table->string('pcity');
            $table->string('pstabb');
            $table->string('pzip');
            $table->string('pzip4')->nullable();
            $table->string('pcnty');
            $table->string('pcntnm');
            $table->string('pl_add')->nullable();
            $table->string('pl_cit')->nullable();
            $table->string('pl_stabb')->nullable();
            $table->string('pl_zip')->nullable();
            $table->string('pl_zip4')->nullable();
            $table->string('region');
            $table->string('pstansi');
            $table->string('ulocale16');
            $table->string('latitude16');
            $table->string('longitude16');
            $table->string('sldlst16');
            $table->string('sldust16');
            $table->string('stcd16');
            $table->string('logr2016');
            $table->string('higr2016');
            $table->string('frame');
            $table->string('tabflag');
            $table->string('typology');
            $table->string('relig');
            $table->string('orient');
            $table->string('diocese')->nullable();
            $table->string('level');
            $table->string('numstuds');
            $table->string('size');
            $table->string('numteach');
            $table->string('ucommtyp');
            $table->string('tothrs');
            $table->string('males');
            $table->string('s_kg');
            $table->string('p_indian')->nullable();
            $table->string('p_asian')->nullable();
            $table->string('p_pacific')->nullable();
            $table->string('p_hisp')->nullable();
            $table->string('p_white')->nullable();
            $table->string('p_black')->nullable();
            $table->string('p_tr')->nullable();
            $table->string('sttch_rt')->nullable();
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
        Schema::dropIfExists('private_school_surveys');
    }
}