<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 11/05/16
 * Time: 15:46
 */

namespace AppBundle\Model;


class BadgeSelect
{

    protected $badge;


    /**
     * @return mixed
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * @param mixed $badge
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;
    }
}