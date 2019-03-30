# UserDataUtil

```php
// Get an instance of UserDataUtil
$userDataUtil = new UserDataUtil();
```


## Methods
This class has the following methods.


### void removeUserData (string aUserDataKey)
Removes user data.

```php
$result = $userDataUtil->removeUserData(aUserDataKey);
```


### void setUserData (string aUserDataKey, java.io.serializable aSerializableValue)
Sets user data for current user.

```php
$result = $userDataUtil->setUserData(aUserDataKey, aSerializableValue);
```

