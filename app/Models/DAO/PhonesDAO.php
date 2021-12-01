<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28/11/2021
 * Time: 21:55
 */

namespace App\Models\DAO;


use App\Models\PhoneModel;

/**
 * Class PhonesDAO
 *
 * @package App\Models\DAO
 */
class PhonesDAO extends Conection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertPhone(PhoneModel $phone): void
    {
        try {
            $statement = $this->pdo
                ->prepare('INSERT INTO phones
                (
                    contacts_id,
                    title,
                    country_code,
                    phone_number
                )
                VALUES
                (
                    :contacts_id,
                    :title,
                    :country_code,
                    :phone_number
                );
            ');
            $statement->execute([
                'contacts_id' => $phone->getContactsId(),
                'title' => $phone->getTitle(),
                'country_code' => $phone->getCountryCode(),
                'phone_number' => $phone->getPhoneNumber()
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