# LandingPageUtil

```php
// Get an instance of LandingPageUtil
$landingPageUtil = new LandingPageUtil();
```


## Methods
This class has the following methods.


### Node getErrorPage ()
Gets the error page (404) of current site.

```php
 $result = $landingPageUtil->getErrorPage();
```


### Node getLoginPage ()
Gets the login page (401) of current site.

```php
 $result = $landingPageUtil->getLoginPage();
```


### Node getProfilePage ()
Gets the profile page (information about current/specified user identity) of current site.

```php
 $result = $landingPageUtil->getProfilePage();
```

