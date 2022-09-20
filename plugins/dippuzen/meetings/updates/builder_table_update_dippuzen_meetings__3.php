<?php namespace Dippuzen\Meetings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDippuzenMeetings3 extends Migration
{
    public function up()
    {
        Schema::table('dippuzen_meetings_', function($table)
        {
            $table->renameColumn('date_', 'date');
        });
    }
    
    public function down()
    {
        Schema::table('dippuzen_meetings_', function($table)
        {
            $table->renameColumn('date', 'date_');
        });
    }
}
