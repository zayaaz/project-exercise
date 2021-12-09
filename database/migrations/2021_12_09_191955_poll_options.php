<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PollOptions extends Migration
{
    /** @var string $tableName  The name of the table */
    protected $tableName = 'poll_options';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->tableName)) {
            return;
        }
        
        Schema::create($this->tableName, function (Blueprint $table) {
            // Primary columns
            $table->id();
            $table->unsignedBigInteger('poll_id');
            $table->string('option_name', 300);
            $table->timestamps();
        
            // Foreign keys
            $table->foreign('poll_id')->references('id')->on('poll');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
