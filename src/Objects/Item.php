<?php declare(strict_types=1);

namespace LHInvoices\Objects;

class Item
{

    function __construct($constructor) {
        foreach ($constructor as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            } else {
                trigger_error("Passing redundant key $key to Item, ignoring.", E_USER_WARNING);
            }
        }
    }

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
