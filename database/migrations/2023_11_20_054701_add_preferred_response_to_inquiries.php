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
        Schema::table('inquiries', function (Blueprint $table) {
            $table->unsignedBigInteger('preferred_response_id')->after('response_status');
            $table->foreign('preferred_response_id')->references('id')->on('responses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inquiries', function (Blueprint $table) {
           $table->dropForeign(['preferred_response_id']);
            $table->dropColumn('preferred_response_id');
        });
    }
};
