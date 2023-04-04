<td class="actions">
    <?= $this->Html->link(__('View'), ['action' => 'view', $data->id], ['class' => 'btn btn-sm btn-primary']) ?>
    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $data->id], ['class' => 'btn btn-sm btn-info']) ?>
    <?php //echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $data->id], ['class' => 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $data->id)]) ?>
</td>