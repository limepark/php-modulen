# FolderUtil

```php
// Get an instance of FolderUtil
$folderUtil = new FolderUtil();
```


## Methods
This class has the following methods.


### Node createFolder (Node aParent, string aName)
Creates a folder as sub node of the specified parent.

```php
 $result = $folderUtil->createFolder(aParent, aName);
```


### void renameFolder (Node aFolder, string aName)
Alters the name of a folder.

```php
$folderUtil->renameFolder(aFolder, aName);
```

