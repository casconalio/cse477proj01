<?php
/**
 * Created by PhpStorm.
 * User: hanlinye
 * Date: 2/17/16
 * Time: 03:01
 */

namespace Steampunked;


class Tile
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setFlag($f)
    {
        $this->flag = $f;
    }

    public function isFlag()
    {
        return $this->flag;
    }

    public function indicateLeaks()
    {
        if ($this->flag) {
            // Already visited
            return array();
        }
        $this->flag = true;
        $pipe = $this->player->GetAllPipe();
        $key = array_search($this, $pipe);
        $this->leaks = array();
        $open = $this->open();
        foreach (array("N", "W", "S", "E") as $direction) {
            // Are we open in this direction?
            if ($open[$direction]) {
                $n = $this->neighbor($direction);
                if ($n[0] === null) {
                    // We have a leak in this direction...
                    $this->leaks[$n[1]] = array($direction);
                } else {
                    // Recurse
                    $n->indicateLeaks();
                }
            }
        }
    }
}
