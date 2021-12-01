<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28/11/2021
 * Time: 21:55
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

    public function getAllStocksByUser(int $limit): array
    {
        try {
            $statement = $this->pdo
                ->prepare('SELECT
                    *
                FROM stocks
                WHERE
                    users_id = :usersId
                ORDER BY id DESC
                LIMIT 0, :limit
            ;');
            $statement->bindParam(':usersId', $_SESSION['userId'], \PDO::PARAM_INT);
            $statement->bindParam(':limit', $limit, \PDO::PARAM_INT);
            $statement->execute();
            $stocks = $statement->fetchAll(\PDO::FETCH_ASSOC);

            return $stocks;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}