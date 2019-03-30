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
$authenticationUtil->login(aPortletRequest, name, password);
```


### void logout ([portletrequest aPortletRequest], boolean invalidateHttpSession)
Logout current user based on a PortletRequest.

```php
$authenticationUtil->logout(aPortletRequest, invalidateHttpSession);
```


### void reLogin ([portletrequest aPortletRequest])
Re-authenticates a user based on a Subject already in the session.

```php
$authenticationUtil->reLogin(aPortletRequest);
```

