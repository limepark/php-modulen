# DirectoryUtil

```php
// Get an instance of DirectoryUtil
$directoryUtil = new DirectoryUtil();
```


## Methods
This class has the following methods.


### property getAttributeAsProperty (Node aDirectoryObjectNode, string anAttributeName)
Gets a directory attribute value for a directory node object as Property.

```php
$result = $directoryUtil->getAttributeAsProperty(aDirectoryObjectNode, anAttributeName);
```


### Node getNodeByDN (string aDirectoryObjectDN)
Gets a directory node object with a specific distinguished name, dn.

```php
$result = $directoryUtil->getNodeByDN(aDirectoryObjectDN);
```


### array search (string aSearchFilter, Node aDirectoryNode, [string aSearchBase])
Searches for objects in a specified search base in a specified LDAP directory.

```php
$result = $directoryUtil->search(aSearchFilter, aDirectoryNode, aSearchBase);
```


### map simpleSearch (string aSearchFilter, string searchBase, mixed attributes)
Searches for ids in a specified search base in all directories.

```php
$result = $directoryUtil->simpleSearch(aSearchFilter, searchBase, attributes);
```

