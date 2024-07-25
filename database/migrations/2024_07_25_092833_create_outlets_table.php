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
        Schema::create('outlets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('food_point_slogan_text')->nullable();
            $table->string('url')->nullable();
            $table->string('url_slug')->nullable();
            $table->string('menu_categories');
            $table->string('restaurant_types');
            $table->integer('discount')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('latitude')->nullable();
            $table->string('logitude')->nullable();
            $table->string('organization_number')->nullable();
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('state_id');
            $table->integer('post_code')->nullable();
            $table->string('address')->nullable();
            $table->string('google_map')->nullable();
            $table->string('fax')->nullable();
            $table->string('web_titile')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('about_us')->nullable();
            $table->string('Dietary');
            $table->string('services')->nullable();
            $table->string('logo_front')->nullable();
            $table->string('logo_admin')->nullable();
            $table->string('favicon')->nullable();
            $table->string('small_logo_admin')->nullable();
            $table->string('templete');
            $table->string('facebook_app_id')->nullable();
            $table->string('merchant_live')->nullable();
            $table->string('merchant_test')->nullable();
            // social mdia
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('instagram')->nullable();
            $table->string('google_play_link')->nullable();
            $table->string('itunes_link')->nullable();
            //SMTP Info
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('host')->nullable();
            $table->string('port')->nullable();
            // Seo Info
            $table->string('link');
            $table->text('meta_keyword');
            $table->text('meta_description');
            $table->text('meta_title');
            // Facebook insights js Code

            $table->string('google_code')->nullable();
            $table->string('facebook_code')->nullable();

            $table->string('phone_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outlets');
    }
};
