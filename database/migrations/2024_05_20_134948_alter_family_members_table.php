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
        Schema::table('family_members', function (Blueprint $table) {
            $table->dropColumn(['cpf_or_nis', 'civil_name', 'relationship', 'birth_date', 'gender', 'occupation', 'remuneration']);
            $table->string('cpf_nis_member');
            $table->string('civil_name_member');
            $table->string('relationship_member');
            $table->date('birth_date_member');
            $table->string('gender_member');
            $table->string('occupation_member');
            $table->string('remuneration_member');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
