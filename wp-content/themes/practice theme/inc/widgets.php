<?php
/**
* Adds Foo_Widget widget.
*/
class RecentPosts extends WP_Widget {

/**
* Register widget with WordPress.
*/
function __construct() {
parent::__construct(
'recent_posts', // Base ID
esc_html__( 'RECENT POSTS', 'text_domain' ), // Name
array( 'description' => esc_html__( 'This contains top 5 recent posts.', 'text_domain' ), ) // Args
);
}

/**
* Front-end display of widget.
*
* @see WP_Widget::widget()
*
* @param array $args     Widget arguments.
* @param array $instance Saved values from database.
*/
public function widget( $args, $instance ) {
echo $args['before_widget'];
if ( ! empty( $instance['title'] ) ) {
echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
}
$query = array(
                'type' => 'post',
                'posts_per_page' => 5,
            );
    $lastBlog = new WP_Query($query);
    if ( $lastBlog->have_posts() ):
        while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
    <div class="media">
        <div class="media-left">
            <img src=" <?php echo wp_get_attachment_url(get_post_thumbnail_id( get_the_ID() ), 'thumbnail' ); ?>" class="media-object" style="width:55px; height:55px">
        </div>
        <div class="media-body">
            <h4 class="media-heading"> <?php the_title(sprintf('<h4 class="entry-title"> <a href="%s">',esc_url(get_permalink()),'</a></h4>'))?></h4>
            <h6 class="media-category"><?php the_category(' '); ?></h6>
        </div>
    </div>

        <?php endwhile;
            endif;
            wp_reset_postdata();
echo $args['after_widget'];
}

/**
* Back-end widget form.
*
* @see WP_Widget::form()
*
* @param array $instance Previously saved values from database.
*/
public function form( $instance ) {
$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
?>
<p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
</p>
<?php
}

/**
 * Sanitize widget form values as they are saved.
 *
 * @see WP_Widget::update()
 *
 * @param array $new_instance Values just sent to be saved.
 * @param array $old_instance Previously saved values from database.
 *
 * @return array Updated safe values to be saved.
 */
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
}

} // class Foo_Widget