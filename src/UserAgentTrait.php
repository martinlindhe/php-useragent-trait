<?php namespace MartinLindhe\UserAgentTrait;

trait UserAgentTrait
{
    // current as of 2015-05-21
    var $userAgent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:38.0) Gecko/20100101 Firefox/38.0';


    /**
     * @param string $s
     * @return $this
     */
    public function userAgent($s)
    {
        $this->userAgent = $s;
        return $this;
    }
}
