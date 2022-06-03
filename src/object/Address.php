<?php namespace Paymennt\object;

require_once(__DIR__.'/../Validatable.php');

use Paymennt\Exception as Exception;

/**
*  Address class
*
*  Class representing a customer address
*
*  @author bashar
*/
class Address extends \Paymennt\Validatable {

  // private const REGEX_COUNTRY = "/^[a-zA-Z]{3}$/";

  /**
  * name on address
  * @var string
  */
  public $name;

  /**
  * address line 1
  * @var string
  */
  public $address1;

  /**
  * address line 2
  * @var string
  */
  public $address2;

  /**
  * address city
  * @var string
  */
  public $city;

  /**
  * address state
  * @var string
  */
  public $state;

  /**
  * address zip or post code
  * @var string
  */
  public $zip;

  /**
  * address ISO 3-letter country code (Ex. USA, FRA, UAE, KSA, IND, etc)
  * @var string
  */
  public $country;

  /*************************************************************************************************
  * CLASS METHODS
  */

  /**
  * Validates instasnce values. Throws exception if invalid
  */
  public function validate() {
    $this->validateNullEmpty("name");
    $this->validateNullEmpty("address1");
    $this->validateNullEmpty("city");
    $this->validateNullEmpty("country");
  }
}