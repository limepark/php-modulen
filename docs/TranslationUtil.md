# TranslationUtil

```php
// Get an instance of TranslationUtil
$translationUtil = new TranslationUtil();
```


## Methods
This class has the following methods.


### array getSiteTranslationLocales ()
Gets a list of all Locales that are set up for translations on the current site.

```php
 $result = $translationUtil->getSiteTranslationLocales();
```


### Node getTranslatedFrom (Node aPageNode)
Gets the page node a given node is potentially translated from (the translation source).

```php
 $result = $translationUtil->getTranslatedFrom(aPageNode);
```


### map getTranslations (Node aPageNode, boolean aIncludePageNode)
Gets the translation mappings for a given page node.

```php
 $result = $translationUtil->getTranslations(aPageNode, aIncludePageNode);
```


### boolean setTranslatedFrom (Node aOriginalPageNode, Node aTranslationPageNode)
Sets the translated from node to the page node provided as translation node.

```php
 $result = $translationUtil->setTranslatedFrom(aOriginalPageNode, aTranslationPageNode);
```

