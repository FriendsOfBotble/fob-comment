<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (! Schema::hasTable('fob_comments')) {
            return;
        }

        Schema::table('fob_comments', function (Blueprint $table): void {
            if (! $this->indexExists('fob_comments', 'fob_comments_reference_status_index')) {
                $table->index(
                    ['reference_type', 'reference_id', 'status'],
                    'fob_comments_reference_status_index'
                );
            }
        });
    }

    public function down(): void
    {
        if (! Schema::hasTable('fob_comments')) {
            return;
        }

        Schema::table('fob_comments', function (Blueprint $table): void {
            if ($this->indexExists('fob_comments', 'fob_comments_reference_status_index')) {
                $table->dropIndex('fob_comments_reference_status_index');
            }
        });
    }

    protected function indexExists(string $table, string $indexName): bool
    {
        $connection = Schema::getConnection();
        $database = $connection->getDatabaseName();
        $driver = $connection->getDriverName();

        if ($driver === 'mysql' || $driver === 'mariadb') {
            return (bool) $connection->selectOne(
                'SELECT 1 FROM information_schema.statistics WHERE table_schema = ? AND table_name = ? AND index_name = ? LIMIT 1',
                [$database, $table, $indexName]
            );
        }

        if ($driver === 'pgsql') {
            return (bool) $connection->selectOne(
                'SELECT 1 FROM pg_indexes WHERE schemaname = current_schema() AND tablename = ? AND indexname = ? LIMIT 1',
                [$table, $indexName]
            );
        }

        return in_array($indexName, array_map(
            fn (array $index): string => $index['name'],
            Schema::getIndexes($table)
        ), true);
    }
};
