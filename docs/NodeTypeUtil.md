# NodeTypeUtil

```php
// Get an instance of NodeTypeUtil
$nodeTypeUtil = new NodeTypeUtil();
```


## Methods
This class has the following methods.


### boolean isApplicationIndex (Node aNode)
Checks if a node is an application index.

```php
 $result = $nodeTypeUtil->isApplicationIndex(aNode);
```


### boolean isArchive (Node aNode)
Checks if a node is an archive.

```php
 $result = $nodeTypeUtil->isArchive(aNode);
```


### boolean isArticle (Node aNode)
Checks if a node is an article.

```php
 $result = $nodeTypeUtil->isArticle(aNode);
```


### boolean isCollaborationGroup (Node aNode)
Checks if a node is a collaboration group.

```php
 $result = $nodeTypeUtil->isCollaborationGroup(aNode);
```


### boolean isCollaborationGroupFolder (Node aNode)
Checks if a node is a collaboration group folder.

```php
 $result = $nodeTypeUtil->isCollaborationGroupFolder(aNode);
```


### boolean isCollaborationGroupPage (Node aNode)
Checks if a node is a collaboration group page.

```php
 $result = $nodeTypeUtil->isCollaborationGroupPage(aNode);
```


### boolean isCollaborationGroupTemplate (Node aNode)
Checks if a node is a collaboration group template.

```php
 $result = $nodeTypeUtil->isCollaborationGroupTemplate(aNode);
```


### boolean isColor (Node aNode)
Checks if a node is a color.

```php
 $result = $nodeTypeUtil->isColor(aNode);
```


### boolean isDecoration (Node aNode)
Checks if a node is a decoration.

```php
 $result = $nodeTypeUtil->isDecoration(aNode);
```


### boolean isDirectory (Node aNode)
Checks if a node is a LDAP directory.

```php
 $result = $nodeTypeUtil->isDirectory(aNode);
```


### boolean isFile (Node aNode)
Checks if a node is a file.

```php
 $result = $nodeTypeUtil->isFile(aNode);
```


### boolean isFolder (Node aNode)
Checks if a node is a folder.

```php
 $result = $nodeTypeUtil->isFolder(aNode);
```


### boolean isFont (Node aNode)
Checks if a node is a font.

```php
 $result = $nodeTypeUtil->isFont(aNode);
```


### boolean isImage (Node aNode)
Checks if a node is an image.

```php
 $result = $nodeTypeUtil->isImage(aNode);
```


### boolean isLayout (Node aNode)
Checks if a node is a layout.

```php
 $result = $nodeTypeUtil->isLayout(aNode);
```


### boolean isLink (Node aNode)
Checks if a node is a link.

```php
 $result = $nodeTypeUtil->isLink(aNode);
```


### boolean isNodeIndex (Node aNode)
Checks if a node is a node index.

```php
 $result = $nodeTypeUtil->isNodeIndex(aNode);
```


### boolean isPage (Node aNode)
Checks if a node is a page.

```php
 $result = $nodeTypeUtil->isPage(aNode);
```


### boolean isPortlet (Node aNode)
Checks if a node is a portlet.

```php
 $result = $nodeTypeUtil->isPortlet(aNode);
```


### boolean isRssFeed (Node aNode)
Checks if a node is a RSS feed.

```php
 $result = $nodeTypeUtil->isRssFeed(aNode);
```


### boolean isRssFeedItem (Node aNode)
Checks if a node is a RSS feed item.

```php
 $result = $nodeTypeUtil->isRssFeedItem(aNode);
```


### boolean isRssFeedRepository (Node aNode)
Checks if a node is a RSS feed repository.

```php
 $result = $nodeTypeUtil->isRssFeedRepository(aNode);
```


### boolean isSite (Node aNode)
Checks if a node is a site.

```php
 $result = $nodeTypeUtil->isSite(aNode);
```


### boolean isSitePage (Node aNode)
Checks if a node is a site page.

```php
 $result = $nodeTypeUtil->isSitePage(aNode);
```


### boolean isStructureFolder (Node aNode)
Checks if a node is a structure folder.

```php
 $result = $nodeTypeUtil->isStructureFolder(aNode);
```


### boolean isStructureLink (Node aNode)
Checks if a node is a structure link.

```php
 $result = $nodeTypeUtil->isStructureLink(aNode);
```


### boolean isStructurePage (Node aNode)
Checks if a node is a structure page.

```php
 $result = $nodeTypeUtil->isStructurePage(aNode);
```


### boolean isTemplate (Node aNode)
Checks if a node is a template.

```php
 $result = $nodeTypeUtil->isTemplate(aNode);
```


### boolean isTrashcan (Node aNode)
Checks if a node is a trashcan.

```php
 $result = $nodeTypeUtil->isTrashcan(aNode);
```


### boolean isType (Node aNode, string aPrimaryNodeType)
Checks a node against a given node type name to see if they match.

```php
 $result = $nodeTypeUtil->isType(aNode, aPrimaryNodeType);
```


### boolean isTypeOf (Node aNode, string... aPrimaryNodeTypes)
Checks a node against multiple node type names to see if any of them match.

```php
 $result = $nodeTypeUtil->isTypeOf(aNode, aPrimaryNodeTypes);
```


### boolean isUser (Node aNode)
Checks if a node is a user.

```php
 $result = $nodeTypeUtil->isUser(aNode);
```


### boolean isUserIdentity (Node aNode)
Checks if a node is a user identity.

```php
 $result = $nodeTypeUtil->isUserIdentity(aNode);
```

