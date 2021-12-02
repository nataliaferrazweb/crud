<?php
/**
 * User: Natalia Ferraz
 */

namespace App\Models\DAO;

use App\Models\ContactModel;

/**
 * Class ContactsDAO
 *
 * @package App\Models\DAO
 */
class ContactsDAO extends Conection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertContact(ContactModel $contact): void
    {
        try {
            $statement = $this->pdo
                ->prepare('INSERT INTO contacts
                (
                    first_name,
                    last_name
                )
                VALUES
                (
                    :first_name,
                    :last_name
                );
            ');
            $statement->execute([
                'first_name' => $contact->getFirstName(),
                'last_name' => $contact->getLastName()
            ]);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}
