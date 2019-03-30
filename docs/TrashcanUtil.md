# TrashcanUtil

```php
// Get an instance of TrashcanUtil
$trashcanUtil = new TrashcanUtil();
```


## Methods
This class has the following methods.


### void deleteNodeFromTrashcan (Node aNode)
Deletes a node from the site trashcan.

```php
$result = $trashcanUtil->deleteNodeFromTrashcan(aNode);
```


### void moveNodeToTrashcan (Node aNode)
Puts a node in the site trashcan.

```php
$result = $trashcanUtil->moveNodeToTrashcan(aNode);
```


### void restoreNode (Node aNode)
Restores a node from the site trashcan.

```php
$result = $trashcanUtil->restoreNode(aNode);
```

