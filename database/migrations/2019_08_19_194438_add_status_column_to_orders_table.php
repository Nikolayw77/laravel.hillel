<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusColumnToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('orders')) {
            Schema::table('orders', function (Blueprint $table) {
                if (!Schema::hasColumn('orders', 'status_id')) {
                    $table->unsignedBigInteger('status_id'); //->after('');

                    $table->foreign('status_id')
                        ->references('id')
                        ->on('order_statuse');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('orders', 'status_id')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropForeign('status_id');
                $table->dropColumn('status_id');
            });
        };
    }
}
