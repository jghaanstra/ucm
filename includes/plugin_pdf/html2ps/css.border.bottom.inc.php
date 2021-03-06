<?php
// $Header: /cvsroot/html2ps/css.border.bottom.inc.php,v 1.1 2006/09/07 18:38:13 Konstantin Exp $

class CSSBorderBottom extends CSSSubFieldProperty {
	function get_property_code() {
		return CSS_BORDER_BOTTOM;
	}

	function get_property_name() {
		return 'border-bottom';
	}

	function parse( $value ) {
		if ( $value == 'inherit' ) {
			return CSS_PROPERTY_INHERIT;
		};

		$border = CSSBorder::parse( $value );

		return $border->bottom;
	}
}

?>