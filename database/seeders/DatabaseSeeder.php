<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\ProjectContentType;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \DB::table('project_categories')->insert([
            ['name' => 'Online stores'],
            ['name' => 'SAAS'],
            ['name' => 'Cryptocurrencies'],
        ]);

        \DB::table('projects')->insert([
            [
                'title' => 'opteka',
                'banner' => '/images/projects/orteka/header-image.png',
                'subtitle' => 'We created a new website from scratch, which became the largest Russian online health products store.',
                'description' => 'We created a new website from scratch, which became the largest Russian online health products store.'],
            [
                'title' => 'lubava',
                'banner' => '/images/projects/lubava/header-image.png',
                'subtitle' => 'In just 3 weeks, we developed a mobile application for an online food delivery service',
                'description' => 'In just 3 weeks, we developed a mobile application for an online food delivery service'
            ],
        ]);

        Project::find(1)->content()->createMany([
            [
                'text' => "Development of the company's website from the ground up with the further automatisation of online trading processes. Increase in store money turnover and conversion, as well as improving the quality of the service provided.",
                'type' => ProjectContentType::OBJECTIVES,
            ],
            [
                'title' => 'image1.png',
                'image' => '/images/projects/orteka/image1.png',
                'type' => ProjectContentType::IMAGE,
            ],
            [
                'title' => 'Stages of development',
                'list' => '["Generation and prototyping of new functions in a tight deadline", "Design development", "Transferring the site to the new CMS Bitrix", "Business process automation (BPA)", "Integration of the site with goods accounting systems", "Upgrade of the order processing system in the call centre."]',
                'image' => '/images/projects/orteka/image2.png',
                'type' => ProjectContentType::LIST,
            ],
            [
                'title' => 'Smart Search Engine',
                'text' => "There are thousands of product items in the company's catalogue. For quick and easy search, we have developed a smart search engine that can understand what the user is looking for from the first letters of the search query",
                'image' => '/images/projects/orteka/image3.png',
                'type' => ProjectContentType::TEXT_IMAGE,
            ],
            [
                'title' => 'Booking an appointment with a doctor',
                'text' => "For the convenience of users we have developed functionality to book an appointment with an orthopedic specialist. The site visitor can choose the suitable day, time, service and the exact brand store",
                'image' => '/images/projects/orteka/image4.png',
                'type' => ProjectContentType::TEXT_IMAGE,
            ],
            [
                'title' => 'Online medical consultation',
                'text' => "At the user's discretion it's possible to take advantage of a free online consultation. We have integrated the video conferencing service with the new website",
                'image' => '/images/projects/orteka/image5.png',
                'type' => ProjectContentType::TEXT_IMAGE,
            ],
            [
                'title' => 'OVER 3.5 MONTHS',
                'list' => '["Developed and launched the website.", "Monthly turnover of e-commerce increased by 8 times."]',
                'type' => ProjectContentType::RESULTS,
            ],
        ]);

        Project::find(2)->content()->createMany([
            [
                'text' => "Create a mobile application in a short time for two platforms, as well as an operator's personal account for orders management",
                'type' => ProjectContentType::OBJECTIVES,
            ],
            [
                'image' => "/images/projects/lubava/image1.png",
                'type' => ProjectContentType::IMAGE,
            ],
            [
                'title' => 'Technologies Used',
                'list' => '["Microsoft SQL Server", "1C: Complex Automation", "1C: Enterprise Platform 8.3"]',
                'image' => '/images/projects/lubava/image2.png',
                'type' => ProjectContentType::LIST,
            ],
        ]);

        \DB::table('tags')->insert([
            ['name' => 'Bitrix'],
            ['name' => 'HTML 5'],
            ['name' => 'CSS 3'],
            ['name' => 'Microsoft SQL Server'],
            ['name' => '1C: Complex Automation'],
            ['name' => '1C: Enterprise Platform 8.3']
        ]);

        Project::find(1)->tags()->sync([1, 2, 3]);
        Project::find(2)->tags()->sync([4, 5, 6]);
    }
}
