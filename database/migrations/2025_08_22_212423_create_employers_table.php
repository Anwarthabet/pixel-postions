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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
               $table->foreignIdFor(App\Models\User::class)->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email')->uniclsque();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();  
        $table->string('website')->nullable();

               $table->string('logo')->default('images/no-image.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
