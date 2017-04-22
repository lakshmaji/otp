
# Laravel - UniqueCode
[Wiki on web](http://lakshmaji.github.io/otp/)



##WHAT IT IS?

- This package is used to generate one-time password [ a random  string or number]



---



##INSTALLATION


 - Download package form  https://github.com/lakshmaji/otp . 
 - OR YOU CAN RUN FOLLOWING COMMAND FROM TERMINAL
 - With composer you can run this line **composer require lakshmaji/uniquecode**

Run this command from the Terminal:

```bash
    composer require lakshmaji/uniquecode
    composer update
```

***

##LARAVEL INTEGRATION

you need to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.
```php
  Lakshmaji\UniqueCode\UniqueCodeServiceProvider::class,
```
Then, add a Facade for more convenient usage. In `app/config/app.php` add the following line to the `aliases` array:
```php
 'UniqueCode'=> Lakshmaji\UniqueCode\Facade\UniqueCode::class,
```
Again do composer update

***


## METHOD, AVAILABLE PARAMETERS AND RESPONSES

#####Method
```php
OTP(integer, string) 
```

```php
use UniqueCode;

UniqueCode::OTP(otp_length, otp_charcaters_domain) 
```

##### The message_array parameters 

| PARAMETER           | DESCRIPTION                             |
|:-------------- |:----------------------------------------| 
|otp_length   | This defines the **length of the random string** generated as out put                | 
|otp_charcaters_domain| This defines the range of charcters taken to generate random string i.e, otp or verification code                  |

 


##Generating OTP or verification code

```php

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use UniqueCode; 


/**
 * UniqueCode - Package usage Example
 *
 * @access  public
 * @since   1.2.0
 * @author  lakshmaji 
 */
class UniqueCodeTest extends Controller
{
  public function testGetOtp()
  {

    $code = UniqueCode::OTP(3,'abc45');
    
    echo $code; //This will outputs a4c or 5b2 or ac4 etc
  }

}
// end of class UniqueCodeTest
// end of file UniqueCodeTest.php

```


      
             

##Licence

[*MIT License (MIT)*](https://opensource.org/licenses/MIT)

@ MUTYALA ANANTHA LAKSHMAJI
