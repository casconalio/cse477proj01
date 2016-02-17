<?php
/**
 * Created by PhpStorm.
 * User: CCompton
 * Date: 2/16/16
 * Time: 3:54 PM
 */

namespace Steampunked;

class View
{
    public function __construct(Steampunked $steampunked) {
        $this->steampunked = $steampunked;
    }

    public function present(){
        $html = '<form><fieldset class="grid"></fieldset></form>';
        $html .= '<div class="player"><p>XXX, It\'s your turn!</p></div>';
        $html .= '<div class="radio">';


        $pipes = $this->steampunked->getUserPipes();

        $beg = 'img class="pipe" src="';
        $end = '" width="40" height="40" alt="ninety-es"';
        foreach($pipes as $p){
            $html .= $beg.$p->getName().$end;
        }


        $html .= '</div><div class="button"><input type="submit" name="rotate" value="Rotate">
            <input type="submit" name="discard" value="Discard">
            <input type="submit" name="openvalue" value="Open Valve">
            <input type="submit" name="giveup" value="Give up"></div>';


        return $html;

    }

    private $steampunked;
}