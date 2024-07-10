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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('project_manager')->nullable();
            $table->date('expected_date_for_completion')->nullable();
            $table->string('percentage_completion')->nullable();
            $table->string('description')->nullable();
            $table->string('budget')->nullable();
            $table->string('timeline_start')->nullable();
            $table->string('timeline_end')->nullable();
            $table->string('scope')->nullable();
            $table->text('objectives')->nullable();
            $table->text('deliverables')->nullable();
            $table->text('milestones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
