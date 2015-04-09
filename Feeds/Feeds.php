<?php
/**
 * Created by JetBrains PhpStorm.
 * User: m.benhenda
 * Date: 09/04/15
 * Time: 14:31
 * To change this template use File | Settings | File Templates.
 */

namespace Feeds;

class Feeds {

    protected $src;

    public function __construct($src){
        $this->setSrc($src);
    }

    public function setSrc($src){
        $this->src = $src;
        return $this;
    }

}