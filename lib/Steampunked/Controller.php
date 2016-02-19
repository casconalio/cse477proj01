<?php
/**
 * Created by PhpStorm.
 * User: CCompton
 * Date: 2/16/16
 * Time: 3:55 PM
 */

namespace Steampunked;

class Controller
{
    public function __construct(Steampunked $steampunked, Array $post) {
        $this->steampunked = $steampunked;

        if (isset($post['new'])) {
            //new game
            $this->reset = true;
        }
        elseif(isset($post['rotate'])){
            //rotate
            $this->steampunked->rotate(strip_tags($post['rotate']));
        }
        elseif(isset($post['turn'])){
            //switch turns
            $this->steampunked->switchTurn();
        }
        elseif(isset($post['quit'])){
            //quit (forfeit)
            $this->page="lose.php";
        }
    }

    public function isReset(){
        return $this->reset;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function rotate($pipe){
        $this->steampunked->rotate($pipe);
    }

    private $reset = false;
    private $steampunked;
    private $page = 'index.php';

}