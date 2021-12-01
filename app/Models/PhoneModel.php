<?php
/**
 * User: Natalia Ferraz
 */

namespace App\Models;


/**
 * Class PhoneModel
 *
 * @package App\Models
 */
class PhoneModel
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $contacts_id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $country_code;
    /**
     * @var string
     */
    private $phone_number;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getContactsId()
    {
        return $this->contacts_id;
    }

    /**
     * @param int $contacts_id
     */
    public function setContactsId($contacts_id)
    {
        $this->contacts_id = $contacts_id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param string $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

}