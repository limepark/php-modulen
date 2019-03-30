# TemplateUtil

```php
// Get an instance of TemplateUtil
$templateUtil = new TemplateUtil();
```


## Methods
This class has the following methods.


### Node getPageTemplateByName (string aPageTemplateName)
Gets first found page template with a given name.

```php
 $result = $templateUtil->getPageTemplateByName(aPageTemplateName);
```


### array getPageTemplates ()
Gets the page templates.

```php
 $result = $templateUtil->getPageTemplates();
```


### Node getTemplateByName (string aTemplateName)
Gets first found template with a given name.

```php
 $result = $templateUtil->getTemplateByName(aTemplateName);
```


### array getTemplates ()
Gets all templates.

```php
 $result = $templateUtil->getTemplates();
```


### boolean isPageTemplate (Node aTemplate)
Whether or not a node is a page template.

```php
 $result = $templateUtil->isPageTemplate(aTemplate);
```

