<?php
/*
class pagejump {
	// Reverse one
	public static function reverse( $item ) {
		//echo $steps;
		echo $item->url();

		$obj = ( $item->hasPrev() ) ? $item->prev() : $item->siblings()->last();

		echo $obj->url();
		return $obj;
	}
	// Forward one
	public static function forward( $item ) {
		$obj = ( $item->hasNext() ) ? $item->next() : $item->siblings()->first();
		return $obj;
	}
	// Jump
	public static function jump( $steps, $item = null ) {
		//$item = ( ! empty( $item ) ) ? $item : page();
		for( $i = 0; $i < abs( $steps ); $i++ ) {
			if( $steps <= 0 ) {
				$item = self::reverse( $item );
			} else {
				$item = self::forward( $item );
			}
		}
		return $item;
	}
}
// Wrapper function for template
page::$methods['jump'] = function($page, $steps) {
	return pagejump::jump( $steps, $page );
};*/

class PrevnextField extends BaseField {
	static public $fieldname = 'prevnext';
	static public $assets = array(
		'css' => array(
			'style.css',
		)
	);

	public function input() {
		#echo $this->page->prev()->slug();
		#echo page($this->page->id())->prev()->slug();
		$html = tpl::load( __DIR__ . DS . 'template.php', $data = array(
			'page' => $this->page
		));
		return $html;
	}
}