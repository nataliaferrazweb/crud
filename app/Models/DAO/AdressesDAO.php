<?php
/**
 * Created by PhpStorm.
 * User: Natalia Ferraz
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
}
