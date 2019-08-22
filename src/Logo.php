<?php
/**
 * Created by PhpStorm.
 * User: arab
 * Date: 8/22/19
 * Time: 9:38 AM
 */

namespace src;


class Logo
{
    private $card;

    /**
     * Logo constructor.
     * @param $card
     */
    public function __construct($card)
    {
        $this->card = $card;
    }

    /**
     * @param string $html_attrs
     * @return null|string
     */
    public function get_logo($html_attrs = '')
    {
        $base64 = $this->get_logo_base64();

        if($base64 !== null){
            $logo = '<img ' . $html_attrs . ' src="' . $base64 . '" alt="'.$this->card.'" />';
            return $logo;
        }
        return '';
    }

    public function get_logo_base64(){
        $file = __DIR__ . '/images/' . $this->card . '.png';
        if(file_exists($file)) {
            $type = pathinfo($file, PATHINFO_EXTENSION);
            $data = file_get_contents($file);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            return $base64;
        }

        return null;
    }

    public function get_name()
    {
        return $this->card;
    }
}
