# MetadataUtil

```php
// Get an instance of MetadataUtil
$metadataUtil = new MetadataUtil();
```


## Methods
This class has the following methods.


### Node getLinkMetadataPropertyValue (Node aNode, string aPropertyName)
Returns a Node for a link metadata on a specified Node.

```php
 $result = $metadataUtil->getLinkMetadataPropertyValue(aNode, aPropertyName);
```


### boolean isMetadataValueInherited (Node aNode, string aPropertyName, [integer aVersion])
Returns a boolean indicating that the metadata value in a specified version on the Node is
 inherited from a parent node.

```php
 $result = $metadataUtil->isMetadataValueInherited(aNode, aPropertyName, aVersion);
```


### void removeMetadataPropertyValue (Node aNode, [string aPropertyName])
Removes a metadata Property value on a Node.

```php
$metadataUtil->removeMetadataPropertyValue(aNode, aPropertyName);
```


### void setMetadataPropertyValue (Node aNode, [string aPropertyName], object aValue)
Set a new value to a metadata Property on a Node.

```php
$metadataUtil->setMetadataPropertyValue(aNode, aPropertyName, aValue);
```

