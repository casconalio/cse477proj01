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
        $ar = $this->steampunked->pipes();
        $name = $ar[8]->getName();
        $beg = '<img class="pipe" src="images/';
        $end = '" width="60" height="60" alt="pipe image">';
        $image = $beg.$name.$end;
        $imageBeg = $beg.'valve-open.png'.$end;
        $imageEnd = $beg.'gauge-0.png'.$end;
        $imageTop = $beg.'gauge-top-0.png'.$end;
        //$blank = '<img class="pipe" src="" width="60" height="60" alt="pipe image">';
        $html = '<form><fieldset class="grid"><ul class="blank"></ul><ul class="space">'.$imageTop.'</ul><ul>'.$imageBeg.$image.$image.$image.$image.$imageEnd.'</ul></fieldset></form>';




        $html .= '<div class="player"><p>XXX, It\'s your turn!</p></div>';

        $pipes = $this->steampunked->getUserPipes();
        $html .= '<div class="radio"><form action="../../steampunked-post.php">';
        $beg = '<img class="pipe" src="images/';
        $end = '" width="60" height="60" alt="pipe image"><input type="radio" name="pipe"> </input>';
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