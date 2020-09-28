<?php declare(strict_types=1);

namespace LHInvoices;

use Latte\Engine;
use Tracy\Debugger;

class App
{

    public function boot()
    {
        /*$latte = new Engine;

        $info = [
            "invoice" => [
                "name" => "Jan Novák",
                "address" => "Novákova 1, Praha",
                "email" => "novak@example.com",
                "invoiceNum" => "111",
                "invoiceCreated" => "09.08.2020",
                "invoiceDue" => "10.09.2020",
            ],
            "items" => array([
                "id" => "1",
                "description" => [
                    "title" => "Minecraft hosting",
                    "detail" => "Balíček Lite - IP: mcn1.lite-host.eu:33456"
                ],
                "amount" => "1",
                "pricePerOne" => "100",
                "totalWithoutTax" => "100"
            ], [
                "id" => "2",
                "description" => [
                    "title" => "TeamSpeak3 Server Free",
                    "detail" => "TS3 Server zdarma k Minecraft hostingu - IP: tsn3.lite-host.eu:9876"
                ],
                "amount" => "0",
                "pricePerOne" => "0",
                "totalWithoutTax" => "0"
            ]),
            "pricing"=>[
                "totalWithoutTax"=>"100",
                "taxPercent"=>"21",
                "taxTotal"=>"21",
                "totalWithTax"=>"121"
            ]
        ];
        Debugger::barDump($info);

        $html = $latte->renderToString(__DIR__ . '/templates/pdf.latte', $info);
        echo $html;*/

        // FIXME
        echo "FIXME: src/App.php";

    }

}


