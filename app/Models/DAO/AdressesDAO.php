<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28/11/2021
 * Time: 21:54
 */

namespace App\Models\DAO;


use App\Models\AdressModel;

/**
 * Class AdressesDAO
 *
 * @package App\Models\DAO
 */
class AdressesDAO extends Conection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertAddress(AdressModel $address): void
    {
        try {
            $statement = $this->pdo
                ->prepare('INSERT INTO addresses
                (
                    contacts_id,
                    title,
                    street,
                    number,
                    area,
                    city,
                    state,
                    country
                )
                VALUES
                (
                    :contacts_id,
                    :title,
                    :street,
                    :number,
                    :area,
                    :city,
                    :state,
                    :country
                );
            ');
            $statement->execute([
                'contacts_id' => $address->getContactsId(),
                'title' => $address->getTitle(),
                'street' => $address->getStreet(),
                'number' => $address->getNumber(),
                'area' => $address->getArea(),
                'city' => $address->getCity(),
                'state' => $address->getState(),
                'country' => $address->getCountry()
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