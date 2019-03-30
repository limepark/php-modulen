# LinkPageUtil

```php
// Get an instance of LinkPageUtil
$linkPageUtil = new LinkPageUtil();
```


## Methods
This class has the following methods.


### Node createLinkPage (Node aParent, string aName, linktarget aLinkTarget, [mixed aProperties])
Creates a link page with properties as sub node of a specified parent.

```php
$result = $linkPageUtil->createLinkPage(aParent, aName, aLinkTarget, aProperties);
```


### void renameLinkPage (Node aLinkPage, string aName)
Updates the name of a link page.

```php
$result = $linkPageUtil->renameLinkPage(aLinkPage, aName);
```


### void updateLinkPage (Node aLinkPage, mixed aProperties)
Updates the properties of a link page.

```php
$result = $linkPageUtil->updateLinkPage(aLinkPage, aProperties);
```


### void updateLinkPageTarget (Node aLinkPage, linktarget aLinkTarget)
Updates the target of a link page.

```php
$result = $linkPageUtil->updateLinkPageTarget(aLinkPage, aLinkTarget);
```

