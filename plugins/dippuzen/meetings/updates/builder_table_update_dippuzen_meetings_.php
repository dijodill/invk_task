<?php namespace Dippuzen\Meetings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDippuzenMeetings extends Migration
{
    public function up()
    {
        Schema::table('dippuzen_meetings_', function($table)
        {
            $table->dateTime('date')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dippuzen_meetings_', function($table)
        {
            $table->date('date')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
