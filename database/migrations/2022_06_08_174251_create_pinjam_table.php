<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")
                  ->references('id')
                  ->on('users')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->bigInteger("pengarang_id")->unsigned();
            $table->foreign("pengarang_id")
                  ->references('id')
                  ->on('pengarang')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->bigInteger("buku_id")->unsigned();
            $table->foreign("buku_id")
                  ->references('id')
                  ->on('buku')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->string('total_p')->nullable();
            $table->string('j_denda')->nullable();
            $table->string('total_denda')->nullable();
            $table->string('h_keterlambatan')->nullable();
            $table->date('deadline')->nullable();

            $table->enum("roll", 
                                    [
                                     'Terlambat',
                                     'Tidak Terlambat'
                                    ]
                        )->nullable();
            
            $table->enum("status", 
                                    [
                                     'New',
                                     'History'
                                    ]
                        )->nullable();

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
        Schema::dropIfExists('pinjam');
    }
};
