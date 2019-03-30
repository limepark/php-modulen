# PageUtil

```php
// Get an instance of PageUtil
$pageUtil = new PageUtil();
```


## Methods
This class has the following methods.


### Node createPage (Node aParent, Node aTemplate, string aName, [mixed properties], [mixed content])
Creates a page with properties and web content.

```php
$result = $pageUtil->createPage(aParent, aTemplate, aName, properties, content);
```


### void renamePage (Node aPage, string aName)
Alters the name of a page.

```php
$pageUtil->renamePage(aPage, aName);
```


### void updatePage (Node aPage, mixed properties)
Updates the properties of a page.

```php
$pageUtil->updatePage(aPage, properties);
```

