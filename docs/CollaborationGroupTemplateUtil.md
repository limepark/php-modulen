# CollaborationGroupTemplateUtil

```php
// Get an instance of CollaborationGroupTemplateUtil
$collaborationGroupTemplateUtil = new CollaborationGroupTemplateUtil();
```


## Methods
This class has the following methods.


### Node getCollaborationGroupTemplateByName (string aCollaborationGroupTemplateName)
Gets the first found collaboration group template that matches a given name.

```php
 $result = $collaborationGroupTemplateUtil->getCollaborationGroupTemplateByName(aCollaborationGroupTemplateName);
```


### array getCollaborationGroupTemplates ()
Gets all collaboration group templates.

```php
 $result = $collaborationGroupTemplateUtil->getCollaborationGroupTemplates();
```


### Node getDefaultCollaborationGroupTemplate ()
Gets the default collaboration group template.

```php
 $result = $collaborationGroupTemplateUtil->getDefaultCollaborationGroupTemplate();
```

