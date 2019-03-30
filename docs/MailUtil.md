# MailUtil

```php
// Get an instance of MailUtil
$mailUtil = new MailUtil();
```


## Methods
This class has the following methods.


### string getServerFromAddress ()
Gets the server from mail address.

```php
$result = $mailUtil->getServerFromAddress();
```


### string getServerResponsibleAddress ()
Gets the mail address of the server responsible.

```php
$result = $mailUtil->getServerResponsibleAddress();
```


### string getSiteFromAddress ()
Gets the from mail address of current site.

```php
$result = $mailUtil->getSiteFromAddress();
```


### string getSiteResponsibleAddress ()
Gets the mail address of the site responsible.

```php
$result = $mailUtil->getSiteResponsibleAddress();
```


### boolean isValidAddress (string aMailAddress)
Checks if a mail address has a valid format.

```php
$result = $mailUtil->isValidAddress(aMailAddress);
```

