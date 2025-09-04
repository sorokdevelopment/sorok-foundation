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
        Schema::table('payments', function (Blueprint $table) {
            $table->unsignedBigInteger('paymentable_id')->nullable()->after('champion_id');
            $table->string('paymentable_type')->nullable()->after('paymentable_id');
            $table->tinyInteger('month_of_payment')->nullable()->after('paymentable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn(['paymentable_id', 'paymentable_type', 'month_of_payment']);
        });
    }
};
