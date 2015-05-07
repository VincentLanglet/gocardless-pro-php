<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  * Mandates represent the Direct Debit mandate with a
  * [customer](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-customers).

  *  * 
  * GoCardless will notify you via a
  * [webhook](https://developer.gocardless.com/pro/2015-04-29/#webhooks)
  * whenever the status of a mandate changes.
  */
class Mandate extends Base
{



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
    * Unique identifier, beginning with "MD"
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
    * The earliest date a newly created payment for this mandate could be
    * charged
    *
    * @return string
    */
    public function next_possible_charge_date()
    {
        $field = 'next_possible_charge_date';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Unique 6 to 18 character reference. Can be supplied or auto-generated.
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
    * Direct Debit scheme to which this mandate and associated payments are
    * submitted. Can be supplied or automatically detected from the customer's
    * bank account. Currently only "bacs" and "sepa_core" are supported.
    *
    * @return string
    */
    public function scheme()
    {
        $field = 'scheme';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * One of:
    * <ul>
    * <li>`pending_submission`: the mandate has not yet
    * been submitted to the customer's bank</li>
    * <li>`submitted`: the
    * mandate has been submitted to the customer's bank but has not been
    * processed yet</li>
    * <li>`active`: the mandate has been successfully
    * set up by the customer's bank</li>
    * <li>`failed`: the mandate could
    * not be created</li>
    * <li>`cancelled`: the mandate has been
    * cancelled</li>
    * <li>`expired`: the mandate has expired due to
    * dormancy</li>
    * </ul>
    * [pending_submission submitted active failed cancelled expired]
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
        $ret = 'Mandate Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
