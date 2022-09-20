<?php namespace Dippuzen\Meetings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDippuzenMeetings extends Migration
{
    public function up()
    {
        Schema::create('dippuzen_meetings_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->date('date');
            $table->text('participants');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dippuzen_meetings_');
    }
}
