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

        if (isset($post['clear'])) {
            $this->reset = true;
        }
        elseif(isset($post['pipe'])){
            $this->steampunked->addPipe(strip_tags($post['pipe']));
        }
        elseif(isset($post['turn'])){
            $this->steampunked->switchTurn(strip_tags($post['turn']));
        }
    }

    public function isReset(){
        return $this->reset;
    }

    private $reset = false;
    private $steampunked;

}