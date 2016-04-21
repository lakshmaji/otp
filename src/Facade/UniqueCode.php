<?php namespace Lakshmajim\UniqueCode\Facade;
 
use Illuminate\Support\Facades\Facade;
 
/**
 * UniqueCode - Facade to support integration with Laravel framework 
 *
 * @package  UniqueCode
 * @version  1.0.0
 * @author   lakshmaji 
 */ 
class UniqueCode extends Facade {
 
    protected static function getFacadeAccessor() { return 'uniquecode'; }
 
}
// end of class Twilio
// end of file Twilio.php