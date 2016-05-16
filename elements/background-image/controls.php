<?php
return array(
  'image' => array(
    'type'    => 'image',
    'ui'      => array(
      'title'   => __('Image', 'cornerstone-helper'),
      'tooltip' => __('The image used in the background.', 'cornerstone-helper')
    )
  ),

  'repeat' => array(
    'type'    => 'select',
    'ui'      => array(
      'title'   => __('Repeat', 'cornerstone-helper'),
    ),
    'options' => array(
      'choices' => array(
        array( 'value' => 'no-repeat',  'label' => __('No', 'cornerstone-helper') ),
        array( 'value' => 'repeat',     'label' => __('Yes', 'cornerstone-helper') ),
      )
    )
  ),

  'overlay' => array(
    'type'    => 'color',
    'ui'      => array(
      'title'   => __('Color Overlay', 'cornerstone-helper'),
    ),
    'options' => array(
      'divider' => true
    )
  ),

  'height' => array(
    'type'      => 'text',
    'ui'        => array(
      'title'     => __('Height', 'cornerstone-helper'),
      'tooltip'   => __('Fixed image height.', 'cornerstone-helper')
    )
  ),

  'position_x' => array(
    'group' => true,

    'value'   => array(
      'type'    => 'select',
      'ui'      => array(
        'title'   => __('Position X', 'cornerstone-helper'),
      ),
      'options' => array(
        'choices' => array(
          array( 'value' => 'top',    'label' => __('Top', 'cornerstone-helper') ),
          array( 'value' => 'bottom', 'label' => __('Bottom', 'cornerstone-helper') ),
          array( 'value' => 'center', 'label' => __('Center', 'cornerstone-helper') ),
          array( 'value' => 'left',   'label' => __('Left', 'cornerstone-helper') ),
          array( 'value' => 'right',  'label' => __('Right', 'cornerstone-helper') ),
          array( 'value' => 'custom', 'label' => __('Custom', 'cornerstone-helper') ),
        )
      )
    ),

    'custom'  => array(
      'type'   => 'text',
      'condition' => array(
        'group::value' => 'custom',
      )
    )
  ),

  'position_y' => array(
    'group' => true,

    'value'   => array(
      'type'    => 'select',
      'ui'      => array(
        'title'   => __('Position Y', 'cornerstone-helper'),
      ),
      'options' => array(
        'choices' => array(
          array( 'value' => 'top',    'label' => __('Top', 'cornerstone-helper') ),
          array( 'value' => 'bottom', 'label' => __('Bottom', 'cornerstone-helper') ),
          array( 'value' => 'center', 'label' => __('Center', 'cornerstone-helper') ),
          array( 'value' => 'left',   'label' => __('Left', 'cornerstone-helper') ),
          array( 'value' => 'right',  'label' => __('Right', 'cornerstone-helper') ),
          array( 'value' => 'custom', 'label' => __('Custom', 'cornerstone-helper') ),
        )
      )
    ),

    'custom'  => array(
      'type'   => 'text',
      'condition' => array(
        'group::value' => 'custom',
      )
    )
  ),

  'size' => array(
    'group' => true,

    'value'   => array(
      'type'    => 'select',
      'ui'      => array(
        'title'   => __('Size', 'cornerstone-helper'),
      ),
      'options' => array(
        'choices' => array(
          array( 'value' => 'auto',    'label' => __('Auto', 'cornerstone-helper') ),
          array( 'value' => 'contain', 'label' => __('Contain', 'cornerstone-helper') ),
          array( 'value' => 'cover', 'label' => __('Cover', 'cornerstone-helper') ),
          array( 'value' => 'custom', 'label' => __('Custom', 'cornerstone-helper') ),
        )
      )
    ),

    'custom'  => array(
      'type'   => 'text',
      'condition' => array(
        'group::value' => 'custom',
      )
    )
  ),


  'origin' => array(
    'type'    => 'select',
    'ui'      => array(
      'title'   => __('Origin', 'cornerstone-helper'),
    ),
    'options' => array(
      'choices' => array(
        array( 'value' => '',             'label' => __('Default', 'cornerstone-helper') ),
        array( 'value' => 'padding-box',  'label' => __('Padding Box', 'cornerstone-helper') ),
        array( 'value' => 'border-box',   'label' => __('Border box', 'cornerstone-helper') ),
        array( 'value' => 'content-box',  'label' => __('Content Box', 'cornerstone-helper') ),
      )
    )
  ),

  'attachment' => array(
    'type'    => 'select',
    'ui'      => array(
      'title'   => __('Attachment', 'cornerstone-helper'),
    ),
    'options' => array(
      'choices' => array(
        array( 'value' => 'scroll', 'label' => __('Scroll', 'cornerstone-helper') ),
        array( 'value' => 'fixed',  'label' => __('Fixed', 'cornerstone-helper') ),
      )
    )
  )
);
