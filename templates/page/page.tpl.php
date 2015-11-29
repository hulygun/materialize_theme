<header class="flex jc-between">
    <nav class="navigation flex ai-center">
    <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="flex ai-center">
            <svg viewBox="0 0 200 54.05589">
                <g transform="translate(-2.9645835e-8,-998.30633)">
                    <g transform="matrix(0.3992016,0,0,0.3992016,0.39920182,998.58796)">
                        <g transform="translate(-3.5762789e-7,0.29450924)" class="fill">
                            <path d="m 479.17,2.062 0,-1.916 8.487,0 0,1.915 -3.104,0 0,8.441 -2.277,0 0,-8.44 -3.106,0 z"/>
                            <path d="m 492.051,0.146 2.423,7.121 0.029,0 2.29,-7.121 3.207,0 0,10.356 -2.132,0 0,-7.34 -0.029,0 -2.538,7.34 -1.756,0 -2.538,-7.267 -0.028,0 0,7.267 -2.132,0 0,-10.356 3.204,0 z"/>
                        </g>
                        <path class="stroke" d="m 243.936,25.294509 -21.889,0 0.036,40.955 c 0,11.969 -5.131,21.652 -17.1,21.652 -11.974,0 -17.152,-9.683 -17.152,-21.652 l 0,-40.915 -21.832,0 -0.006,40.915 c 0,23.651 15.203,42.820001 38.858,42.820001 23.648,0 39.078,-19.169001 39.078,-42.820001 l 0.007,-40.955 z"/>
                        <rect class="fill" x="441.30899" y="0.33950925" width="21.781" height="106.616"/>
                        <path class="stroke" d="m 148.194,24.403509 c -18.775,-4.333 -30.619,14.319 -31.111,15.319 -0.242,0.491 -0.251,0.777 -1.083,0.755 -0.687,-0.014 -0.766,-0.755 -0.766,-0.755 l -2.33,-14.268 -19.51,0 0,81.430001 21.871,0 0,-44.076001 c 0,-3.602 9.7,-20.872 28.492,-16.426 9.504,2.248 13.535,6.281 13.535,6.281 0,0 0,-15.718 0,-24.806 -3.517,-1.834 -5.93,-2.723 -9.098,-3.454 z"/>
                        <path class="fill" d="m 273.616,133.70551 0,-29.3 c 0.002,0 0.005,0.003 0.007,0.005 l 0.003,-10.972001 c 0,0 0.035,-0.878 0.826,-0.889 0.706,-0.008 0.863,0.46 1.035,0.889 1.658,4.126 10.779,19.847001 31.018,14.916001 18.118,-5.104 31.407,-21.741001 31.407,-41.500001 0,-23.805 -19.303,-43.111 -43.114,-43.111 -23.811,0 -43.113,19.306 -43.113,43.111 0,0 0,58.935001 0,66.850001 l 21.931,0 z m 21.2,-88.668001 c 12.055,0 21.825,9.772 21.825,21.818 0,12.056 -9.77,21.829 -21.825,21.829 -12.053,0 -21.82,-9.772 -21.82,-21.829 0.001,-12.046 9.768,-21.818 21.82,-21.818 z"/>
                        <path class="fill" d="m 410.536,106.92151 21.931,0 0,-40.066001 c 0,-23.805 -19.3,-43.111 -43.112,-43.111 -23.812,0 -43.115,19.306 -43.115,43.111 0,19.758 13.29,36.395001 31.408,41.500001 20.24,4.931 29.357,-10.790001 31.018,-14.916001 0.172,-0.429 0.327,-0.896 1.035,-0.889 0.791,0.011 0.824,0.889 0.824,0.889 m 0.632,-26.584 c 0,12.056 -9.771,21.829 -21.821,21.829 -12.053,0 -21.825,-9.772 -21.825,-21.829 0,-12.046 9.772,-21.818 21.825,-21.818 12.051,0 21.821,9.772 21.821,21.818 z"/>
                        <g transform="translate(-3.5762789e-7,0.29450924)" class="fill">
                            <path d="M 24.879,106.457 0,106.457 0,0 26.695,0 c 32.325,0 56.841,5.931 56.841,53.229 0,46.84 -25.969,53.228 -58.657,53.228 z m 5.94,-88.004 -8.795,0 0,69.533 9.032,0.231 c 18.522,0 30.452,-1.686 30.452,-34.989 0,-31.937 -10.532,-34.775 -30.689,-34.775 z"/>
                        </g>
                    </g>
                </g>
            </svg>
        </a>
    <?php endif; ?>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('flex', 'ai-center')))); ?>
    </nav>
    <?php print render($page['header']); ?>
</header>
<main>
<?php if ($main_menu || $secondary_menu): ?>
    <div id="navigation">
        <div class="section">
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
        </div>
    </div> <!-- /.section, /#navigation -->
<?php endif; ?>

<?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
<?php endif; ?>

<?php print $messages; ?>

<div id="main-wrapper">
    <div id="main" class="clearfix">

        <div id="content" class="column">
            <div class="section">
                <?php if ($page['highlighted']): ?>
                    <div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?>
                    <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
            </div>
        </div> <!-- /.section, /#content -->

        <?php if ($page['sidebar_first']): ?>
            <div id="sidebar-first" class="column sidebar">
                <div class="section">
                    <?php print render($page['sidebar_first']); ?>
                </div>
            </div> <!-- /.section, /#sidebar-first -->
        <?php endif; ?>

        <?php if ($page['sidebar_second']): ?>
            <div id="sidebar-second" class="column sidebar">
                <div class="section">
                    <?php print render($page['sidebar_second']); ?>
                </div>
            </div> <!-- /.section, /#sidebar-second -->
        <?php endif; ?>

    </div>
</div> <!-- /#main, /#main-wrapper -->
</main>
<div id="footer">
    <div class="section">
        <?php print render($page['footer']); ?>
    </div>
</div> <!-- /.section, /#footer -->
