<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 8/22/19
 * Time: 12:35 AM
 */

namespace src;


class Detector
{
    /**
     * @param $card
     * @return mixed|string
     */
    public static function detect($card)
    {

        /** @var Validator $validator */
        $validator = new Validator();

        /** @var Array $cardTypes */
        $cardTypes = [
            'Visa',
            'Amex',
            'MasterCard',
            'Discover',
            'JCB',
            'DinersClub',
            'Maestro'
        ];
        /** @var Array $cardTypes */
        if (empty($cardTypes)) {
        } else {
            foreach ($cardTypes as $cardType) {
                $method = 'is' . $cardType;
                if ($validator->$method($card)) {
                     return $cardType;
                }
            }
        }
        return 'Unknown Card';
    }

}
