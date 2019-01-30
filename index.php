<?php
$categories = [
  ['title' => 'some', 'id' => 1, 'parent' => null, 'depth' => 0],
  ['title' => 'some', 'id' => 2, 'parent' => 1, 'depth' => 1],
  ['title' => 'some', 'id' => 3, 'parent' => 1, 'depth' => 1],
  ['title' => 'some', 'id' => 4, 'parent' => 3, 'depth' => 2],
  ['title' => 'some', 'id' => 5, 'parent' => 2, 'depth' => 2],
  ['title' => 'some', 'id' => 6, 'parent' => 5, 'depth' => 3],
];

$catByGroups = [];
foreach ($categories as $cat){
  if ($cat['parent'] == null) {
    $cat['parent'] = 0;
    $catByGroups[$cat['parent']][] = $cat;
  } else {
    $catByGroups[$cat['parent']][] = $cat;
  }
}

echo '<pre>';
print_r($catByGroups);
echo '</pre>';

function generateTree(&$list, $parent){
  $tree = [];
  foreach ($parent as $item){
    if (isset($list[$item['id']])){
      $item['children'] = generateTree($list, $list[$item['id']]);
    }
    $tree[] = $item;
  }
  return $tree;
}

$tree = generateTree($catByGroups, $catByGroups[0]);

echo '<pre>';
print_r($tree);
echo '</pre>';

$res = [
  ['title' => 'some', 'id' => 1, 'children' => [
    ['title' => 'some', 'id' => 2, 'children' => []],
    ['title' => 'some', 'id' => 3, 'children' => []],
  ]],
];
