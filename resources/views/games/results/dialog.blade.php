<div class="dialog-bg">
    <div class="card dialog-box text-l animation-6">
        <div class="dialog text-gray-800">
            Dialog goes here...
        </div>

        <div class="text-xs mt-2">Click anywhere to close.</div>
    </div>

</div>

<div class="dialog-bg dialog-bg1" style="display: none;">

    <div class="card dialog-box text-xxl animation-6">
        <div id="gif-result-small">rawr</div>
        <div>
            <div class="dialog1 text-primary">
                Dialog goes here...
            </div>

            <div class="text-xs mt-2">Click anywhere to close.</div>
        </div>

    </div>

</div>

<script>
    document.querySelector(".dialog-bg").addEventListener('click', () => {
        document.querySelector(".dialog-bg").style.display = 'none';
    });

    document.querySelector(".dialog-bg1").addEventListener('click', () => {
        document.querySelector(".dialog-bg1").style.display = 'none';
    });
</script>
