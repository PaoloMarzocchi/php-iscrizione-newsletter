

<?php include_once __DIR__.'/head.php'; session_start(); ?>

<div class="row align-items-stretch justify-content-center my-5">
    <div class="col-8">
        <div class="h-100 p-5 border border-<?=$_SESSION['alertMsg']['alert_class']?> border rounded-3">
            <h3 class="text-center text-<?=$_SESSION['alertMsg']['alert_class']?>"><?= $_SESSION['alertMsg']['content']?></h3>
            
        </div>
    </div>
</div>

<p class="p-5 bg-warning fs-4 fw-bold my-5 text-center">
    We hope you enjoyed, keep follow us for new tools!
</p>


<?php include_once __DIR__.'/foot.php'; ?> 