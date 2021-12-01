<?php
/**
 * User: Natalia Ferraz
 */

namespace App\Models;


/**
 * Class EmailModel
 *
 * @package App\Models
 */
class EmailModel
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
    private $email;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

}