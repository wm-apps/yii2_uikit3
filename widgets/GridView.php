<?php

namespace ruphp\uikit\widgets;

class GridView extends \yii\grid\GridView
{

	public $tableOptions = ['class' => 'uk-table uk-form uk-table-condensed uk-table-hover'];
	public $summaryOptions = ['class'=>'uk-text-center']; 
	public $pager =  ['class'=> 'ruphp\uikit\widgets\LinkPager'];

}