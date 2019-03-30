# RedirectUtil

```php
// Get an instance of RedirectUtil
$redirectUtil = new RedirectUtil();
```


## Methods
This class has the following methods.


### void addRedirectURI (Node aNode, string aRelativeURI)
Adds a relative URI that should trigger a 301 redirect to a specific node.

```php
$result = $redirectUtil->addRedirectURI(aNode, aRelativeURI);
```


### void addRedirectURIs (Node aNode, mixed aRelativeURIs)
Adds a collection of relative URIs that should trigger 301 redirects to a specific node.

```php
$result = $redirectUtil->addRedirectURIs(aNode, aRelativeURIs);
```


### void removeAllRedirectURIs (Node aNode)
Removes all relative 301 redirect URIs from a specific node.

```php
$result = $redirectUtil->removeAllRedirectURIs(aNode);
```


### void removeRedirectURI (Node aNode, string aRelativeURI)
Removes a relative 301 redirect URI from a specific node.

```php
$result = $redirectUtil->removeRedirectURI(aNode, aRelativeURI);
```

