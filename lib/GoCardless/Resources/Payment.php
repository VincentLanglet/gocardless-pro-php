<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  * Payment objects represent payments from a
  * [customer](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-customers)
  * to a
  * [creditor](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-creditors),
  * taken against a Direct Debit
  * [mandate](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-mandates).

  *  * 
  * GoCardless will notify you via a
  * [webhook](https://developer.gocardless.com/pro/2015-04-29/#webhooks)
  * whenever the state of a payment changes.
  */
class Payment extends Base
{



  /**
    * Amount in pence or cents.
    *
    * @return int
    */
    public function amount()
    {
        $field = 'amount';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Amount
    * [refunded](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-refunds)
    * in pence or cents.
    *
    * @return int
    */
    public function amount_refunded()
    {
        $field = 'amount_refunded';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * A future date on which the payment should be collected. If not specified,
    * the payment will be collected as soon as possible. This must be on or
    * after the
    * [mandate](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-mandates)'s
    * `next_possible_charge_date`, and will be rolled-forwards by GoCardless if
    * it is not a working day.
    *
    * @return string
    */
    public function charge_date()
    {
        $field = 'charge_date';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Fixed
    * [timestamp](https://developer.gocardless.com/pro/2015-04-29/#overview-time-zones-dates),
    * recording when this resource was created.
    *
    * @return string
    */
    public function created_at()
    {
        $field = 'created_at';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency
    * code, currently only "GBP" and "EUR" are supported.
    *
    * @return string
    */
    public function currency()
    {
        $field = 'currency';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * A human readable description of the payment.
    *
    * @return string
    */
    public function description()
    {
        $field = 'description';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Unique identifier, beginning with "PM"
    *
    * @return string
    */
    public function id()
    {
        $field = 'id';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Referenced objects. Key values to stdClasses returned.
    *
    * @return Wrapper\NestedObject
    */
    public function links()
    {
        $field = 'links';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * Key-value store of custom data. Up to 3 keys are permitted, with key names
    * up to 50 characters and values up to 200 characters.
    *
    * @return Wrapper\NestedObject
    */
    public function metadata()
    {
        $field = 'metadata';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * An optional payment reference. This will be appended to the mandate
    * reference on your customer's bank statement. For Bacs payments this can be
    * up to 10 characters, for SEPA Core payments the limit is 140 characters.
    *
    * @return string
    */
    public function reference()
    {
        $field = 'reference';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * One of:
    * <ul>
    * <li>`pending_submission`: the payment has been
    * created, but not yet submitted to the banks</li>
    * <li>`submitted`:
    * the payment has been submitted to the banks</li>
    * <li>`confirmed`:
    * the payment has been confirmed as collected</li>
    * <li>`failed`: the
    * payment failed to be processed. Note that payments can fail after being
    * confirmed, if the failure message is sent late by the banks.</li>
    *
    * <li>`charged_back`: the payment has been charged back</li>
    *
    * <li>`paid_out`:  the payment has been paid out</li>
    * <li>`cancelled`:
    * the payment has been cancelled</li>
    * </ul>
    * [pending_submission submitted confirmed failed charged_back paid_out cancelled]
    * @return string
    */
    public function status()
    {
        $field = 'status';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }


  /**
    * Returns a string representation of the project.
    *
    * @return string 
    */
    public function __toString()
    {
        $ret = 'Payment Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
