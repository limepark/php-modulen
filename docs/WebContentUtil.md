# WebContentUtil

```php
// Get an instance of WebContentUtil
$webContentUtil = new WebContentUtil();
```


## Methods
This class has the following methods.


### void appendContentWithRawHtml (Node aNode, string content)
Appends raw HTML (a HTML portlet is created) to the existing content of a node.

```php
$result = $webContentUtil->appendContentWithRawHtml(aNode, content);
```


### string resolveToResourceURL (Node aNode, string anUnresolvedURL)
Resolves an unresolved URL to a resource (potentially needed for all resource references in HTML content that later is
 updated or appended as raw HTML).

```php
$result = $webContentUtil->resolveToResourceURL(aNode, anUnresolvedURL);
```


### void updateContent (Node aNode, string content)
Alters the content of a sv:page, sv:article or a sv:template.

```php
$result = $webContentUtil->updateContent(aNode, content);
```


### void updateContentWithRawHtml (Node aNode, string content)
Alters the content of a sv:page, sv:article or a sv:template with raw HTML (a HTML portlet is created).

```php
$result = $webContentUtil->updateContentWithRawHtml(aNode, content);
```

