<?php namespace Dippuzen\Meetings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDippuzenMeetings2 extends Migration
{
    public function up()
    {
        Schema::table('dippuzen_meetings_', function($table)
        {
            $table->renameColumn('date', 'date_');
        });
    }
    
    public function down()
    {
        Schema::table('dippuzen_meetings_', function($table)
        {
            $table->renameColumn('date_', 'date');
        });
    }
}
