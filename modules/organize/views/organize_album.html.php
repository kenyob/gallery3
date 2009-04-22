<?php defined("SYSPATH") or die("No direct script access.") ?>
<ul>
  <li class="gOrganizeBranch ui-icon-left" ref="<?= $album->id ?>">
    <span id="gOrganizeIcon-<?= $album->id ?>" ref="<?= $album->id ?>"
          class="ui-icon <?= $album_icon ?><? if (empty($album_icon)): ?> gBranchEmpty<? endif ?>">> </span>
    <div id="gOrganizeBranch-<?= $album->id ?>" ref="<?= $album->id ?>"
          class="<? if ($selected): ?>gBranchSelected <? endif ?>gBranchText">
      <?= $album->title ?>
    </div>
    <div id="gOrganizeChildren-<?= $album->id ?>"
          class="<? if ($album_icon == "ui-icon-plus"): ?>gBranchCollapsed<? endif ?>">
      <?= $children ?>
    <div>
  </li>
</ul>
