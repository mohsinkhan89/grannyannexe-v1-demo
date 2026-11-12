<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateContactsTable extends Migration
{
    public function up()
    {
        if (Schema::hasTable('contacts')) return;
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone', 40);
            $table->string('postcode', 20)->nullable();
            $table->string('project_type')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        // Preserve enquiries and any table that predates this migration.
    }
}
