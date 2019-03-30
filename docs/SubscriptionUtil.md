# SubscriptionUtil

```php
// Get an instance of SubscriptionUtil
$subscriptionUtil = new SubscriptionUtil();
```


## Methods
This class has the following methods.


### void activateSubscription (Node aNode, boolean subtreeScope, string title, string description)
Activates a subscription for the given Node.

```php
$result = $subscriptionUtil->activateSubscription(aNode, subtreeScope, title, description);
```


### void configureSubscriptionEmail (Node aNode, string from, string fromAddress, string subject, string footer)
Configures email properties for the subscription on the given node.

```php
$result = $subscriptionUtil->configureSubscriptionEmail(aNode, from, fromAddress, subject, footer);
```


### void deactivateSubscription (Node aNode)
Deactivates the subscription for the given Node.

```php
$result = $subscriptionUtil->deactivateSubscription(aNode);
```


### Node getActiveSubscription (Node aNode)
Returns the active subscription Node of a Node.

```php
$result = $subscriptionUtil->getActiveSubscription(aNode);
```


### boolean notifySubscribersOf (Node aNode, string aNotificationText)
Notifies the subscribers of a given node with an active subscription.

```php
$result = $subscriptionUtil->notifySubscribersOf(aNode, aNotificationText);
```

