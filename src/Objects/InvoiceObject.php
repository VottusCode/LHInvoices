<?php declare(strict_types=1);

namespace LHInvoices\Objects;

class InvoiceObject {

    function __construct($constructor)
    {
        foreach ($constructor as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            } else {
                trigger_error("Passing redundant key $key to InvoiceObject, ignoring.", E_USER_WARNING);
            }
        }
    }

    public $invoice;

    public $items;

    public $pricing;

}
