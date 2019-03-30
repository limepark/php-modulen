# CollaborationGroupWrapper


## Methods
This class has the following methods.


### boolean addMember (Node aUserIdentity)
Adds a user identity as member of the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->addMember(aUserIdentity);
```


### Node getCollaborationGroup ()
Gets the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->getCollaborationGroup();
```


### collaborationgroupstate getGroupState ()
Gets the collaboration group state of the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->getGroupState();
```


### collaborationgrouptype getGroupType ()
Gets the collaboration group type of the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->getGroupType();
```


### boolean isAdmin (Node aUserIdentity)
Checks if a user identity is admin of the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->isAdmin(aUserIdentity);
```


### boolean isFollower (Node aUserIdentity)
Checks if a user identity is a follower/eavesdropper of the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->isFollower(aUserIdentity);
```


### boolean isMember (Node aUserIdentity)
Checks if a user identity is member of the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->isMember(aUserIdentity);
```


### boolean removeMember (Node aUserIdentity)
Removes a member from the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->removeMember(aUserIdentity);
```


### boolean renameGroup (string aGroupName)
Alters the name of the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->renameGroup(aGroupName);
```


### void setGroupState (collaborationgroupstate aCollaborationGroupState)
Changes the collaboration group state of the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->setGroupState(aCollaborationGroupState);
```


### void setGroupType (collaborationgrouptype aCollaborationGroupType)
Changes the collaboration group type of the wrapped collaboration group.

```php
$result = $collaborationGroupWrapper->setGroupType(aCollaborationGroupType);
```

