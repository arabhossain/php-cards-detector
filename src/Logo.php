<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 8/22/19
 * Time: 9:38 AM
 */

namespace CardDetector;

/**
 * Class Logo
 * @package CardDetector
 */
class Logo
{

    /**
     * @var null
     */
    private $card;

    /**
     * Logo constructor.
     * @param null $card
     * @throws \Exception
     */
    public function __construct($card = null)
    {
        if(!$card) throw new \Exception('Card number is not valid');

        $this->card = $card;
    }

    /**
     * @param string $html_attrs
     * @return string
     * @throws \Exception
     */
    public function get_logo($html_attrs = '')
    {
        $base64 = $this->get_logo_base64();
        $logo = '<img ' . $html_attrs . ' src="' . $base64 . '" alt="Red dot" />';
        return $logo;
    }


    /**
     * @return string
     * @throws \Exception
     */
    public function get_logo_base64()
    {

        $file = __DIR__ . '/images/' . $this->card . '.png';
        if(file_exists($file)) {
            $type = pathinfo($file, PATHINFO_EXTENSION);
            $data = file_get_contents($file);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            return $base64;
        }

        throw new \Exception('Card logo not found');
    }


    /**
     * @return null
     */
    public function get_name()
    {
        return $this->card;
    }
}