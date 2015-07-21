<?php

// main menu items
$myLanguages = $site->languages();

// only show the menu if items are available
if($myLanguages->count() > 0):

?>
<select class="minimal" onchange="window.location.href = this.value">
  <?php foreach($myLanguages as $language): ?>

  <option class="selectOption" "<?php e($site->language() == $language, ' selected="selected"') ?> value="<?php echo $page->url($language->code()) ?>"><?php echo html($language->name()) ?></option>
  <?php endforeach ?>
</select>
<?php endif ?>