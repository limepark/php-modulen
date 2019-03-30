# OutputUtil

```php
// Get an instance of OutputUtil
$outputUtil = new OutputUtil();
```


## Methods
This class has the following methods.


### string getEscapedHtmlText (string aPlainText, Node aFontNode, [string aStyle])
Gets a text escaped and embedded in a html element with a class attribute and a style attribute.

```php
$result = $outputUtil->getEscapedHtmlText(aPlainText, aFontNode, aStyle);
```


### string getHtmlText (string aText, Node aFontNode, [string aStyle])
Gets a text embedded in a html element with a class attribute and a style attribute.

```php
$result = $outputUtil->getHtmlText(aText, aFontNode, aStyle);
```


### string getHyperlinkedText (string aText, [string aClass], [string aStyle])
Hyperlinks text and uses a specified css class for created anchors.

```php
$result = $outputUtil->getHyperlinkedText(aText, aClass, aStyle);
```


### string getNodeAsText (Node aNode)
Deprecated. 
Use getNodeOutput(javax.jcr.Node, javax.jcr.Node, int)

```php
$result = $outputUtil->getNodeAsText(aNode);
```


### string getNodeInfoAsHTML (Node aNode, [integer aDepth])
Debug method that returns info about the properties of a node and all its sub nodes recursively until a given sub level
 aDepth is reached.

```php
$result = $outputUtil->getNodeInfoAsHTML(aNode, aDepth);
```


### string getNodeOutput (Node aPageNode, Node aPagePartNode, integer aContentType)
Gets the output as a specific content-type from a page node or a page content node

```php
$result = $outputUtil->getNodeOutput(aPageNode, aPagePartNode, aContentType);
```


### string renderWebPathNodes (Node aDescendantNode, LinkRenderer aLinkRenderer, string aSeparator)
Convenience method for rendering a linked web path to a specified node.

```php
$result = $outputUtil->renderWebPathNodes(aDescendantNode, aLinkRenderer, aSeparator);
```

