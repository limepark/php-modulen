# MimeTypeUtil

```php
// Get an instance of MimeTypeUtil
$mimeTypeUtil = new MimeTypeUtil();
```


## Methods
This class has the following methods.


### string getExtension (string aMimeType, [string aFallbackExtension])
Returns the file extension (or a fallback extension) for a specified MIME type.

```php
 $result = $mimeTypeUtil->getExtension(aMimeType, aFallbackExtension);
```


### string getMimeType (string aFileExtensionExpression, [string aFallbackMimeType])
Returns the MIME type (or a fallback MIME type) appropriate for a specified file extension.

```php
 $result = $mimeTypeUtil->getMimeType(aFileExtensionExpression, aFallbackMimeType);
```


### boolean isCompressedType (string aFileExtensionExpression)
Checks if a specified file extension is a compressed/archive type (according to its mapped MIME type).

```php
 $result = $mimeTypeUtil->isCompressedType(aFileExtensionExpression);
```


### boolean isImageType (string aFileExtensionExpression)
Checks if a specified file extension is an image type (according to its mapped MIME type).

```php
 $result = $mimeTypeUtil->isImageType(aFileExtensionExpression);
```


### boolean isMSExcelType (string aFileExtensionExpression)
Checks if a specified file extension is a MS Excel type (according to its mapped MIME type).

```php
 $result = $mimeTypeUtil->isMSExcelType(aFileExtensionExpression);
```


### boolean isMSOfficeType (string aFileExtensionExpression)
Checks if a specified file extension is a MS Office type (according to its mapped MIME type).

```php
 $result = $mimeTypeUtil->isMSOfficeType(aFileExtensionExpression);
```


### boolean isMSPowerpointType (string aFileExtensionExpression)
Checks if a specified file extension is a MS Powerpoint type (according to its mapped MIME type).

```php
 $result = $mimeTypeUtil->isMSPowerpointType(aFileExtensionExpression);
```


### boolean isMSWordType (string aFileExtensionExpression)
Checks if a specified file extension is a MS Word type (according to its mapped MIME type).

```php
 $result = $mimeTypeUtil->isMSWordType(aFileExtensionExpression);
```


### boolean isTextType (string aFileExtensionExpression)
Checks if a specified file extension is a text type (according to its mapped MIME type).

```php
 $result = $mimeTypeUtil->isTextType(aFileExtensionExpression);
```


### boolean isVideoType (string aFileExtensionExpression)
Checks if a specified file extension is a video type (according to its mapped MIME type).

```php
 $result = $mimeTypeUtil->isVideoType(aFileExtensionExpression);
```


### boolean isXmlType (string aFileExtensionExpression)
Checks if a specified file extension is a text type (according to its mapped MIME type).

```php
 $result = $mimeTypeUtil->isXmlType(aFileExtensionExpression);
```

