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
        Schema::table('movies', function (Blueprint $table) {
            // 単一カラムインデックス
            $table->index('deleted_at', 'idx_deleted_at');
            $table->index('country_id', 'idx_country_id');
            $table->index('release_year', 'idx_release_year');
            $table->index('director', 'idx_director');
            $table->index('title', 'idx_title');
            
            // 複合インデックス
            $table->index(['deleted_at', 'release_year'], 'idx_deleted_release');
            $table->index(['deleted_at', 'country_id'], 'idx_deleted_country');
        });
    }

    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            // インデックスを削除（ロールバック用）
            $table->dropIndex('idx_deleted_at');
            $table->dropIndex('idx_country_id');
            $table->dropIndex('idx_release_year');
            $table->dropIndex('idx_director');
            $table->dropIndex('idx_title');
            $table->dropIndex('idx_deleted_release');
            $table->dropIndex('idx_deleted_country');
        });
    }
};
