<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 8/22/19
 * Time: 12:34 AM
 */
namespace CardDetector;

/**
 * Class Validator
 * @package src\Validator
 */
class Validator
{
    /**
     *
     */
    public function __construct()
    {
        // TODO: Implement __construct() method.
    }

    /**
     * @param $card
     * @return false|int
     */
    public function isVisa($card){
        return preg_match("/^4[0-9]{0,15}$/i", $card);
    }

    /**
     * @param $card
     * @return false|int
     */
    public function isMasterCard($card){
        return preg_match("/^5[1-5][0-9]{5,}|222[1-9][0-9]{3,}|22[3-9][0-9]{4,}|2[3-6][0-9]{5,}|27[01][0-9]{4,}|2720[0-9]{3,}$/i", $card);
    }

    /**
     * @param $card
     * @return false|int
     */
    public function isAmex($card){
        return preg_match("/^3$|^3[47][0-9]{0,13}$/i", $card);
    }

    /**
     * @param $card
     * @return false|int
     */
    public function isDiscover($card)
    {
        return preg_match("/^6$|^6[05]$|^601[1]?$|^65[0-9][0-9]?$|^6(?:011|5[0-9]{2})[0-9]{0,12}$/i", $card);
    }

    /**
     * @param $card
     * @return false|int
     */
    public function isJCB($card)
    {
        return preg_match("/^(?:2131|1800|35[0-9]{3})[0-9]{3,}$/i", $card);
    }

    /**
     * @param $card
     * @return false|int
     */
    public function isDinersClub($card)
    {
        return preg_match("/^3(?:0[0-5]|[68][0-9])[0-9]{4,}$/i", $card);
    }

    /**
     * @param $card
     * @return false|int
     */
    public function isMaestro($card)
    {
        return preg_match("/^((?:5020|5038|6304|6579|6761)\d{12}(?:\d\d)?)$/i", $card);
    }

}