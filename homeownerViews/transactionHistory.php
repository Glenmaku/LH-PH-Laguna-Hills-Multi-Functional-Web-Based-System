<div class="homeTransaction-history">
    <div class="transaction-history-title">
        <h1>TRANSACTION HISTORY</h1>
    </div>

    <div class="transaction-history-content">
        <div class="history-content" id="history-content">

        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        displayHistory();
    });
    // to display with page
    $(document).ready(function() {
        var messageCurrentPage = localStorage.getItem("currentPage");
        if (!messageCurrentPage) {
            messageCurrentPage = 1;
        }
        displayHistory(page);
    });

    function displayHistory(page) {
        localStorage.setItem("currentPage", page);
        var historyData = "true";
        $.ajax({
            url: 'homeownerViews/includes/act-displayHistory.php',
            type: 'post',
            data: {
                historySend: historyData,
                page: page
            },
            success: function(data, status) {
                $('#history-content').html(data);
            }
        });
    }

    function getPage(page) {
        displayHistory(page);
    }
</script>