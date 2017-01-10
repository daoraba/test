<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class AddCategoriasNombres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nombres', function (Blueprint $table) {
            $table->unsignedInteger('categoria_id')->nullable()->index()->after('nombre');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nombres', function (Blueprint $table) {
            $table->dropColumn('categoria_id');
        });
    }
}