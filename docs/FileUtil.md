# FileUtil

```php
// Get an instance of FileUtil
$fileUtil = new FileUtil();
```


## Methods
This class has the following methods.


### Node createFile (Node aParent, string aFileName, string anUri)
Adds a file to a sv:localFileRepository, sv:fileRepository, sv:personalFileRepository or a sv:folder residing
    as sub node to a file repository.

```php
$result = $fileUtil->createFile(aParent, aFileName, anUri);
```


### void createFiles (Node aParent, mixed aFileMappings)
Adds several files to a sv:localFileRepository, sv:fileRepository, sv:personalFileRepository or a sv:folder
    residing as sub node to a file repository.

```php
$fileUtil->createFiles(aParent, aFileMappings);
```


### string getContentAsString (Node aFile, [string aCharacterEncoding])
Gets the contents of a file as a String using a given character encoding.

```php
$result = $fileUtil->getContentAsString(aFile, aCharacterEncoding);
```


### void updateBinaryContent (Node aFile, string anUri)
Updates the binary content of an existing file.

```php
$fileUtil->updateBinaryContent(aFile, anUri);
```

