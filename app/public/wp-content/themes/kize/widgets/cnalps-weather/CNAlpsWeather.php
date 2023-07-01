<?php

class CNAlpsWeather extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('CNAlpsWeather', 'CNAlpsWeather');
//        parent::__construct($id_base, $name, $widget_options, $control_options);
    }

    public function widget($args, $instance)
    {
        echo '<div class="weather-widget-title">
<div class="weather-title"> <h2>Météo</h2></div>
</div>';
        echo $args['before_widget'];
        if (isset($instance['city'])) {
            $city = apply_filters('widget_city', $instance['city']);
            echo $args['before_city'] . $city . $args['after_city'];
        }
        if (isset($instance['country'])) {
            $country = apply_filters('widget_country', $instance['country']);
            echo $args['before_country'] . $country . $args['after_country'];
        }
        echo '<div id="result" data-city="' . $instance['city'] . '" data-country="' . $instance['country'] . '"></div>';

        echo $args['after_widget'];
    }

    public function form($instance)
    {
//        var_dump($instance);
        $city = isset($instance['city']) ? $instance['city'] : '';
        $country = isset($instance['country']) ? $instance['country'] : '';
        ?>
        <p>
            <label for="<?= $this->get_field_name('city') ?>">City</label>
            <input class="widefat"
                   id="<?= $this->get_field_name('city') ?>"
                   value="<?= esc_attr($city) ?>"
                   type="text"
                   name="<?= $this->get_field_name('city') ?>">
        </p>
        <p>
            <label for="<?= $this->get_field_name('country') ?>">Country</label>
            <input class="widefat"
                   id="<?= $this->get_field_name('country') ?>"
                   value="<?= esc_attr($country) ?>"
                   type="text"
                   name="<?= $this->get_field_name('country') ?>">
        </p>

        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

}