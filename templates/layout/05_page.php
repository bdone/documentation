<?php $this->layout('theme::layout/00_layout') ?>

<header class="Navbar hidden-print">
    <?php $this->insert('theme::partials/navbar_content', ['params' => $params]); ?>
</header>
<div class="Columns content">
    <aside class="Columns__left Collapsible">
        <div class="Collapsible__container">
            <button type="button" class="Button Collapsible__trigger">
                <span class="Collapsible__trigger--bar"></span>
                <span class="Collapsible__trigger--bar"></span>
                <span class="Collapsible__trigger--bar"></span>
            </button>
        </div>

        <div class="Collapsible__content">
            <!-- Navigation -->
            <?php
            $rendertree = $tree;
            $path = '';

            if ($page['language'] !== '') {
                $rendertree = $tree->value[$page['language']];
                $path = $page['language'];
            }

            echo $this->get_navigation($rendertree, $path, isset($params['request']) ? $params['request'] : '', $base_page, $params['mode']);
            ?>


            <div class="Links">
                <?php if (!empty($params['html']['links'])) {
                ?>
                    <hr/>
                    <?php foreach ($params['html']['links'] as $name => $url) {
                    ?>
                        <a href="<?= $url ?>" target="_blank"><?= $name ?></a>
                        <br />
                    <?php

                } ?>
                <?php

            } ?>
            <br />
            <br />
            <br />
            <a href="http://daux.io/">Powered by Daux.io</a>         
            </div>

        </div>
    </aside>
    <div class="Columns__right <?= $params['html']['float'] ? 'Columns__right--float' : ''; ?>">
        <div class="Columns__right__content">
            <div class="doc_content">
                <?= $this->section('content'); ?>
            </div>
        </div>
    </div>
</div>
