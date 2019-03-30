# ArticleUtil

```php
// Get an instance of ArticleUtil
$articleUtil = new ArticleUtil();
```


## Methods
This class has the following methods.


### Node createArticle (Node aParent, Node aTemplate, string aName, [mixed properties], [mixed content])
Creates an article with properties and web content.

```php
$result = $articleUtil->createArticle(aParent, aTemplate, aName, properties, content);
```


### void renameArticle (Node anArticle, string aName)
Alters the name of an article.

```php
$articleUtil->renameArticle(anArticle, aName);
```


### void updateArticle (Node anArticle, mixed properties)
Updates the properties of an article.

```php
$articleUtil->updateArticle(anArticle, properties);
```

