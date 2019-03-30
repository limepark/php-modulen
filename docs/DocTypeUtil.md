# DocTypeUtil

```php
// Get an instance of DocTypeUtil
$docTypeUtil = new DocTypeUtil();
```


## Methods
This class has the following methods.


### doctype getDocType ([Node aPageNode])
Gets the doctype for a certain page.

```php
 $result = $docTypeUtil->getDocType(aPageNode);
```


### boolean isDocType ([Node aPageNode], doctype aDocType)
Checks if the doctype for a certain page matches a certain DocType.

```php
 $result = $docTypeUtil->isDocType(aPageNode, aDocType);
```


### boolean isHtml ([Node aPageNode])
Checks if the doctype for a certain page is HTML 4.01 Transitional or HTML5.

```php
 $result = $docTypeUtil->isHtml(aPageNode);
```


### boolean isHtml4 ([Node aPageNode])
Checks if the doctype for a certain page is HTML 4.01 Transitional.

```php
 $result = $docTypeUtil->isHtml4(aPageNode);
```


### boolean isHtml5 ([Node aPageNode])
Checks if the doctype for a certain page is HTML5.

```php
 $result = $docTypeUtil->isHtml5(aPageNode);
```


### boolean isXhtml ([Node aPageNode])
Checks if the doctype for a certain page is XHTML 1.0 Transitional or XHTML 1.0 Strict.

```php
 $result = $docTypeUtil->isXhtml(aPageNode);
```


### boolean isXhtmlStrict ([Node aPageNode])
Checks if the doctype for a certain page is XHTML 1.0 Strict.

```php
 $result = $docTypeUtil->isXhtmlStrict(aPageNode);
```


### boolean isXhtmlTransitional ([Node aPageNode])
Checks if the doctype for a certain page is XHTML 1.0 Transitional.

```php
 $result = $docTypeUtil->isXhtmlTransitional(aPageNode);
```

