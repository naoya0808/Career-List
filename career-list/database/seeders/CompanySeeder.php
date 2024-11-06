<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $companies = [
            [
                'company_name' => '株式会社サイバーエージェント',
                'company_url' => 'https://www.cyberagent.co.jp/',
                'application_status' => '書類選考',
                'industry' => 'IT',
                'location' => '東京',
                'rating' => 5,
                'notes' => '福利厚生が充実。新しい技術の採用に積極的で学びが多い。残業は比較的少なめ。',
                'user_id' => 2,
            ],
            [
                'company_name' => '株式会社メルカリ',
                'company_url' => 'https://about.mercari.com/',
                'application_status' => '一次面接',
                'industry' => 'IT',
                'location' => '東京',
                'rating' => 4,
                'notes' => 'グローバル展開しているため英語のスキルも必要。社内勉強会が多く成長できる環境。',
                'user_id' => 2,
            ],
            [
                'company_name' => 'LINE株式会社',
                'company_url' => 'https://linecorp.com/ja/',
                'application_status' => '最終面接',
                'industry' => 'IT',
                'location' => '東京',
                'rating' => 5,
                'notes' => '新規事業も多く、多種多様な開発経験ができる。フレックス制度でワークライフバランスも取りやすい。',
                'user_id' => 2,
            ],
            [
                'company_name' => '株式会社ZOZO',
                'company_url' => 'https://corp.zozo.com/',
                'application_status' => '二次面接',
                'industry' => 'IT',
                'location' => '千葉',
                'rating' => 3,
                'notes' => '独自のシステムでファッション関連に強み。開発環境が整っているが、繁忙期の残業が多め。',
                'user_id' => 2,
            ],
        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
