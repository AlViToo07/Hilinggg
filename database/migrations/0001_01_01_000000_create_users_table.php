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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
        

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('telephone');
            $table->string('img_profile')->nullable();
            $table->timestamps();
        });

        
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('telephone');
            $table->string('img_profile')->nullable();
            $table->timestamps();
        });

        
        Schema::create('province', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('regency', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id')->constrained('province')->onDelete('cascade');
            $table->string('name');
        });

        
        Schema::create('district', function (Blueprint $table) {
            $table->id();
            $table->foreignId('regency_id')->constrained('regency')->onDelete('cascade');
            $table->string('name');
        });

        
        Schema::create('destination', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('address');
            $table->foreignId('regency_id')->constrained('regency')->onDelete('cascade');
            $table->timestamps();
        });

        
        Schema::create('hotel', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('hotel_url');
            $table->string('address');
            $table->foreignId('regency_id')->constrained('regency')->onDelete('cascade');
            $table->timestamps();
        });
        


        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('event_url');
            $table->date('date');
            $table->string('address');
            $table->foreignId('regency_id')->constrained('regency')->onDelete('cascade');
            $table->timestamps();
        });

        

        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('customer')->onDelete('cascade');
            $table->enum('item_type', ['Hotel', 'Wisata', 'Event']);
            $table->unsignedBigInteger('item_id');
            $table->integer('rating');
            $table->text('review');
            $table->timestamps();
        });
        

        Schema::create('bookmark', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('customer')->onDelete('cascade');
            $table->enum('item_type', ['Hotel', 'Wisata', 'Event']);
            $table->unsignedBigInteger('item_id');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
