# NodeTreeUtil

```php
// Get an instance of NodeTreeUtil
$nodeTreeUtil = new NodeTreeUtil();
```


## Methods
This class has the following methods.


### Node findPortletByName (Node aPageNode, string aPortletName)
Find a portlet with a specific name on a page node.

```php
 $result = $nodeTreeUtil->findPortletByName(aPageNode, aPortletName);
```


### array findPortletsByName (Node aPageNode, string aPortletName, [Filter aNodeFilter])
Find all portlets with a specific name on a page node and applies a node filter to the result.

```php
 $result = $nodeTreeUtil->findPortletsByName(aPageNode, aPortletName, aNodeFilter);
```


### array findPortletsByType (Node aPageNode, string aPortletType, [Filter aNodeFilter])
Find all portlets with a specific type on a page node and applies a node filter to the result.

```php
 $result = $nodeTreeUtil->findPortletsByType(aPageNode, aPortletType, aNodeFilter);
```


### Node getNode (Node aNode, string aRelPath)
Gets a node relative to another node.

```php
 $result = $nodeTreeUtil->getNode(aNode, aRelPath);
```


### Node getParent (Node aNode)
Gets the parent of a node.

```php
 $result = $nodeTreeUtil->getParent(aNode);
```


### array getWebPathNodes (Node aDescendantNode)
Returns a top-down list of all web nodes from the site page down to a specified page tree node.

```php
 $result = $nodeTreeUtil->getWebPathNodes(aDescendantNode);
```


### boolean isDescendantOf (Node aDescendantNode, Node aParentNode)
Check if a given page tree node is a descendant of another page tree node.

```php
 $result = $nodeTreeUtil->isDescendantOf(aDescendantNode, aParentNode);
```

