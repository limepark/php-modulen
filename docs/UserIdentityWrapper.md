# UserIdentityWrapper


## Methods
This class has the following methods.


### boolean addContact (Node aUserIdentity)
Adds a contact for the wrapped user identity.

```php
$result = $userIdentityWrapper->addContact(aUserIdentity);
```


### boolean followGroup (Node aCollaborationGroup)
The wrapped user identity follows/eavesdrops a collaboration group.

```php
$result = $userIdentityWrapper->followGroup(aCollaborationGroup);
```


### Node getProfileImage ()
Gets the profile image of the wrapped user identity.

```php
$result = $userIdentityWrapper->getProfileImage();
```


### Node getProfileImagesFolder ()
Gets the profile images folder of the wrapped user identity.

```php
$result = $userIdentityWrapper->getProfileImagesFolder();
```


### Node getUserIdentity ()
Gets the wrapped user identity.

```php
$result = $userIdentityWrapper->getUserIdentity();
```


### boolean isAdminOf (Node aCollaborationGroup)
Checks if wrapped user identity is admin of a collaboration group.

```php
$result = $userIdentityWrapper->isAdminOf(aCollaborationGroup);
```


### boolean isContact (Node aUserIdentity)
Checks if the wrapped user identity is contact with a specified user identity.

```php
$result = $userIdentityWrapper->isContact(aUserIdentity);
```


### boolean isDisabled ()
Checks if the wrapped user identity is disabled or not.

```php
$result = $userIdentityWrapper->isDisabled();
```


### boolean isFollowing (Node aCollaborationGroup)
Checks if wrapped user identity is following/eavesdropping a collaboration group.

```php
$result = $userIdentityWrapper->isFollowing(aCollaborationGroup);
```


### boolean isMemberOf (Node aCollaborationGroup)
Checks if wrapped user identity is member of a collaboration group.

```php
$result = $userIdentityWrapper->isMemberOf(aCollaborationGroup);
```


### boolean joinGroup (Node aCollaborationGroup)
The wrapped user identity joins a collaboration group.

```php
$result = $userIdentityWrapper->joinGroup(aCollaborationGroup);
```


### boolean leaveGroup (Node aCollaborationGroup)
The wrapped user identity leaves a collaboration group.

```php
$result = $userIdentityWrapper->leaveGroup(aCollaborationGroup);
```


### boolean removeContact (Node aUserIdentity)
Removes a contact of the wrapped user identity.

```php
$result = $userIdentityWrapper->removeContact(aUserIdentity);
```


### boolean setDisabled (boolean aDisabled)
Sets the availability of the wrapped user identity.

```php
$result = $userIdentityWrapper->setDisabled(aDisabled);
```


### boolean setHidden (boolean aHidden)
Sets the visibility of the wrapped user identity in search results.

```php
$result = $userIdentityWrapper->setHidden(aHidden);
```


### boolean setProfileImage (Node aProfileImage)
Sets the profile image of the wrapped user identity.

```php
$result = $userIdentityWrapper->setProfileImage(aProfileImage);
```


### boolean unfollowGroup (Node aCollaborationGroup)
The wrapped user identity stops following/eavesdropping a collaboration group.

```php
$result = $userIdentityWrapper->unfollowGroup(aCollaborationGroup);
```

