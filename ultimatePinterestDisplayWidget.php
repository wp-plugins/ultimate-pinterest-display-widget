<?php
/**
 * @package ultimate-pinterest-display-widget
*/
/*
Plugin Name: Ultimate Pinterest Display Widget
Plugin URI: http://www.connexdesigns.com
Description: Thanks for installing Ultimate Pinterest Display Widget. Four in One Module. Using this module you can create Pin It Button, Pin Widget, Profile Widget & Board Widget on your website. Please rate us on Joomla Extensions Directory if you have liked our module.
Version: 0.2
Author: Kristijan Lopac
Author URI: http://www.connexdesigns.com
*/

class ultimatePinterestDisplayWidget extends WP_Widget{
    public function __construct() {
        $params = array(
            'description' => 'Thanks for installing Ultimate Pinterest Display Widget. Four in One Module. Using this module you can create Pin It Button, Pin Widget, Profile Widget & Board Widget on your website. Please rate us on Joomla Extensions Directory if you have liked our module',
            'name' => 'Ultimate Pinterest Display Widget'
        );
        parent::__construct('ultimatePinterestDisplayWidget','',$params);
    }
	
    public function form($instance) {
        extract($instance);
        ?>
<!-- Ultimate Pinterest Display Widget - Wordpress Backend Configuration - -->
<p>
    <label for="<?php echo $this->get_field_id('title');?>">Title : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('title');?>"
	name="<?php echo $this->get_field_name('title');?>"
        value="<?php echo !empty($title) ? $title : "Ultimate Pinterest Display Widget"; ?>" />
</p>
<p>Ultimate Pinterest Display can show - Pin It Button, Pin Widget, Profile Widget, Board Widget. Select the one from your choice</p>
<p>
    <label for="<?php echo $this->get_field_id( 'selectOne' ); ?>">Ultimate Pinterest Display :</label> 
    <select id="<?php echo $this->get_field_id( 'selectOne' ); ?>"
        name="<?php echo $this->get_field_name( 'selectOne' ); ?>"
        class="widefat" style="width:100%;">
            <option value="pinit" <?php if ($selectOne == 'pinit') echo 'selected="pinit"'; ?> >Pin It Button</option>
            <option value="pinwidget" <?php if ($selectOne == 'pinwidget') echo 'selected="pinwidget"'; ?> >Pin Widget</option>
            <option value="profilewidget" <?php if ($selectOne == 'profilewidget') echo 'selected="profilewidget"'; ?> >Profile Widget</option>
            <option value="boardwidget" <?php if ($selectOne == 'boardwidget') echo 'selected="boardwidget"'; ?> >Board Widget</option>
    </select>
</p>
<div id="pinit">
<div style="color:#fff; font-size:12px; font-weight:bold; padding:3px; margin:0; text-align:center; background:#333333;">Pin It Button Configuration</div>
<p>
    <label for="<?php echo $this->get_field_id('piniturl');?>">Pin It URL : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('piniturl');?>"
	name="<?php echo $this->get_field_name('piniturl');?>"
    value="<?php echo !empty($piniturl) ? $piniturl : "http://www.flickr.com/photos/kentbrew/6851755809/"; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'pinit_size' ); ?>">Pin It Button Size :</label> 
    <select id="<?php echo $this->get_field_id( 'pinit_size' ); ?>"
        name="<?php echo $this->get_field_name( 'pinit_size' ); ?>"
        class="widefat" style="width:100%;">
            <option value="28" <?php if ($pinit_size == '28') echo 'selected="28"'; ?> >Large</option>
            <option value="" <?php if ($pinit_size == '') echo 'selected=""'; ?> >Small</option>	
    </select>
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'pinit_shape' ); ?>">Pin It Button Shape :</label> 
    <select id="<?php echo $this->get_field_id( 'pinit_shape' ); ?>"
        name="<?php echo $this->get_field_name( 'pinit_shape' ); ?>"
        class="widefat" style="width:100%;">
            <option value="" <?php if ($pinit_shape == '') echo 'selected=""'; ?> >Rectangular</option>
            <option value="round" <?php if ($pinit_shape == 'round') echo 'selected="round"'; ?> >Circular</option>	
    </select>
</p>
</div>
<div id="pinwidget">
<div style="color:#fff; font-size:12px; font-weight:bold; padding:3px; margin:0; text-align:center; background:#333333;">Pin Widget Configuration</div>
<p>
    <label for="<?php echo $this->get_field_id('pintitle');?>">Pin Title : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('pintitle');?>"
	name="<?php echo $this->get_field_name('pintitle');?>"
    value="<?php echo !empty($pintitle) ? $pintitle : "Kent Brewster's pin on Pinterest"; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('pinwidgeturl');?>">Pin Widget URL : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('pinwidgeturl');?>"
	name="<?php echo $this->get_field_name('pinwidgeturl');?>"
    value="<?php echo !empty($pinwidgeturl) ? $pinwidgeturl : "http://www.pinterest.com/pin/99360735500167749/"; ?>" />
</p>
</div>
<div id="profilewidget">
<div style="color:#fff; font-size:12px; font-weight:bold; padding:3px; margin:0; text-align:center; background:#333333;">Profile Widget Configuration</div>
<p>
    <label for="<?php echo $this->get_field_id('profileurl');?>">Pinterest Profile URL : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('profileurl');?>"
	name="<?php echo $this->get_field_name('profileurl');?>"
    value="<?php echo !empty($profileurl) ? $profileurl : "http://www.pinterest.com/pinterest/"; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('pwwidth');?>">Image Width : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('pwwidth');?>"
	name="<?php echo $this->get_field_name('pwwidth');?>"
    value="<?php echo !empty($pwwidth) ? $pwwidth : "92"; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('pwheight');?>">Profile Height : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('pwheight');?>"
	name="<?php echo $this->get_field_name('pwheight');?>"
    value="<?php echo !empty($pwheight) ? $pwheight : "175"; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('pwbwidth');?>">Profile Width : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('pwbwidth');?>"
	name="<?php echo $this->get_field_name('pwbwidth');?>"
    value="<?php echo !empty($pwbwidth) ? $pwbwidth : "300"; ?>" />
</p>
</div>
<div id="boardwidget">
<div style="color:#fff; font-size:12px; font-weight:bold; padding:3px; margin:0; text-align:center; background:#333333;">Board Widget Configuration</div>
<p>
    <label for="<?php echo $this->get_field_id('boardurl');?>">Pinterest Board URL : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('boardurl');?>"
	name="<?php echo $this->get_field_name('boardurl');?>"
    value="<?php echo !empty($boardurl) ? $boardurl : "http://www.pinterest.com/pinterest/pin-pets/"; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('bwwidth');?>">Image Width : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('bwwidth');?>"
	name="<?php echo $this->get_field_name('bwwidth');?>"
    value="<?php echo !empty($bwwidth) ? $bwwidth : "92"; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('bwheight');?>">Board Height : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('bwheight');?>"
	name="<?php echo $this->get_field_name('bwheight');?>"
    value="<?php echo !empty($bwheight) ? $bwheight : "175"; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id('bwbwidth');?>">Board Width : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('bwbwidth');?>"
	name="<?php echo $this->get_field_name('bwbwidth');?>"
    value="<?php echo !empty($bwbwidth) ? $bwbwidth : "300"; ?>" />
</p>
</div>
<div style="color:#fff; font-size:12px; font-weight:bold; padding:3px; margin:0; text-align:center; background:#333333;">Advanced Widget Configuration</div>
<p>
    <label for="<?php echo $this->get_field_id('suffix');?>">Widget Class Suffix : </label>
    <input
	class="widefat"
	id="<?php echo $this->get_field_id('suffix');?>"
	name="<?php echo $this->get_field_name('suffix');?>"
    value="<?php echo !empty($suffix) ? $suffix : ""; ?>" />
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'addpin' ); ?>">Add Pinterest Script :</label> 
    <select id="<?php echo $this->get_field_id( 'addpin' ); ?>"
        name="<?php echo $this->get_field_name( 'addpin' ); ?>"
        class="widefat" style="width:100%;">
            <option value="true" <?php if ($addpin == 'true') echo 'selected="true"'; ?> >Yes</option>
            <option value="false" <?php if ($addpin == 'false') echo 'selected="false"'; ?> >No</option>	
    </select>
