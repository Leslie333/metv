<?php

/* ----------------------------------------------------------------------------------- */
/* Initializes all the theme settings option fields for posts area. */
/* ----------------------------------------------------------------------------------- */

$options = array(
    /* ----------------------------------------------------------------------------------- */
    /* Sidebar */
    /* ----------------------------------------------------------------------------------- */

    /* Single Post */
    array('name' => __('Single Post', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_side_media',
        'type' => 'metabox',
        'context' => 'side',
        'priority' => 'low' /* high/low */
    ),
    // Disable Single Post Image
    array('name' => __('Disable Image', 'tfuse'),
        'desc' => '',
        'id' => TF_THEME_PREFIX . '_disable_image',
        'value' => tfuse_options('disable_image','false'),
        'type' => 'checkbox'
    ),
    // Disable Single Post Video
    array('name' => __('Disable Video', 'tfuse'),
        'desc' => '',
        'id' => TF_THEME_PREFIX . '_disable_video',
        'value' => tfuse_options('disable_video','false'),
        'type' => 'checkbox',
        'divider' => true
    ),
     // Post Meta
    array('name' => __('Disable Meta', 'tfuse'),
        'desc' => '',
        'id' => TF_THEME_PREFIX . '_disable_post_meta',
        'value' => tfuse_options('disable_post_meta','false'),
        'type' => 'checkbox'
    ),
    // Author Info
    array('name' => __('Disable Author', 'tfuse'),
        'desc' => '',
        'id' => TF_THEME_PREFIX . '_disable_author',
        'value' => tfuse_options('disable_author_info','false'),
        'type' => 'checkbox'
    ),
    // Published Date
    array('name' => __('Disable Published Date', 'tfuse'),
        'desc' => '',
        'id' => TF_THEME_PREFIX . '_disable_published_date',
        'value' => tfuse_options('disable_published_date','false'),
        'type' => 'checkbox'
    ),
    // Published Date
    array('name' => __('Disable Comments', 'tfuse'),
        'desc' => '',
        'id' => TF_THEME_PREFIX . '_disable_coments',
        'value' => tfuse_options('disable_comments','false'),
        'type' => 'checkbox' 
    ),
    // Author Info
    array('name' => __('Disable Author Info', 'tfuse'),
        'desc' => '',
        'id' => TF_THEME_PREFIX . '_disable_author_info',
        'value' => tfuse_options('disable_author_info','false'),
        'type' => 'checkbox',
        'divider' => true
    ),
    // Post Title
    array('name' => __('Post Title', 'tfuse'),
        'desc' => __('Select your preferred Post Title.', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_page_title',
        'value' => 'default_title',
        'options' => array('hide_title' => __('Hide Post Title', 'tfuse'), 'default_title' => __('Default Title', 'tfuse'), 'custom_title' => __('Custom Title', 'tfuse')),
        'type' => 'select'
    ),
    // Custom Title
    array('name' => __('Custom Title', 'tfuse'),
        'desc' => __('Enter your custom title for this post.', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_custom_title',
        'value' => '',
        'type' => 'text'
    ),
    
    /* ----------------------------------------------------------------------------------- */
    /* After Textarea */
    /* ----------------------------------------------------------------------------------- */

    /* Post Media */
    array('name' => __('Media', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_media',
        'type' => 'metabox',
        'context' => 'normal'
    ),
    // Single Image
    array('name' => __('Image', 'tfuse'),
        'desc' => __('This is the main image for your post. Upload one from your computer, or specify an online address for your image (Ex: http://yoursite.com/image.png).', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_single_image',
        'value' => '',
        'type' => 'upload',
        'hidden_children' => array(
            TF_THEME_PREFIX . '_single_img_dimensions',
            TF_THEME_PREFIX . '_single_img_position'
        )
    ),
    // Single Image Dimensions
    array('name' => __('Image Resize (px)', 'tfuse'),
        'desc' => __('These are the default width and height values. If you want to resize the image change the values with your own. If you input only one, the image will get resized with constrained proportions based on the one you specified.', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_single_img_dimensions',
        'value' => tfuse_options('single_image_dimensions'),
        'type' => 'textarray'
    ),
    // Single Image Position
    array('name' => __('Image Position', 'tfuse'),
        'desc' => __('Select your preferred image  alignment', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_single_img_position',
        'value' => tfuse_options('single_image_position'),
        'options' => array(
            '' => array($url . 'full_width.png', __('Don\'t apply an alignment', 'tfuse')),
            'alignleft' => array($url . 'left_off.png', __('Align to the left', 'tfuse')),
            'alignright' => array($url . 'right_off.png', __('Align to the right', 'tfuse'))
            ),
        'type' => 'images',
        'divider' => true
    ),    
    // Thumbnail Image
    array('name' => __('Thumbnail', 'tfuse'),
        'desc' => __('This is the thumbnail for your post. Upload one from your computer, or specify an online address for your image (Ex: http://yoursite.com/image.png).', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_thumbnail_image',
        'value' => '',
        'type' => 'upload',
        'hidden_children' => array(
            TF_THEME_PREFIX . '_thumbnail_position'
        ),
    ),
    // Thumbnail Position
    array('name' => __('Thumbnail Position', 'tfuse'),
        'desc' => __('Select your preferred thumbnail alignment', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_thumbnail_position',
        'value' => tfuse_options('thumbnail_position'),
        'options' => array(
            'noalign' => array($url . 'left_off.png', __('Align to the left', 'tfuse')),
            'alignright' => array($url . 'right_off.png', __('Align to the right', 'tfuse'))
            ),
        'type' => 'images', 
        'divider' => true
    ),
    // Custom Post Video
    array('name' => __('Video', 'tfuse'),
        'desc' => __('Copy paste the video URL or embed code. The video URL works only for Vimeo and YouTube videos. Read <a target="_blank" href="http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/">prettyPhoto documentation</a>
                    for more info on how to add video or flash in this text area
                    ', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_video_link',
        'value' => '',
        'type' => 'textarea',
        'hidden_children' => array(
            TF_THEME_PREFIX . '_video_dimensions',
            TF_THEME_PREFIX . '_video_position'
        )
    ),
    // Video Dimensions
    array('name' => __('Video Size (px)', 'tfuse'),
        'desc' => __('These are the default width and height values. If you want to resize the video change the values with your own. If you input only one, the video will get resized with constrained proportions based on the one you specified.', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_video_dimensions',
        'value' => tfuse_options('video_dimensions'),
        'type' => 'textarray'
    ),
    // Video Position
    array('name' => __('Video Position', 'tfuse'),
        'desc' => __('Select your preferred video alignment', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_video_position',
        'value' => tfuse_options('video_position'),
        'options' => array(
            '' => array($url . 'full_width.png', __('Don\'t apply an alignment', 'tfuse')),
            'alignleft' => array($url . 'left_off.png', __('Align to the left', 'tfuse')),
            'alignright' => array($url . 'right_off.png', __('Align to the right', 'tfuse'))
            ),
        'type' => 'images'
    ),   
    /* Header Options */
    array('name' => __('Header', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_header_option',
        'type' => 'metabox',
        'context' => 'normal'
    ),
    // Element of Hedear
    array('name' => __('Element of Hedear', 'tfuse'),
        'desc' => __('Select type of element on the header.', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_header_element',
        'value' => 'without',
        'options' => array('without' => __('Without Header Element', 'tfuse'),'map' => __('Map on Header', 'tfuse'),'slider' => __('Slider on Header', 'tfuse')),
        'type' => 'select',
    ),
    // Select Slider
    $this->ext->slider->model->has_sliders() ?
            array(
        'name' => __('Slider', 'tfuse'),
        'desc' => __('Select a slider for your post. The sliders are created on the', 'tfuse') . '<a href="' . admin_url( 'admin.php?page=tf_slider_list' ) . '" target="_blank">' . __('Sliders page', 'tfuse') . '</a>.',
        'id' => TF_THEME_PREFIX . '_select_slider',
        'value' => '',
        'options' => $TFUSE->ext->slider->get_sliders_dropdown(),
        'type' => 'select'
            ) :
            array(
        'name' => __('Slider', 'tfuse'),
        'desc' => '',
        'id' => TF_THEME_PREFIX . '_select_slider',
        'value' => '',
        'html' => __('No sliders created yet. You can start creating one', 'tfuse') . '<a href="' . admin_url('admin.php?page=tf_slider_list') . '">' . __('here', 'tfuse') . '</a>.',
        'type' => 'raw'
            )
    ,
    array(
        'name' => __('Map position', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_page_map',
        'value' => '',
        'type' => 'maps'
    ),
    
    //Ads
    array('name' => __('Ads', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_post_ads',
        'type' => 'metabox',
        'context' => 'normal'
    ),
    //top ad
     array(
        'name'=>__('Post Pages Ad the Same as Category', 'tfuse'),
        'desc'=>__('The banners set in a specific category,will be displayed in all the article details from that category.', 'tfuse'),
        'id'=> TF_THEME_PREFIX . '_content_ads_post',
        'value' => 'true',
        'type' =>'checkbox',
         'divider' => true
    ),
    array('name' => __('Enable 728x90 banner ', 'tfuse'),
            'desc' => __('Enable the top banner space. Note: you can set a specific banner for all categories and posts in the <a href="', 'tfuse') . admin_url('admin.php?page=themefuse') . '">theme framowork options</a>',
            'id' => TF_THEME_PREFIX . '_top_ad_space',
            'value' => 'false',
            'options' => array('false' => __('No', 'tfuse'), 'true' => __('Yes', 'tfuse')),
            'type' => 'select',
    ),
    array(
            'name'=>__('Ad image(728px x 90px)', 'tfuse'),
            'desc'=>__('Enter the URL to the ad image 728x90 location', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_top_ad_image',
            'value' => '',
            'type' =>'upload'
    ),
    array(
            'name'=>__('Ad URL', 'tfuse'),
            'desc'=>__('Enter the URL where this ad points to.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_top_ad_url',
            'value' => '',
            'type' =>'text'
    ),
    array(
            'name'=>__('Adsense code', 'tfuse'),
            'desc'=>__('Enter your adsense code (or other ad network code) here.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_top_ad_adsense',
            'value' => '',
            'type' =>'textarea',
            'divider' => true
    ),

    //125x125 ad
    array('name' => __('Enable 125x125 banners', 'tfuse'),
            'desc' => __('Enable before content banner space. Note: you can set specific banners for all categories and posts in the <a href="', 'tfuse') . admin_url('admin.php?page=themefuse') . '">theme framowork options</a>',
            'id' => TF_THEME_PREFIX . '_bfcontent_ads_space',
            'value' => 'false',
            'options' => array('false' => __('No', 'tfuse'), 'true' => __('Yes', 'tfuse')),
            'type' => 'select'
    ),
    array('name' => __('Type of ads', 'tfuse'),
            'desc' => __('Choose the type of your adds.', 'tfuse'),
            'id' => TF_THEME_PREFIX . '_bfcontent_type',
            'value' => 'image',
            'options' => array('image' => __('Image Type', 'tfuse'), 'adsense' => __('Adsense Type', 'tfuse')),
            'type' => 'select'
    ),
    array('name' => __('No of 125x125 ads', 'tfuse'),
            'desc' => __('Choose the numbers of ads to display before content.', 'tfuse'),
            'id' => TF_THEME_PREFIX . '_bfcontent_number',
            'value' => '7',
            'options' => array('one' => '1', 'two' => '2' , 'three' => '3', 'four' => '4', 'five' => '5', 'six' => '6', 'seven' => '7'),
            'type' => 'select'
    ),
    array(
            'name'=>__('Ad image (125px x 125px)', 'tfuse'),
            'desc'=>__('Enter the URL to the ad image 125x125 location', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_image1',
            'value' => '',
            'type' =>'upload'
    ),
    array(
            'name'=>__('Ad URL', 'tfuse'),
            'desc'=>__('Enter the URL where this ad points to.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_url1',
            'value' => '',
            'type' =>'text'
    ),
    array(
            'name'=>__('Adsense code for before content ads', 'tfuse'),
            'desc'=>__('Enter your adsense code (or other ad network code) here.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_adsense1',
            'value' => '',
            'type' =>'textarea'
    ),
    array(
            'name'=>__('Ad image (125px x 125px)', 'tfuse'),
            'desc'=>__('Enter the URL to the ad image 125x125 location', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_image2',
            'value' => '',
            'type' =>'upload'
    ),
    array(
            'name'=>__('Ad URL', 'tfuse'),
            'desc'=>__('Enter the URL where this ad points to.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_url2',
            'value' => '',
            'type' =>'text'
    ),
    array(
            'name'=>__('Adsense code for before content ads', 'tfuse'),
            'desc'=>__('Enter your adsense code (or other ad network code) here.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_adsense2',
            'value' => '',
            'type' =>'textarea'
    ),
    array(
            'name'=>__('Ad image (125px x 125px)', 'tfuse'),
            'desc'=>__('Enter the URL to the ad image 125x125 location', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_image3',
            'value' => '',
            'type' =>'upload'
    ),
    array(
            'name'=>__('Ad URL', 'tfuse'),
            'desc'=>__('Enter the URL where this ad points to.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_url3',
            'value' => '',
            'type' =>'text'
    ),
    array(
            'name'=>__('Adsense code for before content ads', 'tfuse'),
            'desc'=>__('Enter your adsense code (or other ad network code) here.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_adsense3',
            'value' => '',
            'type' =>'textarea'
    ),
    array(
            'name'=>__('Ad image (125px x 125px)', 'tfuse'),
            'desc'=>__('Enter the URL to the ad image 125x125 location', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_image4',
            'value' => '',
            'type' =>'upload'
    ),
    array(
            'name'=>__('Ad URL', 'tfuse'),
            'desc'=>__('Enter the URL where this ad points to.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_url4',
            'value' => '',
            'type' =>'text'
    ),
    array(
            'name'=>__('Adsense code for before content ads', 'tfuse'),
            'desc'=>__('Enter your adsense code (or other ad network code) here.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_adsense4',
            'value' => '',
            'type' =>'textarea'
    ),
    array(
            'name'=>__('Ad image (125px x 125px)', 'tfuse'),
            'desc'=>__('Enter the URL to the ad image 125x125 location', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_image5',
            'value' => '',
            'type' =>'upload'
    ),
    array(
            'name'=>__('Ad URL', 'tfuse'),
            'desc'=>__('Enter the URL where this ad points to.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_url5',
            'value' => '',
            'type' =>'text'
    ),
    array(
            'name'=>__('Adsense code for before content ads', 'tfuse'),
            'desc'=>__('Enter your adsense code (or other ad network code) here.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_adsense5',
            'value' => '',
            'type' =>'textarea'
    ),
    array(
            'name'=>__('Ad image (125px x 125px)', 'tfuse'),
            'desc'=>__('Enter the URL to the ad image 125x125 location', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_image6',
            'value' => '',
            'type' =>'upload'
    ),
    array(
            'name'=>__('Ad URL', 'tfuse'),
            'desc'=>__('Enter the URL where this ad points to.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_url6',
            'value' => '',
            'type' =>'text'
    ),
    array(
            'name'=>__('Adsense code for before content ads', 'tfuse'),
            'desc'=>__('Enter your adsense code (or other ad network code) here.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_adsense6',
            'value' => '',
            'type' =>'textarea'
    ),
    array(
            'name'=>__('Ad image (125px x 125px)', 'tfuse'),
            'desc'=>__('Enter the URL to the ad image 125x125 location', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_image7',
            'value' => '',
            'type' =>'upload'
    ),
    array(
            'name'=>__('Ad URL', 'tfuse'),
            'desc'=>__('Enter the URL where this ad points to.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_url7',
            'value' => '',
            'type' =>'text'
    ),
    array(
            'name'=>__('Adsense code for before content ads', 'tfuse'),
            'desc'=>__('Enter your adsense code (or other ad network code) here.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_bfcontent_ads_adsense7',
            'value' => '',
            'type' =>'textarea',
            'divider' => true
    ),
    //468x60 ad
    array('name' => __('Enable 468x60 banner ', 'tfuse'),
            'desc' => __('Enable after content banner space. Note: you can set a specific banner for all categories and posts in the <a href="', 'tfuse') . admin_url('admin.php?page=themefuse') . '">theme framowork options</a>',
            'id' => TF_THEME_PREFIX . '_hook_space',
            'value' => 'false',
            'options' => array('false' => __('No', 'tfuse'), 'true' => __('Yes', 'tfuse')),
            'type' => 'select',
    ),
    array(
            'name'=>__('Ad image(468px x 60px)', 'tfuse'),
            'desc'=>__('Enter the URL to the ad image 468x60 location', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_hook_image',
            'value' => '',
            'type' =>'upload'
    ),
    array(
            'name'=>__('Ad URL', 'tfuse'),
            'desc'=>__('Enter the URL where this ad points to.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_hook_url',
            'value' => '',
            'type' =>'text'
    ),
    array(
            'name'=>__('Adsense code', 'tfuse'),
            'desc'=>__('Enter your adsense code (or other ad network code) here.', 'tfuse'),
            'id'=> TF_THEME_PREFIX . '_hook_adsense',
            'value' => '',
            'type' =>'textarea',
    ),
    /* Content Options */
    array('name' => __('Content Options', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_content_option',
        'type' => 'metabox',
        'context' => 'normal'
    ),
    // Bottom Shortcodes
    array('name' => __('Post Subtitle', 'tfuse'),
        'desc' => __('Give a subtitle for this post.', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_content_subtitle',
        'value' => '',
        'type' => 'textarea',
        'divider' => true
    ),
    // Top Shortcodes
    array('name' => __('Shortcodes before Content', 'tfuse'),
        'desc' => __('In this textarea you can input your prefered custom shotcodes.', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_content_top',
        'value' => '',
        'type' => 'textarea'
    ),
    array('name' => __('Shortcodes after Content', 'tfuse'),
        'desc' => __('In this textarea you can input your prefered custom shotcodes.', 'tfuse'),
        'id' => TF_THEME_PREFIX . '_content_bottom',
        'value' => '',
        'type' => 'textarea'
    )
);

?>