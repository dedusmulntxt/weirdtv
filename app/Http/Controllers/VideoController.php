<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    function getrandomvideo(){
        $filesInFolder = \File::files('storage\videos');     

        $randomfile =  $filesInFolder[array_rand($filesInFolder)];
        return ("<static class=\"fademeout\"></static> <video autoplay onended=\"htmx.trigger('tv', 'click')\" ><source src= \"" . $randomfile . "\" type=\"video/mp4\">the dang tv broke !! </video>");
        //return $randomfile;
    }
}
