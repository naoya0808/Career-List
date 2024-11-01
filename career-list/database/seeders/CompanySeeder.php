<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Company::create([
            'company_name' => '株式会社DeNA',
            'company_url' => 'https://dena.com/jp/',
            'application_status' => '二次面接',
            'industry' => 'IT',
            'location' => '東京',
            'rating' => 5,
            'notes' => 'エンジニアの技術が高く、ビジネス的能力も高い。研修制度が整っておりキャリア形成が高い領域にある。昨今は多少景気が悪いが給料は高くホワイト',
            'user_id' => 1, 
        ]);
    }
}
