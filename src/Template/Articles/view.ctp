<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articles view large-9 medium-8 columns content">
    <h3><?= h($article->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titre') ?></th>
            <td><?= h($article->titre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($article->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= $this->Number->format($article->prix) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($article->description)); ?>
    </div>
</div>
