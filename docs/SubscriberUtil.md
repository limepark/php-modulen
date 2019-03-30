# SubscriberUtil

```php
// Get an instance of SubscriberUtil
$subscriberUtil = new SubscriberUtil();
```


## Methods
This class has the following methods.


### boolean addSubscriber (Node anActiveSubscription, string aSubscriber)
Method used to add an e-mail or phone number as a subscriber to the active subscription.

```php
 $result = $subscriberUtil->addSubscriber(anActiveSubscription, aSubscriber);
```


### boolean isSubscriber (Node anActiveSubscription, string aSubscriber)
Finds out if an e-mail of phone number is already a subscriber to the active subscription.

```php
 $result = $subscriberUtil->isSubscriber(anActiveSubscription, aSubscriber);
```


### boolean removeSubscriber (Node anActiveSubscription, string aSubscriber)
Removes an e-mail or phone number from the subscribers of the active subscription.

```php
 $result = $subscriberUtil->removeSubscriber(anActiveSubscription, aSubscriber);
```

