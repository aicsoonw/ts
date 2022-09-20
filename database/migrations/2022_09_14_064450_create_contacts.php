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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('baseID')->constrained('bases')->cascadeOnUpdate()->cascadeOnDelete()
                ->comment('ID адресной базы к которой принадлежит данный контакт');
            $table->string('FName')->nullable()
                ->comment('Имя контакта');
            $table->string('LName')->nullable()
                ->comment('Фамилия контакта');
            $table->string('MName')->nullable()
                ->comment('Отчество контакта');
            $table->string('phone')->nullable()
                ->comment('Телефон');
            $table->string('mail')
                ->comment('Адрес эл. почты');
            $table->string('address')->nullable()
                ->comment('Адрес физический');
            $table->string('text1')->nullable()
                ->comment('Пользовательское текстовое поле 1');
            $table->string('text2')->nullable()
                ->comment('Пользовательское текстовое поле 2');
            $table->string('text3')->nullable()
                ->comment('Пользовательское текстовое поле 3');
            $table->string('text4')->nullable()
                ->comment('Пользовательское текстовое поле 4');
            $table->string('text5')->nullable()
                ->comment('Пользовательское текстовое поле 5');
            $table->string('text6')->nullable()
                ->comment('Пользовательское текстовое поле 6');
            $table->string('text7')->nullable()
                ->comment('Пользовательское текстовое поле 7');
            $table->string('text8')->nullable()
                ->comment('Пользовательское текстовое поле 8');
            $table->string('text9')->nullable()
                ->comment('Пользовательское текстовое поле 9');
            $table->string('text10')->nullable()
                ->comment('Пользовательское текстовое поле 10');
            $table->string('text11')->nullable()
                ->comment('Пользовательское текстовое поле 11');
            $table->string('text12')->nullable()
                ->comment('Пользовательское текстовое поле 12');
            $table->string('text13')->nullable()
                ->comment('Пользовательское текстовое поле 13');
            $table->string('text14')->nullable()
                ->comment('Пользовательское текстовое поле 14');
            $table->string('text15')->nullable()
                ->comment('Пользовательское текстовое поле 15');
            $table->double('num1')->nullable()
                ->comment('double');
            $table->double('num2')->nullable()
                ->comment('double');
            $table->double('num3')->nullable()
                ->comment('double');
            $table->double('dec1',12,2)->nullable()
                ->comment('decimal 12 2');
            $table->double('dec2',12,2)->nullable()
                ->comment('decimal 12 2');
            $table->double('dec3',12,2)->nullable()
                ->comment('decimal 12 2');
            $table->dateTime('datetime1')->nullable()
                ->comment('datetime');
            $table->dateTime('datetime2')->nullable()
                ->comment('datetime');
            $table->dateTime('datetime3')->nullable()
                ->comment('datetime');
            $table->tinyInteger('tinyint1')->nullable();
            $table->tinyInteger('tinyint2')->nullable();
            $table->tinyInteger('tinyint3')->nullable();
            $table->mediumText('mtext1')->nullable();
            $table->mediumText('mtext2')->nullable();
            $table->unique(['baseID','mail']);
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
        Schema::dropIfExists('contacts');
    }
};
