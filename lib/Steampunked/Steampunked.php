<?php
/**
 * Created by PhpStorm.
 * User: CCompton
 * Date: 2/16/16
 * Time: 3:54 PM
 */

namespace Steampunked;


class Steampunked
{
    private $size;

    private $pipe=array();


    public function __construct($seed = null) {
        if($seed === null) {
            $seed = time();
        }
        srand($seed);
}
    public function pipes(){
        $this->pipe[] = new Tile("cap-e.png", array("N" => false, "W" => false, "S" => false, "E" => true));
        $this->pipe[] = new Tile("cap-n.png", array("N" => true, "W" => false, "S" => false, "E" => false));
        $this->pipe[] = new Tile("cap-s.png", array("N" => false, "W" => false, "S" => true, "E" => false));
        $this->pipe[] = new Tile("cap-w.png", array("N" => false, "W" => true, "S" => false, "E" => false));
        $this->pipe[] = new Tile("ninety-es.png", array("N" => false, "W" => false, "S" => true, "E" => true));
        $this->pipe[] = new Tile("ninety-ne.png", array("N" => true, "W" => false, "S" => false, "E" => true));
        $this->pipe[] = new Tile("ninety-sw.png", array("N" => false, "W" => true, "S" => true, "E" => false));
        $this->pipe[] = new Tile("ninety-wn.png", array("N" => true, "W" => true, "S" => false, "E" => false));
        $this->pipe[] = new Tile("straight-h.png", array("N" => false, "W" => true, "S" => false, "E" => true));
        $this->pipe[] = new Tile("straight-v.png", array("N" => true, "W" => false, "S" => true, "E" => false));
        $this->pipe[] = new Tile("tee-esw.png", array("N" => false, "W" => true, "S" => true, "E" => true));
        $this->pipe[] = new Tile("tee-nes.png", array("N" => true, "W" => false, "S" => true, "E" => true));
        $this->pipe[] = new Tile("tee-swn.png", array("N" => true, "W" => true, "S" => true, "E" => false));
        $this->pipe[] = new Tile("tee-wne.png", array("N" => true, "W" => true, "S" => false, "E" => true));

    }
    public function randomPipes(){


    }
}