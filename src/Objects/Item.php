<?php declare(strict_types=1);

namespace LHInvoices\Objects;

class Item
{

    /** @var string */
    public $id;

    /** @var string */
    public $title;

    /** @var string */
    public $detail;

    /** @var string */
    public $quantity;

    /** @var string */
    public $pricePerOne;

    /** @var string */
    public $totalWithoutTax;

}
