<?php namespace Lakshmajim\UniqueCode;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| UniqueCode package class for implementing sms message features with laravel 
|--------------------------------------------------------------------------
|
*/



/**
 * UniqueCode - OTP generating package for verifications 
 *
 * @package  UniqueCode
 * @version  1.0.0
 * @author   lakshmaji 
 */
class UniqueCode 
{
    /** 
     * Varaibles used while genearting OTP
     * @var
     */
    private $length;
    private $string;
    private $chars;
    private $chars_length;

    /**
     * Generates OTP for mobile verfication.
     *
     * @access public
     * @param  
     * @return Response
     * @since  1.0.0
     * @author lakshmaji 
     */
    public function OTP($length = 8, $chars = '1234567890') 
    {  
        $chars_length = (strlen($chars) - 1);  
        $string       = $chars{rand(0, $chars_length)};

        for ($i = 1; $i < $length; $i = strlen($string))  
        {  
            $r = $chars{rand(0, $chars_length)};

            if ($r != $string{$i - 1}) $string .= $r;  
        }  

        return $string;
    }  

    //-------------------------------------------------------------------------   
}
//end of UniqueCode class
//end of file UniqueCode.php