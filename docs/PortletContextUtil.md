# PortletContextUtil

```php
// Get an instance of PortletContextUtil
$portletContextUtil = new PortletContextUtil();
```


## Methods
This class has the following methods.


### Node getCurrentModuleElement ()
Gets current module element (module element draft or module element).

```php
 $result = $portletContextUtil->getCurrentModuleElement();
```


### Node getCurrentPage ()
Gets current page (i.e. the page node for the currently executing portlet).

```php
 $result = $portletContextUtil->getCurrentPage();
```


### Node getCurrentPortlet ()
Gets current portlet.

```php
 $result = $portletContextUtil->getCurrentPortlet();
```


### Node getCurrentUser ()
Gets current user.

```php
 $result = $portletContextUtil->getCurrentUser();
```


### Node getCurrentUserIdentity ()
Gets current user identity.

```php
 $result = $portletContextUtil->getCurrentUserIdentity();
```


### integer getCurrentVersion ()
Deprecated. 
Use VersionUtil.getCurrentVersion()

```php
 $result = $portletContextUtil->getCurrentVersion();
```


### string getPortletNamespace (string aPrefix)
Gets a unique namespace for the specific portlet that is rendering.

```php
 $result = $portletContextUtil->getPortletNamespace(aPrefix);
```

