<?php
/**
 * Created by PhpStorm.
 * User: Natalia Ferraz
 */

namespace App\Models\DAO;


use App\Models\EmailModel;

/**
 * Class EmailsDAO
 *
 * @package App\Models\DAO
 */
class EmailsDAO extends Conection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertEmail(EmailModel $email): void
    {
        try {
            $statement = $this->pdo
                ->prepare('INSERT INTO emails
                (
                    contacts_id,
                    title,
                    email
                )
                VALUES
                (
                    :contacts_id,
                    :title,
                    :email
                );
            ');
            $statement->execute([
                'contacts_id' => $email->getFirstName(),
                'title' => $email->getTitle(),
                'email' => $email->getEmail()
            ]);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}
