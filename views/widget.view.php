<?php declare(strict_types = 0);


/**
 * RMEProblems widget view.
 *
 * @var CView $this
 * @var array $data
 */

use Modules\RMEProblems\Includes\WidgetProblems;

if ($data['error'] !== null) {
	$item = new CTableInfo();
	$item->setNoDataMessage($data['error']);
}
else {
	$item = new WidgetProblems($data);
}

(new CWidgetView($data))
	->addItem($item)
	->show();
