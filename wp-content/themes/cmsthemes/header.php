<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
}

$list_module = ["1", "2", "19", "4", "5","15","6","7","23","8","9","27"];
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link href="<?php echo $url_path ?>/module_cms/1/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/module_cms/1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body <?php body_class(); ?>>
    <?php
    for ($i = 0; $i < count($list_module); $i++) {
        echo '<link href="' . get_template_directory_uri() . "/module_cms/" . $list_module[$i] . "/css/" . $list_module[$i] . ".css" . '" rel="stylesheet" type="text/css" />';
        wp_register_style("module-" . $list_module[$i], get_template_directory() . "/module_cms/" . $list_module[$i] . "/css/" . $list_module[$i] . ".css");
        // include get_template_directory() . "/module_cms/" . $list_module[$i] . "/" . $list_module[$i] . "-content.php";
    }
    include get_template_directory() . '/module_cms/1/1-content.php';
    include get_template_directory() . '/module_cms/2/2-content.php';
    include get_template_directory() . '/module_cms/19/19-content.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xl-9 col-md-9">
                <?php  include get_template_directory() . '/module_cms/4/4-content.php'; ?>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3">
            <?php
            include get_template_directory() . '/module_cms/15/15-content.php';
            include get_template_directory() . '/module_cms/23/23-content.php';
            include get_template_directory() . '/module_cms/5/5-content.php';
            include get_template_directory() . '/module_cms/6/6-content.php';
            include get_template_directory() . '/module_cms/7/7-content.php';
            include get_template_directory() . '/module_cms/8/8-content.php';
            include get_template_directory() . '/module_cms/9/9-content.php';
            ?>
            </div>
        </div>
    </div>
    <script>
        var map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 8
            });
        }
    </script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>