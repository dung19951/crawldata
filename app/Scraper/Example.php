<?php

namespace App\Scraper;

use App\Models\Point;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class Example
{

    public function scrape()
    {
        $url = 'https://thptquocgia.edu.vn/phodiem/';

        $client = new Client();

        $crawler = $client->request('GET', $url);

            $crawler->filter('table.table-bordered tbody tr td')->each(
            function (Crawler $node) {
                $number = $node->filter('tr td:nth-child(2)')->text();
                $cluster = $node->filter('tr td:nth-child(3)')->text();
                $maths = $node->filter('#Toan td')->text();
                $literature = $node->filter('#NguVan td')->text();
                $english = $node->filter('#NgoaiNgu td')->text();
                $physics = $node->filter('#VatLi td')->text();
                $chemistry = $node->filter('#HoaHoc td')->text();
                $biological = $node->filter('#SinhHoc td')->text();
                $history = $node->filter('#LichSu td')->text();
                $geography = $node->filter('#Diali td')->text();
                $civic_education = $node->filter('#GDCD td')->text();
                Point::create([
                    'identification_number'=>$number,
                    'exam_cluster'=>$number,
                    'maths'=>$maths,
                    'literature'=>$literature,
                    'english'=>$english,
                    'physics'=>$physics,
                    'chemistry'=>$chemistry,
                    'biological'=>$biological,
                    'history'=>$history,
                    'geography'=>$geography,
                    'civic_education'=>$civic_education,
                ]);
            }
        );
    }
}