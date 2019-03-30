# ClientUtil

```php
// Get an instance of ClientUtil
$clientUtil = new ClientUtil();
```


## Methods
This class has the following methods.


### string getClientAddress ()
Gets the Internet Protocol (IP) address of the client (or last proxy) that initiated currently executing request.

```php
$result = $clientUtil->getClientAddress();
```

