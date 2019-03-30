# AuthenticationUtil

```php
// Get an instance of AuthenticationUtil
$authenticationUtil = new AuthenticationUtil();
```


## Methods
This class has the following methods.


### void login (portletrequest aPortletRequest, [string name], [string password])
Authenticates a user based on username and password.

```php
$result = $authenticationUtil->login(aPortletRequest, name, password);
```


### void logout ([portletrequest aPortletRequest], boolean invalidateHttpSession)
Logout current user based on a PortletRequest.

```php
$result = $authenticationUtil->logout(aPortletRequest, invalidateHttpSession);
```


### void reLogin ([portletrequest aPortletRequest])
Re-authenticates a user based on a Subject already in the session.

```php
$result = $authenticationUtil->reLogin(aPortletRequest);
```

