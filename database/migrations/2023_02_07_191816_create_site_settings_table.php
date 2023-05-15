<?php

use App\Models\SiteSetting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key', 50);
            $table->longText('value');
            $table->timestamps();
        });
        $data = [
            ['key' => 'name_ar', 'value' => 'اكتفيشن'],
            ['key' => 'name_en', 'value' => 'Activation'],
            ['key' => 'about_ar', 'value' => 'رائدون في خدمات التسويق الإلكتروني، بأعلى استراتيجيات الاستهداف، وتطوير وبرمجة الويب وتطبيقات الهواتف الذكية'],
            ['key' => 'about_en', 'value' => 'Pioneers in e-marketing services, with the highest targeting strategies, developing and programming web and smart phone applications'],
            ['key' => 'about_image', 'value' => 'about.png'],
            ['key' => 'privacy_ar', 'value' => 'حقوق النشر © 2020 تفعيل. كل الحقوق محفوظة '],
            ['key' => 'privacy_en', 'value' => 'Copyright © 2020 activation. All Rights Reserved'],
            ['key' => 'vision_ar',  'value' =>  'المساهمة في تطوير المشاريع والأعمال بتفعيل أفضل الحلول التقنية المبتكرة.'],
            ['key' => 'vision_en', 'value' => 'Contribute to the development of projects and businesses by activating the best innovative technical solutions.'],
            ['key' => 'vision_image', 'value' => 'vision_image.png'],
            ['key' => 'message_ar', 'value' => 'فعيل التحول الرقمي للمشاريع والأعمال بأفضل الحلول التقنية المبتكرة حول العالم.'],
            ['key' => 'message_en', 'value' => 'Activating the digital transformation of projects and businesses with the best innovative technical solutions around the world.'],
            ['key' => 'message_image', 'value' => 'message_image.png'],
            ['key' => 'our_motto_ar', 'value' => 'تفعيل الحلول التقنية المبتكرة .'],
            ['key' => 'our_motto_en', 'value' => 'Activate innovative technical solutions.'],
            ['key' => 'motto_image', 'value' => 'motto_image.png'],
            ['key' => 'logo', 'value' => 'logo.png'],

        ];
        SiteSetting::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
};
