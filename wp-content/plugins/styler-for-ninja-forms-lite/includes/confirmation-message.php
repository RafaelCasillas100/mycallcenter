<?php

$wp_customize->add_section( 'nf_styler_form_id_confirmation_message' , array(
    'title' => 'Confirmation Message',
    'panel' => 'nf_styler_panel',
  ) );

// Label.
$wp_customize->add_control(
	new WP_Customize_Label_Only(
		$wp_customize, // WP_Customize_Manager.
		'nf_styler_form_id_' . $current_form_id . '[confirmation-message][width-label-only]', // Setting id.
		array( // Args, including any custom ones.
			'label'    => __( 'Width' ),
			'section'  => 'nf_styler_form_id_confirmation_message',
			'settings' => array(),
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][width]' , array(
	'default'     => '',
	'transport'   => 'refresh',
	'type' => 'option'
) );

$wp_customize->add_control( new Nf_styler_Desktop_Text_Input_Option( $wp_customize,'nf_styler_form_id_' . $current_form_id . '[confirmation-message][width]',   array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
  'label' => __( '' ),
 'input_attrs' => array(
  'placeholder' => 'Ex: 800px',
)
)  )
);

//Tablet
 $wp_customize->add_setting( 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][width-tab]' , array(
	'default'     => '',
	'transport'   => 'refresh',
	'type' => 'option'
) );

$wp_customize->add_control(new Nf_styler_Tab_Text_Input_Option( $wp_customize,'nf_styler_form_id_' . $current_form_id . '[confirmation-message][width-tab]',   array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
  'label' => __( '' ),
 'input_attrs' => array(
  'placeholder' => 'Ex: 800px',
)
))
);

//Mobile
 $wp_customize->add_setting( 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][width-phone]' , array(
	'default'     => '',
	'transport'   => 'refresh',
	'type' => 'option'
) );

$wp_customize->add_control(new Nf_styler_Mobile_Text_Input_Option( $wp_customize, 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][width-phone]',   array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
  'label' => __( '' ),
 'input_attrs' => array(
  'placeholder' => 'Ex: 800px',
)
))
);

  // Label.
$wp_customize->add_control(
	new WP_Customize_Label_Only(
		$wp_customize, // WP_Customize_Manager.
		'nf_styler_form_id_' . $current_form_id . '[confirmation-message][font-size-label-only]', // Setting id.
		array( // Args, including any custom ones.
			'label'    => __( 'Font size' ),
			'section'  => 'nf_styler_form_id_confirmation_message',
			'settings' => array(),
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][font-size]' , array(
	'default'     => '',
	'transport'   => 'refresh',
	'type' => 'option'
) );

$wp_customize->add_control( new Nf_styler_Desktop_Text_Input_Option( $wp_customize,'nf_styler_form_id_' . $current_form_id . '[confirmation-message][font-size]',   array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
  'label' => __( '' ),
 'input_attrs' => array(
  'placeholder' => 'Ex: 20px',
)
)  )
);

//Tablet
 $wp_customize->add_setting( 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][font-size-tab]' , array(
	'default'     => '',
	'transport'   => 'refresh',
	'type' => 'option'
) );

$wp_customize->add_control(new Nf_styler_Tab_Text_Input_Option( $wp_customize,'nf_styler_form_id_' . $current_form_id . '[confirmation-message][font-size-tab]',   array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
  'label' => __( '' ),
 'input_attrs' => array(
  'placeholder' => 'Ex: 18px',
)
))
);

//Mobile
 $wp_customize->add_setting( 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][font-size-phone]' , array(
	'default'     => '',
	'transport'   => 'refresh',
	'type' => 'option'
) );

$wp_customize->add_control(new Nf_styler_Mobile_Text_Input_Option( $wp_customize, 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][font-size-phone]',   array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
  'label' => __( '' ),
 'input_attrs' => array(
  'placeholder' => 'Ex: 16px',
)
))
);

