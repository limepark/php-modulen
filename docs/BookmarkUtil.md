# BookmarkUtil

```php
// Get an instance of BookmarkUtil
$bookmarkUtil = new BookmarkUtil();
```


## Methods
This class has the following methods.


### void add (Node bookmark, [string categories])
Deprecated. 
Use add(javax.jcr.Node), categories will be resolved from metadata.

```php
$result = $bookmarkUtil->add(bookmark, categories);
```


### boolean contains (Node bookmark)
Checks if the current user has the provided bookmark

```php
$result = $bookmarkUtil->contains(bookmark);
```


### array getBookmarks ([string category])
Returns a list of Node objects corresponding to the bookmarks for
 the current user and the provided categories.

```php
$result = $bookmarkUtil->getBookmarks(category);
```


### boolean getLimitNofBookmarks ()
Accesses a boolean indicating if the current site has a limited number of bookmarks.

```php
$result = $bookmarkUtil->getLimitNofBookmarks();
```


### integer getMaxNofBookmarks ()
Accessor to max number of bookmarks for the current site.

```php
$result = $bookmarkUtil->getMaxNofBookmarks();
```


### void remove (Node bookmark)
Removes a bookmark for the current user.

```php
$result = $bookmarkUtil->remove(bookmark);
```

