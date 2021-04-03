<?php function showItem($item)
{ ?>
    <li>
        <a href="<?= htmlspecialchars($item->link) ?>"><?= htmlspecialchars($item->title) ?></a>
        <?php
        if (!empty($item->children)) {
            ?>
            <ul><?php
            foreach ($item->children as $child) {
                showItem($child);
            } ?></ul><?php
        }
        ?>
    </li>
<?php } ?>
<ul>
    <?php
    foreach ($this->params->items as $item) {
        showItem($item);
    }
    ?>
</ul>