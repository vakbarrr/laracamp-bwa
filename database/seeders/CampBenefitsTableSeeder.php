<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CampBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit '
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021 & Display'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Videos'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opportinity'
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit'
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos'
            ],
            [
                'camp_id' => 2,
                'name' => 'Future Job Opportinity'
            ],
        ];

        CampBenefit::insert($CampBenefits);
    }
}
