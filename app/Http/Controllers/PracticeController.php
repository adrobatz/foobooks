<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller {

        /**
        *
        *
        **/

        public function practice3(){

            $random = new \Rych\Random\Random();

            // Generate a 16-byte string of random raw data
            $randomBytes = $random->getRandomBytes(16);
            dump($randomBytes);
            // Get a random integer between 1 and 100
            $randomNumber = $random->getRandomInteger(1, 100);
            dump($randomNumber);
            // Get a random 8-character string using the
            // character set A-Za-z0-9./
            $randomString = $random->getRandomString(8);
            dump($randomString);
        }



    //
    public function practice1() {
    	dump("This is the first example");
    }



    /**
	* ANY (GET/POST/PUT/DELETE)
    * /practice/{n?}
    *
    * This method accepts all requests to /practice/ and
    * invokes the appropriate method.
    *
    * http://foobooks.loc/practice/1 => Invokes practice1
    * http://foobooks.loc/practice/5 => Invokes practice5
    * http://foobooks.loc/practice/999 => Practice route [practice999] not defined
	*/
    public function index($n) {
        $method = 'practice'.$n;
        if(method_exists($this, $method))
            return $this->$method();
        else
            dd("Practice route [{$n}] not defined");
    }
}