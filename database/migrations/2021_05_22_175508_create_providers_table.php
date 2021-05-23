<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->text('txtTitle')->nullable();
            $table->string('txtFn');
            $table->string('txtMn')->nullable();
            $table->string('txtLn');
            $table->string('txtPe');
            $table->string('txtSe')->nullable();
            $table->string('txtPp');
            $table->string('txtSn')->nullable();
            $table->string('txtWa');
            $table->text('txtAo');
            $table->text('txtAt')->nullable();
            $table->string('txtCity');
            $table->string('txtState');
            $table->string('country');
            $table->string('txtZc')->nullable();
            $table->string('txtPc')->nullable();
            $table->string('txtCd');
            $table->text('txtSpcl1');
            $table->text('txtBc')->nullable();
            $table->date('dateBce1')->nullable();
            $table->text('txtBc2')->nullable();
            $table->date('dateBce2')->nullable();
            $table->text('txtBc3')->nullable();
            $table->date('dateBce3')->nullable();
            $table->string('txtBc4')->nullable();
            $table->string('txtEmp')->nullable();
            $table->text('txtHp')->nullable();
            $table->string('txtOp')->nullable();
            $table->text('txtLan')->nullable();
            $table->text('txtGen');
            $table->string('txtEth');
            $table->string('txtCoi');
            $table->string('txtAd');
            $table->string('txtAh');
            $table->string('txtOai')->nullable();
            $table->string('txtHow');
            $table->string('txtContactMeth');
            $table->string('txtComm')->nullable();
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
        Schema::dropIfExists('providers');
    }
}
