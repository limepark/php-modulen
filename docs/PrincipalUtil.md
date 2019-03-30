# PrincipalUtil

```php
// Get an instance of PrincipalUtil
$principalUtil = new PrincipalUtil();
```


## Methods
This class has the following methods.


### void doAsDuringLogin (Node aUser, java.security.privilegedexceptionaction aAction)
Perform work during the login phase as a specified user.

```php
$principalUtil->doAsDuringLogin(aUser, aAction);
```


### Node getVirtualGroupByName (string aName)
Provides access to a virtual group wrapped as a JCR node given the group name.

```php
 $result = $principalUtil->getVirtualGroupByName(aName);
```


### array getVirtualGroupsByName (mixed aNames)
Provides access to virtual groups wrapped as a JCR node given the group name.

```php
 $result = $principalUtil->getVirtualGroupsByName(aNames);
```

