<!-- Paginator template in /config/paginator-templates.php -->
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <?= $this->Paginator->first('<< ' . __('first'), ['class' => 'page-item']) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>

    <p class="text-center"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
</nav>