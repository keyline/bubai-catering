<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneralSetting;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {

    //     $general_settings = array(
    //       array('id' => '1','site_name' => 'STUMENTO','site_phone' => '1-800-690-1237','site_mail' => 'info@test.com','system_email' => 'info@test.com','site_url' => 'https://stumento.keylines.net.in/','description' => 'Find jobs on us, the job search app built to help you every step of the way. Get free access to millions of job postings personalize.','site_logo' => '1690805871logo.jpeg','site_footer_logo' => '1691216342logo.jpeg','site_favicon' => '1691412749logo.jpeg','become_partner_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is imply dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is imply dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is imply dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is imply dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is imply dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is imply dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry','copyright_statement' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','google_map_api_code' => 'AIzaSyBMbNCogNokCwVmJCRfefB6iCYUWv28LjQ','google_analytics_code' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','google_pixel_code' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','facebook_tracking_code' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','newspaper_section' => '1','theme_color' => '#f10e1d','font_color' => '#ffffff','home_page_youtube_link' => 'https://www.youtube.com/watch?v=6luBa2fhnEA','home_page_youtube_code' => '6luBa2fhnEA','cgst_percent' => '9.00','sgst_percent' => '9.00','igst_percent' => '18.00','stumento_commision_percent' => '10.00','twitter_profile' => null,'facebook_profile' => null,'instagram_profile' => null,'linkedin_profile' => null,'youtube_profile' => null,'sms_authentication_key' => 'aaaaaaaaaaa','sms_sender_id' => 'bbbbbbbbbbbb','sms_base_url' => 'cccccccccccc','from_email' => 'website@stumento.keylines.net.in','from_name' => 'Stumento','smtp_host' => 'stumento.keylines.net.in','smtp_username' => 'website@stumento.keylines.net.in','smtp_password' => '@stumento.keylines.net.in','smtp_port' => '465','meta_title' => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.','meta_description' => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.','footer_text' => '<p>&copy; 2023 STUMENTO. ALL RIGHTS RESERVED.</p>','footer_link_name' => '["Terms & Condition","Privacy Policy","User Agreement","Newspaper Admin","Locations"]','footer_link' => '["http:\\/\\/stumento.keylines.net.in\\/","http:\\/\\/stumento.keylines.net.in\\/","http:\\/\\/stumento.keylines.net.in\\/","http:\\/\\/stumento.keylines.net.in\\/","http:\\/\\/stumento.keylines.net.in\\/"]','footer_link_name2' => '[]','footer_link2' => '[]','stripe_payment_type' => '1','stripe_sandbox_sk' => 'sk_test_51GuDMPEUApiV5UmVJBXIgt4xzRJPeaKVgvQwBc3uV43Y2cb1p6UvzWVnXtaszPirgO1r9H0SMoxnk4K2vxDW7iND00E9JCfAEy','stripe_sandbox_pk' => 'pk_test_51GuDMPEUApiV5UmVatwZJfnA8JPPpOCAHd3HIaD6ohQZnyTSIe1oADaTTFd9vLPQEXlw8KcIVfkTQ3pL8HGYStnr00Fe5GdQjy','stripe_live_sk' => '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','stripe_live_pk' => 'pk_live_51JbJczLqlZ30N6HrFWRo2lKF3JJoJKcm5KfwiQkBS7nrfJwvV4reSQi9qHMYb8CwzEII7daW7YJW5uMlNK72NQIQ00kR5Kh3Wd','partner_commission' => '100.00')
    //     );

    //     foreach ($general_settings as $setting) {
    //         # code...
    //         GeneralSetting::create($setting);
    //     }

    // }
}
