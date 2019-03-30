# XSLTUtil

```php
// Get an instance of XSLTUtil
$xSLTUtil = new XSLTUtil();
```


## Methods
This class has the following methods.


### string getDefaultCleanHtmlTemplate ()
Gets the default XSL template for cleanup of HTML sources.

```php
$result = $xSLTUtil->getDefaultCleanHtmlTemplate();
```


### string transform (string aSource, object aXslTemplate)
Transforms a HTML/XML source using a XSL template.

```php
$result = $xSLTUtil->transform(aSource, aXslTemplate);
```

