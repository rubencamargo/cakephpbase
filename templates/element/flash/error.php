<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error p-3 mb-2 bg-danger text-white" onclick="this.classList.add('hidden');"><?= $message ?></div>
