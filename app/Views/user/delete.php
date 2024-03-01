<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="container"> 
    <form action="<?=base_url()?>deleteUser/<?=$user->user_id?>"method="post">
        <input type="hidden" name="_method" value="DELETE">
        <?= csrf_field() ?>
        <H2>Sigurado ikaw nga e delete ini nga user? hambal lang oo or indi ah!</H2>
        <button type="button" class="btn btn-primary">Cancel</button>
        <button type="submit" class="btn btn-danger">Yes</button>
    </form>
</div>

<?= $this->endSection('content') ?>