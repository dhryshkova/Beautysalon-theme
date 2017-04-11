<?php
    $title_h1 = get_post_meta( get_the_ID(), 'title_h1', true );
    $entries1 = get_post_meta( get_the_ID(), 'repeat_group_price_1', true );
    $entries2 = get_post_meta( get_the_ID(), 'repeat_group_price_2', true );
    $entries3 = get_post_meta( get_the_ID(), 'repeat_group_price_3', true );
    $title_h3_1 = get_post_meta( get_the_ID(), 'title_h3_1', true );
    $title_h3_2 = get_post_meta( get_the_ID(), 'title_h3_2', true );
    $title_h3_3 = get_post_meta( get_the_ID(), 'title_h3_3', true );
?>
<div class="content-prices">
    <div class="slide" id="prices">
        <div class="container">
            <div class="content col-md-offset-1 col-md-10 pricesblock">
                <div class="price-line"></div>
                <h1><?php echo $title_h1; ?></h1>

                <h3><?php echo $title_h3_1; ?></h3>
                <table style="width:100%; height: 100%; font-size: 22px; font-family: serif; font-style:italic;">

                    <?php
                    foreach ( (array) $entries1 as $key => $entry1 ) {
                        $title1 = $price1 = '';
                        ?>

                        <tr>
                            <td style="text-align: left;">
                                <?php
                                if ( isset( $entry1['title1'] ) ) {
                                    $title1 = esc_html( $entry1['title1'] );
                                    echo $title1;
                                }
                                ?>
                            </td>
                            <td style="text-align: right;">
                                <?php
                                if ( isset( $entry1['price1'] ) ) {
                                    $price1 = wpautop( $entry1['price1'] );
                                    echo $price1;
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>

                <h3><?php echo $title_h3_2; ?></h3>
                <table style="width:100%; height: 100%; font-size: 22px; font-family: serif; font-style:italic;">

                    <?php
                    foreach ( (array) $entries2 as $key => $entry2 ) {
                        $title2 = $price2 = '';
                        ?>

                        <tr>
                            <td style="text-align: left;">
                                <?php
                                if ( isset( $entry2['title2'] ) ) {
                                    $title2 = esc_html( $entry2['title2'] );
                                    echo $title2;
                                }
                                ?>
                            </td>
                            <td style="text-align: right;">
                                <?php
                                if ( isset( $entry2['price2'] ) ) {
                                    $price2 = wpautop( $entry2['price2'] );
                                    echo $price2;
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>

                <h3><?php echo $title_h3_3; ?></h3>
                <table style="width:100%; height: 100%; font-size: 22px; font-family: serif; font-style:italic;">

                    <?php
                    foreach ( (array) $entries3 as $key => $entry3 ) {
                        $title3 = $price3 = '';
                        ?>

                        <tr>
                            <td style="text-align: left;">
                                <?php
                                if ( isset( $entry3['title3'] ) ) {
                                    $title3 = esc_html( $entry3['title3'] );
                                    echo $title3;
                                }
                                ?>
                            </td>
                            <td style="text-align: right;">
                                <?php
                                if ( isset( $entry3['price3'] ) ) {
                                    $price3 = wpautop( $entry3['price3'] );
                                    echo $price3;
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>

            </div>
        </div>
    </div>
</div>