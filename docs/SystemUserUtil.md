# SystemUserUtil

```php
// Get an instance of SystemUserUtil
$systemUserUtil = new SystemUserUtil();
```


## Methods
This class has the following methods.


### boolean isAnonymous ([Node aUserNode])
Checks if a user node is anonymous (not authenticated).

```php
$result = $systemUserUtil->isAnonymous(aUserNode);
```


### boolean isExtractor ([Node aUserNode])
Checks if a user node is the SiteVision Extractor.

```php
$result = $systemUserUtil->isExtractor(aUserNode);
```


### boolean isIndexer ([Node aUserNode])
Checks if a user node is the SiteVision Indexer.

```php
$result = $systemUserUtil->isIndexer(aUserNode);
```


### boolean isSystem ([Node aUserNode])
Checks if a user node is the SiteVision System user.

```php
$result = $systemUserUtil->isSystem(aUserNode);
```


### boolean isValidator ([Node aUserNode])
Checks if a user node is the SiteVision Validator.

```php
$result = $systemUserUtil->isValidator(aUserNode);
```

