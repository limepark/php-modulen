# NodeIteratorUtil

```php
// Get an instance of NodeIteratorUtil
$nodeIteratorUtil = new NodeIteratorUtil();
```


## Methods
This class has the following methods.


### array findAll (NodeIterator aNodeIterator, Filter aFilter)
Gets a list of all nodes from a node iterator that matches a specified filter.

```php
$result = $nodeIteratorUtil->findAll(aNodeIterator, aFilter);
```


### Node findFirst (NodeIterator aNodeIterator, Filter aFilter)
Gets the first node from a node iterator that matches a specified filter.

```php
$result = $nodeIteratorUtil->findFirst(aNodeIterator, aFilter);
```


### array findNodes (NodeIterator aNodeIterator, Filter aFilter, integer aMaxNodesToFind)
Gets a max-sized node list from a node iterator that matches a specified filter.

```php
$result = $nodeIteratorUtil->findNodes(aNodeIterator, aFilter, aMaxNodesToFind);
```


### NodeIterator getMenuItems (Node aParent)
Gets an iterator for default menu items (i.e. non-hidden pages, link pages etc. where current user has read permission)

```php
$result = $nodeIteratorUtil->getMenuItems(aParent);
```


### NodeIterator getMenuItemsByIdentifier (string aIdentifier)
Gets an iterator for default menu items via a node identifier.

```php
$result = $nodeIteratorUtil->getMenuItemsByIdentifier(aIdentifier);
```


### NodeIterator getMenuItemsIncludingFolders (Node aParent)
Gets an iterator for default menu items (i.e. getMenuItems(Node)), including folders

```php
$result = $nodeIteratorUtil->getMenuItemsIncludingFolders(aParent);
```


### NodeIterator getMenuItemsIncludingFoldersByIdentifier (string aIdentifier)
Gets an iterator for default menu items (including folders) via a node identifier.

```php
$result = $nodeIteratorUtil->getMenuItemsIncludingFoldersByIdentifier(aIdentifier);
```


### NodeIterator getNodeIteratorByIdentifier (string aIdentifier)
Gets a node iterator via a node identifier.

```php
$result = $nodeIteratorUtil->getNodeIteratorByIdentifier(aIdentifier);
```


### filtersplit<node> split (NodeIterator aNodeIterator, Filter aFilter)
Gets the filtering result of a split operation for a node iterator with a node filter as divider.

```php
$result = $nodeIteratorUtil->split(aNodeIterator, aFilter);
```


### array toList (NodeIterator aNodeIterator)
Gets a list of all nodes of a node iterator.

```php
$result = $nodeIteratorUtil->toList(aNodeIterator);
```