</p>
<!--end of configuration fields-->
<?php
    }
    public function widget($args, $instance) {
        extract($args);
        extract($instance);
        $title = apply_filters('widget_title', $title);
        $description = apply_filters('widget_description', $description);
		if($pinit_shape == ''){
			$pinitimg = "//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png";
		}
		else{
			$pinitimg = "//assets.pinterest.com/images/pidgets/pinit_fg_en_round_red_16.png";
		}
        if($selectOne == "pinit"){
            $outputDisplay = "<a href='//www.pinterest.com/pin/create/button/?url=$piniturl' data-pin-do='buttonPin' data-pin-shape='$pinit_shape' data-pin-config='beside' data-pin-height='$pinit_size'><img src='$pinitimg' /></a>";
        }
        else if($selectOne == "pinwidget"){
            $outputDisplay = "<a data-pin-do='embedPin' href='$pinwidgeturl'>$pintitle</a>";
        }
        else if($selectOne == "profilewidget"){
            $outputDisplay = "<a data-pin-do='embedUser' href='$profileurl' data-pin-scale-width='$pwwidth' data-pin-scale-height='$pwheight' data-pin-board-width='$pwbwidth'>Visit Pinterest's profile on Pinterest.</a>";
        }
        else{
            $outputDisplay = "<a data-pin-do='embedBoard' href='$boardurl' data-pin-scale-width='$bwwidth' data-pin-scale-height='$bwheight' data-pin-board-width='$bwbwidth'>Follow Pinterest's board Pin pets on Pinterest.</a>";
        }
        $pinterestDisplay = "";
        $pinterestDisplay .= "<div id='ultimate-pinterest-display-widget' class='$suffix'>";
        $pinterestDisplay .= $outputDisplay;
	$pinterestDisplay .= "<div class='copy' style='color:#ccc; font-size: 9px; '><a href='http://www.amazon.com/ChomChom-Roller/dp/B00BAGTNAQ' title='click here' target='_blank'>Cat Hair Remover</a></div>";
        $pinterestDisplay .= "</div>";
		if($addpin == "true"){$pinterestDisplay .= "<script type='text/javascript' async src='//assets.pinterest.com/js/pinit.js'>";}
            echo $before_widget;
            echo $before_title . $title . $after_title;
			if(empty($selectOne)){
			echo "Please save your widget configuration after making your preferable changes";
			} else {
            echo $pinterestDisplay;
			}
            echo $after_widget;
    }
}
//start registering the extension
add_action('widgets_init','register_connex_ultimatePinterestDisplayWidget');
function register_connex_ultimatePinterestDisplayWidget(){
    register_widget('ultimatePinterestDisplayWidget');
}