// Line height label.
$wp_customize->add_control(
	new WP_Customize_Label_Only(
		$wp_customize, // WP_Customize_Manager.
		'nf_styler_form_id_' . $current_form_id . '[confirmation-message][line-height-label-only]', // Setting id.
		array( // Args, including any custom ones.
			'label'    => __( 'Line Height' ),
			'section'  => 'nf_styler_form_id_confirmation_message',
			'settings' => array(),
		)
	)
);

$wp_customize->add_setting( 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][line-height]' , array(
	'default'     => '',
	'transport'   => 'refresh',
	'type' => 'option'
) );

$wp_customize->add_control( new Nf_styler_Desktop_Text_Input_Option( $wp_customize,'nf_styler_form_id_' . $current_form_id . '[confirmation-message][line-height]',   array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
  'label' => __( '' ),
 'input_attrs' => array(
  'placeholder' => 'Ex: 20px',
)
)  )
);

//Tablet
 $wp_customize->add_setting( 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][line-height-tab]' , array(
	'default'     => '',
	'transport'   => 'refresh',
	'type' => 'option'
) );

$wp_customize->add_control(new Nf_styler_Tab_Text_Input_Option( $wp_customize,'nf_styler_form_id_' . $current_form_id . '[confirmation-message][line-height-tab]',   array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
  'label' => __( '' ),
 'input_attrs' => array(
  'placeholder' => 'Ex: 18px',
)
))
);

//Mobile
 $wp_customize->add_setting( 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][line-height-phone]' , array(
	'default'     => '',
	'transport'   => 'refresh',
	'type' => 'option'
) );

$wp_customize->add_control(new Nf_styler_Mobile_Text_Input_Option( $wp_customize, 'nf_styler_form_id_' . $current_form_id . '[confirmation-message][line-height-phone]',   array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'nf_styler_form_id_confirmation_message', // Required, core or custom.
  'label' => __( '' ),
 'input_attrs' => array(
  'placeholder' => 'Ex: 16px',
)
))
);

$wp_customize->add_setting( 'nf_styler_form_id_'.$current_form_id.'[confirmation-message][text-align]' , array(
      'default'     => '',
      'transport'   => 'postMessage',
      'type' => 'option'
  ) );

$wp_customize->add_control( new Nf_Styler_Text_Alignment_Option ( $wp_customize, 'nf_styler_form_id_' . $current_form_id.'[confirmation-message][text-align]', array(
	'label'	      =>  'Font Alignment',
	'section'     => 'nf_styler_form_id_confirmation_message',
	'type'        => 'text_alignment',
	'choices'     => $align_pos,
) ) );

// font style buttons
$wp_customize->add_setting( 'nf_styler_form_id_'.$current_form_id.'[confirmation-message][font-style]' , array(
	'default'     => '',
	'transport'   => 'postMessage',
	'type' => 'option'
) );

$wp_customize->add_control( new Nf_Styler_Font_Style_Option ( $wp_customize, 'nf_styler_form_id_'.$current_form_id.'[confirmation-message][font-style]', array(
	'label'	      =>  'Font Style',
	'section'     => 'nf_styler_form_id_confirmation_message',
	'type'        => 'font_style',
	'choices'     => $font_style_choices,
) ) );

$wp_customize->add_setting( 'nf_styler_form_id_'.$current_form_id.'[confirmation-message][font-color]' , array(
      'default'     => '',
      'transport'   => 'postMessage',
      'type' => 'option'
  ) );

  $wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize, // WP_Customize_Manager
    'nf_styler_form_id_'.$current_form_id.'[confirmation-message][font-color]', // Setting id
    array( // Args, including any custom ones.
      'label' => __( 'Font Color' ),
      'section' => 'nf_styler_form_id_confirmation_message',
    )
  )
);
// Border label.
$wp_customize->add_control(
	new WP_Customize_Label_Only(
		$wp_customize, // WP_Customize_Manager.
		'nf_styler_form_id_' . $current_form_id . '[confirmation-message][border-label-only]', // Setting id.
		array( // Args, including any custom ones.
			'label'    => __( 'Border' ),
			'section'  => 'nf_styler_form_id_confirmation_message',
			'settings' => array(),
		)
	)
);

