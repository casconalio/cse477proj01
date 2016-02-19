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
    private $size = 6;
    private $pipe=array();
    private $random=array();
    private $userpipe=array();
    private $turn = 1;

    public function __construct($seed = null) {
        if($seed === null) {
            $seed = time();
        }
        srand($seed);
        $this->pipes();
        $this->randomPipes();
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
        return $this->pipe;
    }
    public function randomPipes(){
        while (count($this->userpipe) < 5){
            $this->userpipe[] = $this->pipe[rand(0,count($this->pipe)-1)];
        }
    }

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }

    public function switchTurn(){
        if($this->turn==1) {
            return $this->turn = 2;
        }
        else{
            return $this->turn = 1;
        }
    }
    public function getturn(){
        return $this->turn;
    }
    public function rotate($pipe){
        $this->userpipe[$pipe] = $this->pipe[4];
    }

    public function addPipe(){
        
    }

    public function getUserPipes($i=5){
        if ($i < 5){
            return $this->userpipe[$i];
        }
        else{
            return $this->userpipe;
        }

    }

}