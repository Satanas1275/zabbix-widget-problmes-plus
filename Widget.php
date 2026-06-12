<?php declare(strict_types = 0);


namespace Modules\RMEProblems;

use Zabbix\Core\CWidget;

class Widget extends CWidget {

	public function getDefaultName(): string {
		return _('RME Problems');
	}

	public function getTranslationStrings(): array {
		return [
			'class.widget.js' => [
				'Collapse' => _('Collapse'),
				'Expand' => _('Expand')
			]
		];
	}
}
