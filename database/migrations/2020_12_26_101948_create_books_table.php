<?php

use App\Enums\BookStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('slug')->unique();
            $table->longText('details')->nullable();
            $table->integer('quantity')->default(0);
            $table->enum('status', BookStatus::getValues())->default(BookStatus::OLD());
            $table->float('price', 5, 2, true)->default(0.00);
            $table->date('publication_date')->nullable();
            $table->float('vat')->default(0.00);
            $table->softDeletes();
            $table->timestamps();
            $table->integer('user_id');
            $table->foreignId('author_id')
                ->constrained('authors');
            $table->foreignId('book_category_id')
                ->constrained('categories');
            $table->foreignId('approvedBy')
                ->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}