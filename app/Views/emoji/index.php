<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
    <style>
        .label-emoji {
            font-size: 30px;
            padding: 10px;
        }

        .label-emoji:hover {
            cursor: pointer;
        }

        .form-select-icon {
            position: fixed;
        }

        .item-emoji {
            display: inline-block;
        }

        .collection-fixed {
            position: fixed;
        }

        .collection-fixed .collection .collection-item {
            padding: 5px 10px;
        }
    </style>
    <div class="row list-icon-emoji">
        <div class="col s3 hide-on-small-only">
            <div class="collection-fixed">
                <div class="collection">
                    <?php
                    $file = @fopen($file_name, "r");
                    while (!feof($file)) {
                        $line = fgets($file);
                        $active = '';
                        if (strpos($line, '# group:') !== false) {
                            $slug = url_title($line);
                            $href = base_url('icon-facebook?active=' . $slug . '#' . $slug);
                            $active = !empty($_REQUEST['active']) && $_REQUEST['active'] == $slug ? 'active' : '';
                            echo '<a href="' . $href . '" class="collection-item ' . $active . '">↪ ';
                            echo str_replace('# group:', '', $line);
                            echo '</a>';
                        }
                    }
                    ?>
                </div>

                <div class="banner-gg-ads">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Vertical -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-2133388326821128"
                         data-ad-slot="1485986610"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
        <div class="col s12 xl9">
            <div class="banner-gg-ads">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Top 728 x 90 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-2133388326821128"
                     data-ad-slot="8687434187"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

            <blockquote>
                Click vào icon để copy.
            </blockquote>

            <?php
            $file = @fopen($file_name, "r");
            $text = '';
            while (!feof($file)) {
                $line = fgets($file);
                if (strpos($line, '# group:') !== false) {
                    echo '<h4 id="' . url_title($line) . '">';
                    echo '<a href="' . base_url('tool/icon-facebook#' . url_title($line)) . '">';
                    echo str_replace('# group:', '', $line);
                    echo '</a>';
                    echo '</h4>';
                } elseif (strpos($line, '# subgroup:') !== false) {
                    echo '<h6 id="' . url_title(
                            $line
                        ) . '" style="margin-top: 20px; font-size: 10px">';
                    echo '<a href="' . base_url('tool/icon-facebook#' . url_title($line)) . '">';
                    echo '- ' . lang('Common.emoji.' . trim(str_replace('# subgroup: ', '', $line)));
                    echo '</a>';
                    echo '</h6>';
                } else {
                    $icons = explode(' ;', $line);
                    $icons = preg_split('/\s+/', $icons[0]);

                    if (!empty($icons[0])) {
                        echo '<div class="item-emoji">';
                        $text = '';
                        foreach ($icons as $key => $icon) {
                            if (empty($icon)) {
                                continue;
                            }
                            $text .= '&#x' . $icon . ';';
                        }
                        echo '<span data-clipboard-text="' . $text . '" onclick="M.toast({html: \'Đã copy ' . $text . ' \'})" title="Click copy" class="label-emoji clipboard" data-parent="" data-sub-parent="" data-text="' . $text . '">' . $text . '</span>';
                        echo '</div>';
                    }
                }
            }
            fclose($file)
            ?>
        </div>

    </div>
<?= $this->endSection() ?>