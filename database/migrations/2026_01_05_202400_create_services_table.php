<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('code', 20)->unique();          // BS001 / SI001
            $table->string('title');
            $table->string('slug')->unique();

            $table->string('excerpt', 300)->nullable();    // deskripsi singkat untuk list/card
            $table->longText('content')->nullable();       // deskripsi lengkap (rich)

            // fleksibel: bisa banyak item (KBLI/LPJK) per service
            $table->json('licenses')->nullable();

            $table->string('icon')->nullable();           // misal: heroicon name / svg path
            $table->string('thumbnail')->nullable();      // gambar cover (optional)

            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
