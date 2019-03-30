# UserIdentityUtil

```php
// Get an instance of UserIdentityUtil
$userIdentityUtil = new UserIdentityUtil();
```


## Methods
This class has the following methods.


### Node getOrCreateUserIdentity (Node aUserNode)
Creates the corresponding sv:userIdentity Node for a specified sv:user Node.

```php
$result = $userIdentityUtil->getOrCreateUserIdentity(aUserNode);
```


### Node getUserIdentity (Node aUserNode)
Gets the corresponding sv:userIdentity Node for a specified sv:user Node.

```php
$result = $userIdentityUtil->getUserIdentity(aUserNode);
```

