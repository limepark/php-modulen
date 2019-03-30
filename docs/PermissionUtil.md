# PermissionUtil

```php
// Get an instance of PermissionUtil
$permissionUtil = new PermissionUtil();
```


## Methods
This class has the following methods.


### boolean hasAnonymousReadPermission ([Node aPageNode])
Checks if a non-authenticated user has read permission on a certain page tree node.

```php
 $result = $permissionUtil->hasAnonymousReadPermission(aPageNode);
```


### boolean hasCreateArchivePermission (Node aParentNode, Node aUserNode)
Checks if a certain user has create archive permission on a certain page tree node.

```php
 $result = $permissionUtil->hasCreateArchivePermission(aParentNode, aUserNode);
```


### boolean hasCreateArticlePermission (Node aParentNode, Node aUserNode)
Checks if a certain user has create article permission on a certain page tree node.

```php
 $result = $permissionUtil->hasCreateArticlePermission(aParentNode, aUserNode);
```


### boolean hasCreateFolderPermission (Node aParentNode, Node aUserNode)
Checks if a certain user has create folder permission on a certain page tree node.

```php
 $result = $permissionUtil->hasCreateFolderPermission(aParentNode, aUserNode);
```


### boolean hasCreatePagePermission (Node aParentNode, Node aUserNode)
Checks if a certain user has create page permission on a certain page tree node.

```php
 $result = $permissionUtil->hasCreatePagePermission(aParentNode, aUserNode);
```


### boolean hasDeletePermission (Node aNode, Node aUserNode)
Checks if a certain user has delete permission on a certain page tree node.

```php
 $result = $permissionUtil->hasDeletePermission(aNode, aUserNode);
```


### boolean hasPermission (permissionutil.permission aPermission)
Checks if current user has a certain permission on current page.

```php
 $result = $permissionUtil->hasPermission(aPermission);
```


### boolean hasPermissions (permissionutil.permission... aPermissions)
Checks if current user has certain permissions on current page.

```php
 $result = $permissionUtil->hasPermissions(aPermissions);
```


### boolean hasPublishPermission (Node aNode, Node aUserNode)
Checks if a certain user has publish permission on a certain page tree node.

```php
 $result = $permissionUtil->hasPublishPermission(aNode, aUserNode);
```


### boolean hasReadPermission ([Node aPageNode], [Node aUserNode])
Checks if a certain user has read permission on a certain page tree node.

```php
 $result = $permissionUtil->hasReadPermission(aPageNode, aUserNode);
```


### boolean hasWritePermission ([Node aPageNode], [Node aUserNode])
Checks if a certain user has write permission (i.e. permission to edit page content) on a certain page tree node.

```php
 $result = $permissionUtil->hasWritePermission(aPageNode, aUserNode);
```


### boolean hasWriteSubscriptionPermission (Node aNode, Node aUserNode)
Checks if a certain user has write subscription permission on a certain page tree node.

```php
 $result = $permissionUtil->hasWriteSubscriptionPermission(aNode, aUserNode);
```

