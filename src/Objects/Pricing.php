<?php declare(strict_types=1);

namespace LHInvoices\Objects;

class Pricing
{

    function __construct($constructor) {
        foreach ($constructor as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            } else {
                trigger_error("Passing redundant key $key to Pricing, ignoring.", E_USER_WARNING);
            }
        }
    }

    /** @var string */
    public $totalWithoutTax;

    /** @var string */
    public $taxPercent;

    /** @var string */
    public $taxTotal;

    /** @var string */
    public $totalWithTax;

}
