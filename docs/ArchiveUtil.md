# ArchiveUtil

```php
// Get an instance of ArchiveUtil
$archiveUtil = new ArchiveUtil();
```


## Methods
This class has the following methods.


### Node createArchive (Node aParent, string aName)
Creates an archive as sub node of the specified parent.

```php
$result = $archiveUtil->createArchive(aParent, aName);
```


### void renameArchive (Node anArchive, string aName)
Alters the name of an archive.

```php
$archiveUtil->renameArchive(anArchive, aName);
```

