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
        Schema::create('sendings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete()
                ->comment('Вторичный ключ. пользователь');
            $table->string('name');
            $table->foreignId('base')->constrained('bases')->cascadeOnUpdate()->cascadeOnDelete()
                ->comment('Вторичный ключ. база');
            $table->foreignId('template')->constrained('templates')->cascadeOnUpdate()->cascadeOnDelete()
                ->comment('Вторичный ключ. шаблон');
            $table->json('content');
            $table->boolean('draft')->default(true)
                ->comment('Является ли черновиком');
            $table->foreignId('from')->constrained('senders')
                ->comment('Вторичный ключ. адрес отправления');
            $table->string('theme')
                ->comment('тема письма');
            $table->timestamp('schedule')
                ->comment('Запланированное время отправки');
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
        Schema::dropIfExists('sendings');
    }
};
