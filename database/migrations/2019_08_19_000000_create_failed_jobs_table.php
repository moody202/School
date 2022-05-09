<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreateFailedJobsTable extends Migration
=======
return new class extends Migration
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
=======
            $table->string('uuid')->unique();
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
<<<<<<< HEAD
}
=======
};
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
