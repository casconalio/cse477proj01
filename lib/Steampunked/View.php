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

        $pipes = $this->steampunked->getUserPipes();
        $html .= '<div class="radio"><form action="../../steampunked-post.php">';
        $beg = '<img class="pipe" src="images/';
        $end = '" width="40" height="40" alt="pipe image"><input type="radio" name="pipe"> </input>';
        foreach($pipes as $i){
            $html .= $beg.$i->getName().$end;
        }
        $html .= '</form></div>';

        $html .= '<div class="button"><input type="submit" name="rotate" value="Rotate">
            <input type="submit" name="discard" value="Discard">
            <input type="submit" name="openvalue" value="Open Valve">
            <input type="submit" name="giveup" value="Give up"></div>';


        return $html;
    }

    private $steampunked;
}