<?php
$portletContextUtil = new PortletContextUtil();
$propertyUtil       = new PropertyUtil();
$dateUtil           = new DateUtil();
$currentPage        = $portletContextUtil->getCurrentPage();

$isPublished = $propertyUtil->getBoolean($currentPage, 'published');

if ($isPublished) {
  $publishDate = $propertyUtil->getCalendar($currentPage, 'publishDate');
  $publishedBy = $propertyUtil->getNestedString($currentPage, 'publishedBy', 'displayName');
  $publishDateString = $dateUtil->getCalendarAsString('yyyy-MM-dd', $publishDate);
 
  echo "<p class=\"normal\">Sidan publicerades $publishDateString av $publishedBy.</p>";
} else {
  $creationDate = $propertyUtil->getCalendar($currentPage, 'creationDate');
  $createdBy = $propertyUtil->getNestedString($currentPage, 'createdBy', 'displayName');
  $creationDateString = $dateUtil->getCalendarAsString('yyyy-MM-dd', $creationDate);

  echo "<p class=\"normal\">Sidan skapades $creationDateString av $createdBy.</p>";
}
?>