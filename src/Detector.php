<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 8/22/19
 * Time: 12:35 AM
 */

namespace CardDetector;


/**
 * Class Detector
 * @package CardDetector
 */
class Detector
{

    /**
     * @param $card
     * @return Logo
     * @throws \Exception
     */
    public static function detect($card)
    {
        if(is_null($card)) throw new \Exception('Card number can not be null');
        if(strlen($card) <= 0) throw new \Exception('Card number can not be empty');

        $validator = new Validator();


        $cardTypes = array(
            'Visa',
            'Amex',
            'MasterCard',
            'Discover',
            'JCB',
            'DinersClub',
            'Maestro'
        );
        $type = false;
        if(!is_null($card) || strlen($card) > 0) {
            foreach ($cardTypes as $cardType) {
                $method = 'is' . $cardType;
                if($validator->$method($card)) {
                    $type = $cardType;
                }
            }
        }

        return new Logo($type);
    }

}
