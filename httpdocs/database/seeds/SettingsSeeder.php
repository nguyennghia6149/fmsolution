<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SettingsSeeder extends Seeder {
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
    }

    public function up()
    {
        DB::table('settings')->insert(
            array(
                array( 'name' => 'contact_address', 'value' => '478 E.Santa Clara St Ste 201'),
                array( 'name' => 'contact_phone', 'value' => '888888888'),
                array( 'name' => 'contact_fax', 'value' => '888888888'),
                array( 'name' => 'contact_email', 'value' => 'fmsolution@gmail.com'),
                array( 'name' => 'social_skype_id', 'value' => '#fmsolution'),
                array( 'name' => 'social_facebook_id', 'value' => '#fmsolution'),
                array( 'name' => 'social_twitter_id', 'value' => '#fmsolution'),
                array( 'name' => 'social_google', 'value' => '#fmsolution'),
                array( 'name' => 'text_widget', 'value' => 'Insert Text Widget in admin panel')
            )
        );

    }
    public function down()
    {
        DB::table('settings')->delete();
    }
}
