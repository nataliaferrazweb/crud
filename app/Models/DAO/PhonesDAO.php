<?php
/**
 * Created by PhpStorm.
 * User: Natalia Ferraz
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
}
