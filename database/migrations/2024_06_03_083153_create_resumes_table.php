<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();//ismi
            $table->string('surname')->nullable(); //familyasi
            $table->string('patronymic')->nullable();//otasining ismi
            $table->string('level')->nullable(); //til bilish darajasi
            $table->text('level2')->nullable();//til bilish darajasi
            $table->string('phone')->nullable(); //tel:
            $table->string('task')->nullable(); // ish turi sellect
            $table->string('img')->nullable(); //rasim profil
            $table->string('status')->nullable();  //oqilgan yoki oqilmaganligi
            $table->string('specialty')->nullable();
            $table->text('html_code')->nullable(); // Поле для хранения HTML кода
            $table->string('nationality')->nullable();
            $table->string('age')->nullable();
            $table->string('Address')->nullable();
            $table->string('imge')->nullable();
            $table->string('email')->unique();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
