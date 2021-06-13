<?php

class Rae_DailyChart_Api {

    public function __construct() {
        add_action('rest_api_init', [$this, 'init_endpoints']);
    }

    public function init_endpoints() {
        register_rest_route(
                RPE_API_NAMESPACE, '/kid/food', [
            'methods' => 'GET',
            'callback' => [$this, 'response_kid_food'],
            'args' => ["kidIds", "date"]
                ]
        );
    }

    public function response_kid_food(WP_REST_Request $request) {
        $auth = new Jwt_Auth_Public("api", 1);
        $authResponse = $auth->validate_token($request);
        if ($authResponse["code"] != 200) {
            $response = [
                "code" => $authResponse["code"],
                "status" => $authResponse["status"],
                "message" => $authResponse["message"],
                "data" => null
            ];
            return new WP_REST_Response($response);
        }
        $response = [];
        $params = $request->get_params();
        // get all kids ids
        $kids = explode(",", $params["kidIds"]);

        global $wpdb;

        $metaKeyChartDate = PREFIX_DAILY_CHART . 'date';
        $metaValueChartDate = $params["date"] ? $params["date"] : date('M d, Y');
        $getPostsData = $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->postmeta WHERE meta_key = '$metaKeyChartDate' AND meta_value LIKE '$metaValueChartDate'"));

        if ($getPostsData) {
            foreach ($getPostsData as $data) {

                $post_id = $data->post_id;
                $getChildren = rwmb_meta(PREFIX_DAILY_CHART . 'children', "", $post_id);

                if ($getChildren) {
                    foreach ($getChildren as $child) {
                        echo $child_id = $kid;
                        if (count($kids) > 0) {
                            foreach ($kids as $kid) {
                                if ($child == $child_id) {
                                    echo'fdf...' . $child;
                                    $response = [
                                        "status" => "success"
                                    ];
                                    // Get The Category
                                    $daily_chart_category = rwmb_meta(PREFIX_DAILY_CHART . 'category', "", $post_id);

                                    // Set Post Type Title
                                    if ($daily_chart_category == "morning") {
                                        $posttype_title = "Morning Tea";
                                    } else if ($daily_chart_category == "lunch") {
                                        $posttype_title = "Lunch";
                                    } else if ($daily_chart_category == "afternoon") {
                                        $posttype_title = "Afternoon Tea";
                                    }

                                    echo'name'. $child_name = get_the_title($child_id);
                                    $tea = rwmb_meta(PREFIX_DAILY_CHART . 'tea_' . $daily_chart_category . "_" . $child_id, "", $post_id);
                                    $fruit = rwmb_meta(PREFIX_DAILY_CHART . 'fruit_' . $daily_chart_category . '_' . $child_id, "", $post_id);
                                    $bottles = rwmb_meta(PREFIX_DAILY_CHART . 'bottles_' . $daily_chart_category . "_" . $child_id, "", $post_id);
                                    $water = rwmb_meta(PREFIX_DAILY_CHART . 'water_' . $daily_chart_category . "_" . $child_id, "", $post_id);

                                    $response["data"][] = array(
                                        "title" => $posttype_title,
                                        "description" => rwmb_meta(PREFIX_DAILY_CHART . $daily_chart_category . '_tea', "", $post_id),
                                        "NoOfMorningtea" => $tea,
                                        "NoOfFruits" => $fruit,
                                        "NoOfBottles" => $bottles,
                                        "NoOfWater" => $water,
                                        "createdById" => "author"
                                    );
                                }
                            }
                        }
                    }
                }
            }
        } else {
            $response = [
                "status" => "error",
                "message" => "No data found.",
                "data" => null
            ];
        }

        return new WP_REST_Response($response);
    }

}

new Rae_DailyChart_Api();
