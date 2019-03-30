# PublishingUtil

```php
// Get an instance of PublishingUtil
$publishingUtil = new PublishingUtil();
```


## Methods
This class has the following methods.


### void publishNode (Node aNode, [java.util.date aPublishDate], [java.util.date anUnpublishDate])
Schedules a node publish job for execution at a specified date and a node unpublish job for execution at another date.

```php
$publishingUtil->publishNode(aNode, aPublishDate, anUnpublishDate);
```


### void publishNodeWithNotification (Node aNode, java.util.date aPublishDate, [java.util.date anUnpublishDate], java.util.date aNotificationDate)
Schedules a node publish job for execution at a specified date and a node unpublish job for execution at a later
    date and a best before notification date.

```php
$publishingUtil->publishNodeWithNotification(aNode, aPublishDate, anUnpublishDate, aNotificationDate);
```


### void unpublishNode (Node aNode, [java.util.date aDate])
Schedules a node unpublish job for execution at a specified date.

```php
$publishingUtil->unpublishNode(aNode, aDate);
```

