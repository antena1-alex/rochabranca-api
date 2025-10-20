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
        Schema::table('contacts', function (Blueprint $table) {
            $table->renameColumn('nome', 'first_name');
            $table->renameColumn('sobrenome', 'last_name');
            $table->renameColumn('telefone', 'phone');
            $table->renameColumn('termos_aceitos', 'terms_accepted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->renameColumn('first_name', 'nome');
            $table->renameColumn('last_name', 'sobrenome');
            $table->renameColumn('phone', 'telefone');
            $table->renameColumn('terms_accepted', 'termos_aceitos');
        });
    }
};
