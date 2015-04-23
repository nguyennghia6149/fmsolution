<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Box;
use App\Models\Equipment;
use App\Models\Email_pattern;
use App\Models\Testimonial;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Setting;
use Illuminate\Hashing;

class InitTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		DB::table('boxes')->delete();
		DB::table('equipments')->delete();
		DB::table('email_patterns')->delete();
		DB::table('testimonials')->delete();
		DB::table('clients')->delete();
		DB::table('portfolios')->delete();
		DB::table('settings')->delete();

		User::create([ 'email' => 'myduydo47@gmail.com', 'username' => 'admin', 'password' => Hash::make('admin123') ]);

		Box::create([ 'title' => 'DESIGN', 'description' => 'Sed tincidunt imperdiet sollicitudin. Maecenas luctus ipsum ut ante interdum ornare in at tortor. Mauris eros metus, rhoncus vitae dictum.', 'image' => 'industry5.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_SERVICE ]);
		Box::create([ 'title' => 'DEVELOPMENT', 'description' => 'Aenean feugiat interdum ligula, eget facilisis nunc ornare eu. Etiam vestibulum ultricies hendrerit. Praesent porttitor leo a erat ornare dictum.', 'image' => 'industry6.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_SERVICE ]);
		Box::create([ 'title' => 'MOBILE', 'description' => 'Donec tristique fermentum lectus, eu tincidunt lacus vestibulum non. Nam nibh velit, dapibus ac imperdiet vitae, pellentesque ac ante.', 'image' => 'machine6.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_SERVICE ]);

		Box::create([ 'title' => 'Company that changes your view', 'description' => 'At South Bay Solutions, we do industrial metalworking for the U.S., Europe, Asia and many other countries throughout the world.

Our experience in production lets us fulfill a home market and export to many countries around the world.

Mauris in leo sed mauris convallis ornare vel ut lectus. Phasellus sollicitudin, nisi non vestibulum consequat, libero ante luctus justo, sit amet pharetra lacus odio quis libero. In nunc libero, mattis sed rutrum eget, placerat in enim. Pellentesque bibendum, arcu non pulvinar dignissim, est felis blandit sem, a sodales sapien risus nec odio.', 'image' => 'industry3.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_INDUSTRIES ]);
		Box::create([ 'title' => 'Equipment and Manufacturing Capabilities', 'description' => 'Mauris in leo sed mauris convallis ornare vel ut lectus. Phasellus sollicitudin, nisi non vestibulum consequat, libero ante luctus justo, sit amet pharetra lacus odio quis libero. In nunc libero, mattis sed rutrum eget, placerat in enim. Pellentesque bibendum, arcu non pulvinar dignissim, est felis blandit sem, a sodales sapien risus nec odio. Fusce quis leo in ipsum commodo faucibus. Fusce ultrices erat ut ante adipiscing a cursus odio ultrices. Nullam nisi erat, adipiscing consectetur varius eu, dictum in enim. In vestibulum consequat purus.

We acquire only the best machinery from industry leading manufacturers such as Matsuura, Makino, Carl Zeiss, Mori Seki, HAAS, Bridgeport and more.', 'image' => 'industry2.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_INDUSTRIES ]);
		Box::create([ 'title' => 'Mechanical Assembly', 'description' => 'True-Tech is a leading provider of mechanical assembly for the Medical, Aerospace and Semi Conductor capital equipment industries.

In non dui nunc, a molestie nisi. Suspendisse leo risus, commodo sed tempus quis, posuere ut sem. Nulla ac massa tortor, nec blandit dolor. Nulla porttitor rhoncus venenatis. Quisque adipiscing posuere lectus, et laoreet lacus sagittis nec. In hac habitasse platea dictumst. Ut ac elementum turpis. Curabitur rhoncus fermentum consequat. Aenean egestas placerat elit id cursus. Vestibulum sed luctus augue. Praesent sem nisl, bibendum sit amet facilisis at, commodo eu justo. In hac habitasse platea dictumst. Ut ullamcorper mattis nibh, in facilisis metus pellentesque eget.', 'image' => 'industry4.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_INDUSTRIES ]);

		Box::create([ 'title' => 'Our Company', 'description' => 'Mauris in leo sed mauris convallis ornare vel ut lectus. Phasellus sollicitudin, nisi non vestibulum consequat, libero ante luctus justo, sit amet pharetra lacus odio quis libero. In nunc libero, mattis sed rutrum eget, placerat in enim. Pellentesque bibendum, arcu non pulvinar dignissim, est felis blandit sem, a sodales sapien risus nec odio. Fusce quis leo in ipsum commodo faucibus. Fusce ultrices erat ut ante adipiscing a cursus odio ultrices. Nullam nisi erat, adipiscing consectetur varius eu, dictum in enim. In vestibulum consequat purus.

In non dui nunc, a molestie nisi. Suspendisse leo risus, commodo sed tempus quis, posuere ut sem. Nulla ac massa tortor, nec blandit dolor. Nulla porttitor rhoncus venenatis. Quisque adipiscing posuere lectus, et laoreet lacus sagittis nec. In hac habitasse platea dictumst. Ut ac elementum turpis. Curabitur rhoncus fermentum consequat. Aenean egestas placerat elit id cursus. Vestibulum sed luctus augue. Praesent sem nisl, bibendum sit amet facilisis at, commodo eu justo. In hac habitasse platea dictumst. Ut ullamcorper mattis nibh, in facilisis metus pellentesque eget.', 'image' => 'business-woman.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_ABOUTUS ]);

		Box::create([ 'title' => 'Location 1', 'description' => 'Integer lacinia luctus euismod. Donec tristique dapibus tellus ut lobortis. Fusce mollis eros in nunc auctor sit amet imperdiet nisl imperdiet. Donec varius mauris ac urna condimentum ultrices. Vestibulum tempus vehicula dolor id fermentum. Phasellus suscipit nisi eu mi tincidunt ultrices. Phasellus a libero id massa suscipit pellentesque in sed urna. Proin quis convallis ligula. ', 'image' => 'location1.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_LOCATION ]);
		Box::create([ 'title' => 'Location 2', 'description' => 'Integer lacinia luctus euismod. Donec tristique dapibus tellus ut lobortis. Fusce mollis eros in nunc auctor sit amet imperdiet nisl imperdiet. Donec varius mauris ac urna condimentum ultrices. Vestibulum tempus vehicula dolor id fermentum. Phasellus suscipit nisi eu mi tincidunt ultrices. Phasellus a libero id massa suscipit pellentesque in sed urna. Proin quis convallis ligula. ', 'image' => 'location2.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_LOCATION ]);
		Box::create([ 'title' => 'Location 3', 'description' => 'Integer lacinia luctus euismod. Donec tristique dapibus tellus ut lobortis. Fusce mollis eros in nunc auctor sit amet imperdiet nisl imperdiet. Donec varius mauris ac urna condimentum ultrices. Vestibulum tempus vehicula dolor id fermentum. Phasellus suscipit nisi eu mi tincidunt ultrices. Phasellus a libero id massa suscipit pellentesque in sed urna. Proin quis convallis ligula. ', 'image' => 'location3.jpg', 'status' => Box::STT_PUBLISH, 'type' => Box::TYPE_LOCATION ]);

		Email_pattern::create(['type' => Email_pattern::TYPE_NEWSLETTER, 'email_to' => 'votue@gmail.com', 'email_from' => 'myduydo47$gmail.com', 'subject' => 'New Letter', 'content' => 'Content 1' ]);
		Email_pattern::create(['type' => Email_pattern::TYPE_CONTACT, 'email_to' => 'votue@gmail.com', 'email_from' => 'myduydo47$gmail.com', 'subject' => 'Contact', 'content' => 'Content 2' ]);
		
		Testimonial::create([ 'comment' => 'Phasellus eget orci eu enim dignissim commodo. Pellentesque sit amet sem diam, ut posuere ligula. Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem, fringilla sed vulputate egestas, malesuada vitae nulla. Donec a nulla massa, eget dapibus libero. Phasellus varius, felis ac ullamcorper aliquet.', 'author' => 'Vo Tue', 'company' => 'Antsteam', 'position' => 'Web Designer', 'status' => Testimonial::STT_PUBLISH ]);
		Testimonial::create([ 'comment' => 'Aenean commodo tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus a eros sit amet dolor vehicula imperdiet. Integer mollis sagittis odio a adipiscing. Phasellus cursus accumsan adipiscing. Curabitur feugiat varius elit a malesuada. Nullam euismod arcu in ante.', 'author' => 'My Do', 'company' => 'Antsteam', 'position' => 'Web Designer', 'status' => Testimonial::STT_PUBLISH ]);

		Client::create([ 'description' => 'description1', 'company' => 'Antsteam', 'website' => 'Antsteam.net', 'image' => 'themeforest.png' ]);
		Client::create([ 'description' => 'description2', 'company' => 'Antsteam', 'website' => 'Antsteam.net', 'image' => 'photodune.png' ]);
		Client::create([ 'description' => 'description3', 'company' => 'Antsteam', 'website' => 'Antsteam.net', 'image' => 'graphicriver.png' ]);
		Client::create([ 'description' => 'description4', 'company' => 'Antsteam', 'website' => 'Antsteam.net', 'image' => 'codecanyon.png' ]);

		Portfolio::create([ 'name' => 'JOHN DOE', 'image' => 'team-member-1.png', 'short_description' => 'Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.', 'client_id' => '1' ]);
		Portfolio::create([ 'name' => 'JANE DOE', 'image' => 'team-member-2.png', 'short_description' => 'Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.', 'client_id' => '2' ]);
		Portfolio::create([ 'name' => 'JOHN DOE', 'image' => 'team-member-3.png', 'short_description' => 'Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.', 'client_id' => '3' ]);
		Portfolio::create([ 'name' => 'JANE DOE', 'image' => 'team-member-4.png', 'short_description' => 'Cras pellentesque suscipit iaculis. Nulla lobortis, risus sed consequat pretium, ligula tellus luctus ipsum, non egestas elit enim et orci. Sed blandit ligula.', 'client_id' => '4' ]);

		Setting::create([ 'name' => 'contact_address', 'value' => '99 Phung Hung Street' ]);
		Setting::create([ 'name' => 'contact_phone', 'value' => '0909090909' ]);
		Setting::create([ 'name' => 'contact_fax', 'value' => '0909090909' ]);
		Setting::create([ 'name' => 'contact_email', 'value' => 'myduydo47@gmail.com' ]);
		Setting::create([ 'name' => 'social_skype', 'value' => 'duymy47' ]);
		Setting::create([ 'name' => 'social_facebook', 'value' => 'duymy47' ]);
		Setting::create([ 'name' => 'social_twitter', 'value' => 'duymy47' ]);
		Setting::create([ 'name' => 'social_google', 'value' => 'duymy47' ]);
		Setting::create([ 'name' => 'text_widget', 'value' => 'duymy47' ]);
	}

}