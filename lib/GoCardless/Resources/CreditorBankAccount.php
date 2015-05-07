<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  * Creditor Bank Accounts hold the bank details of a
  * [creditor](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-creditor).
  * These are the bank accounts which your
  * [payouts](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-payouts)
  * will be sent to.
  * 
  * Note that creditor bank accounts must be unique,
  * and so you will encounter a `bank_account_exists` error if you try to create
  * a duplicate bank account. You may wish to handle this by updating the
  * existing record instead, the ID of which will be provided as
  * `links[creditor_bank_account]` in the error response.
  */
class CreditorBankAccount extends Base
{



  /**
    * Name of the account holder, as known by the bank. Usually this is the same
    * as the name stored with the linked
    * [creditor](https://developer.gocardless.com/pro/2015-04-29/#api-endpoints-creditors).
    * This field cannot exceed 18 characters.
    *
    * @return string
    */
    public function account_holder_name()
    {
        $field = 'account_holder_name';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Last two digits of account number.
    *
    * @return string
    */
    public function account_number_ending()
    {
        $field = 'account_number_ending';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Name of bank, taken from sort code.
    *
    * @return string
    */
    public function bank_name()
    {
        $field = 'bank_name';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * [ISO
    * 3166-1](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
    * alpha-2 code. Currently only GB is supported.
    *
    * @return string
    */
    public function country_code()
    {
        $field = 'country_code';
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
    * code, defaults to national currency of `country_code`.
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
    * Boolean value showing whether the bank account is enabled or disabled.
    *
    * @return bool
    */
    public function enabled()
    {
        $field = 'enabled';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * Unique identifier, beginning with "BA"
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
    * Returns a string representation of the project.
    *
    * @return string 
    */
    public function __toString()
    {
        $ret = 'CreditorBankAccount Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