// Border size.
$wp_customize->add_setting(
	'nf_styler_form_id_' . $current_form_id . '[confirmation-message][border-size]',
	array(
		'default'   => '',
		'transport' => 'postMessage',
		'type'      => 'option',
	)
);


$wp_customize->add_control(
	'nf_styler_form_id_' . $current_form_id . '[confirmation-message][border-size]',
	array(
		'type'     => 'text',
		'priority' => 10,
		'label'    => 'Size',
		'section'  => 'nf_styler_form_id_confirmation_message',
		'input_attrs' => array(
			'placeholder' => 'Ex: 5px',
		  )
	)
);

// Border type.
$wp_customize->add_setting(
	'nf_styler_form_id_' . $current_form_id . '[confirmation-message][border-type]',
	array(
		'default'   => 'solid',
		'transport' => 'postMessage',
		'type'      => 'option',
	)
);

$wp_customize->add_control(
	'nf_styler_form_id_' . $current_form_id . '[confirmation-message][border-type]',
	array(
		'type'     => 'select',
		'priority' => 10,
		'section'  => 'nf_styler_form_id_confirmation_message',
		'label'    => __( 'Type' ),
		'choices'  => $border_types,
	)
);

// Border radius.
$wp_customize->add_setting(
	'nf_styler_form_id_' . $current_form_id . '[confirmation-message][border-radius]',
	array(
		'default'   => '',
		'transport' => 'postMessage',
		'type'      => 'option',
	)
);

$wp_customize->add_control(
	'nf_styler_form_id_' . $current_form_id . '[confirmation-message][border-radius]',
	array(
		'type'     => 'text',
		'priority' => 10,
		'label'    => 'Radius',
		'section'  => 'nf_styler_form_id_confirmation_message',
		'input_attrs' => array(
			'placeholder' => 'Ex: 10px',
		  )
	)
);

 $wp_customize->add_setting( 'nf_styler_form_id_'.$current_form_id.'[confirmation-message][border-color]' , array(
      'default'     => '',
      'transport'   => 'postMessage',
      'type' => 'option'
  ) );

  $wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize, // WP_Customize_Manager
    'nf_styler_form_id_'.$current_form_id.'[confirmation-message][border-color]', // Setting id
    array( // Args, including any custom ones.
      'label' => __( 'Border Color' ),
      'section' => 'nf_styler_form_id_confirmation_message',
    )
  )
);



 $wp_customize->add_setting( 'nf_styler_form_id_'.$current_form_id.'[confirmation-message][background-color]' , array(
      'default'     => '',
      'transport'   => 'postMessage',
      'type' => 'option'
  ) );

  $wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize, // WP_Customize_Manager
    'nf_styler_form_id_'.$current_form_id.'[confirmation-message][background-color]', // Setting id
    array( // Args, including any custom ones.
      'label' => __( 'Background Color' ),
      'section' => 'nf_styler_form_id_confirmation_message',
    )
  )
);


$wp_customize->add_control(
	new WP_Customize_Label_Only(
		$wp_customize,
		'nf_styler_form_id_' . $current_form_id . '[confirmation-message][padding-label-only]', // Setting id
		array( // Args, including any custom ones.
			'label'    => __( 'Padding' ),
			'section'  => 'nf_styler_form_id_confirmation_message',
			'settings' => array(),
		)
	)
);

nf_styler_margin_padding_controls( $wp_customize, $current_form_id, 'nf_styler_form_id_confirmation_message', 'confirmation-message', 'padding' );