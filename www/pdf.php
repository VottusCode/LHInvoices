<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use LHInvoices\App;
use Tracy\Debugger;
Debugger::enable();

$app = new App;
$app->boot()

// require __DIR__ . '/pdf_template.php';

// use Mpdf\Mpdf;
// use Latte\Engine;

// $latte = new Latte\Engine;
// $latte->render(__DIR__ . '')

// $pdf = new Mpdf(['']);
// $pdf->setSourceFile('pdf_template.html');

// $pdf->WriteHTML($html);

// $pdf->Output();

?>
