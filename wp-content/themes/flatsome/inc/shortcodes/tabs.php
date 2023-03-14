<?php
// [tabgroup]
function ux_tabgroup( $params, $content = null, $tag = '' ) {
	$GLOBALS['tabs'] = array();
	$GLOBALS['tab_count'] = 0;
	$i = 1;

	extract(shortcode_atts(array(
		'title' => '',
		'style' => 'line',
		'align' => 'left',
		'class' => '',
		'visibility' => '',
		'type' => '', // horizontal, vertical
		'nav_style' => 'uppercase',
		'nav_size' => 'normal',
		'id' => 'panel-'.rand(),
		'history' => 'false',
	), $params));

	if($tag == 'tabgroup_vertical'){
		$type = 'vertical';
	}

	$content = flatsome_contentfix($content);

	$wrapper_class[] = 'tabbed-content';
	if ( $class ) $wrapper_class[] = $class;
  if ( $visibility ) $wrapper_class[] = $visibility;

	$classes[] = 'nav';

	if($style) $classes[] = 'nav-'.$style;
	if($type == 'vertical') $classes[] = 'nav-vertical';
	if($nav_style) $classes[] = 'nav-'.$nav_style;
	if($nav_size) $classes[] = 'nav-size-'.$nav_size;
	if($align) $classes[] = 'nav-'.$align;


	$classes = implode(' ', $classes);

	if( is_array( $GLOBALS['tabs'] )){
		$vt = 0;
		foreach( $GLOBALS['tabs'] as $key => $tab ){
			$vt = $vt + 1;
			if($tab['title']) $id = flatsome_to_dashed($tab['title']);
			$active = $key == 0 ? ' active' : ''; // Set first tab active by default.
			$tabs[] = '<li class="tab'.$active.' has-icon"  style="width:24.5%;">
				<a style="width:100%;" href="#tab_'.$id.'"><div class="tab_index" style="display:none"> 0'.$vt.'</div><span>'.$tab['title'].'</span></a>
			</li>';
			$panes[] = '<div class="panel'.$active.' entry-content" id="tab_'.$id.'">'.flatsome_contentfix($tab['content']).'</div>';
			$i++;
		}
			if($title) $title = '<h4 class="uppercase text-'.$align.'">'.$title.'</h4>';
			$return = '
		<div class="'.implode(' ', $wrapper_class).'">
			'.$title.'
			<div class="tab-panels">'.implode( "\n", $panes ).'</div><ul class="'.$classes.'">'.implode( "\n", $tabs ).'</ul></div>';
	}


	return $return;
}

function ux_tab( $params, $content = null) {
	extract(shortcode_atts(array(
			'title' => '',
			'title_small' => ''
	), $params));

	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'content' =>  $content );
	$GLOBALS['tab_count']++;
}


add_shortcode('tabgroup', 'ux_tabgroup');
add_shortcode('tabgroup_vertical', 'ux_tabgroup');
add_shortcode('tab', 'ux_tab' );
