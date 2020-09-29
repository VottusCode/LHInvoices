<?php

declare(strict_types=1);

namespace LHInvoices;

use Knp\Snappy\Pdf;
use LHInvoices\Objects\InvoiceObject;
use Latte\Engine as Latte;
use LHInvoices\Objects\Invoice;
use LHInvoices\Objects\Item;
use LHInvoices\Objects\Pricing;
use Tracy\Debugger;

/**
 * Class App
 * @package LHInvoices
 * @author Filip Vottus
 * @copyright Lite-Host.eu, 2020
 */
class App
{

    public static function start()
    {
        /**
         * Information about the User
         *
         * This object contains all information that the invoice needs.
         * TEMPORARY: Hardcoded
         */
        $info = new InvoiceObject([
            "invoice" => new Invoice([
                "name" => "Jan Novák",
                "address" => "Novákova 1, Praha",
                "email" => "novak@example.com",
                "invoiceNum" => "111",
                "invoiceCreated" => "09.08.2020",
                "invoiceDue" => "10.09.2020",
            ]),
            "items" => array(new Item([
                "id" => "1",
                "title" => "Minecraft Lite",
                "detail" => "",
                "quantity" => "1",
                "pricePerOne" => "100",
                "totalWithoutTax" => "100"
            ]), new Item([
                "id" => "2",
                "title" => "TS3 Free",
                "detail" => "(Zdarma k serveru)",
                "quantity" => "1",
                "pricePerOne" => "0",
                "totalWithoutTax" => "0"
            ])),
            "pricing" => new Pricing([
                "totalWithoutTax" => "100",
                "taxPercent" => "21",
                "taxTotal" => "21",
                "totalWithTax" => "121"
            ])
        ]);

        $html = "";

        /**
         * Loading Styles
         *
         * Snappy doesn't work well with outside CSS,
         * so as a workaround all CSS files in the $styles
         * folder are concatenated into the resulting HTML.
         *
         * Define the path in the $styles variable.
         */
        $styles = __DIR__ . '/../www/assets/*';
        foreach (glob($styles) as $file) {
          if (is_readable($file)) {
              $content = file_get_contents($file);
              $html .= "<style>$content</style>";
          }
        }

        /**
         * Rendering the HTML
         *
         * HTML is rendered via Latte, Nette's templating system.
         */
        $latte = new Latte;
        $html .= $latte->renderToString(__DIR__ . '/templates/pdf.latte', $info);

        /**
         * Setting headers
         *
         * The Content-Type header is mandatory for browsers
         * to recognize that it is indeed a PDF file.
         */
        header('Content-Type: application/pdf');

        /**
         * Creating the final PDF
         *
         * Using Snappy, the HTML is converted to a PDF file
         * and the output is sent to the user.
         */
        $pdf = new Pdf('/usr/local/bin/wkhtmltopdf', ["encoding"=>"utf-8"]);
        echo $pdf->getOutputFromHtml($html);
    }
}
