<?php
require 'connection.php';

if (isset($_POST['announcementSend'])) {
    $recordsPerPage = 3;
    $currentPage = (int)$_POST["page"] ?? 1;
    $startFrom = ($currentPage - 1) * $recordsPerPage;

    $announcementTable = '';

    $query = "SELECT * FROM announcement_tb ORDER BY announcement_no DESC LIMIT ?, ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ii", $startFrom, $recordsPerPage);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $title = $row['announcement_title'];
        $announcementDate = $row['announcement_date'];
        $announcementDescription = substr($row['announcement_description'], 0, 30) . " see more..";

        $announcementTable .= '<div class="card" style="margin-bottom:5px;">
        <div class="card-body">
            <div class="h5 pb-2 mb-4 text-dark border-bottom border-success" style="text-align:center;">
                '. $title.'
            </div>
            '. $announcementDate.'
        </div>
    </div>
        <hr class="border border-dark-subtle border-0.5 opacity-75">';

    }

    $query = "SELECT COUNT(*) as total_records FROM announcement_tb";
    $totalPagesResult = $con->query($query);
    $totalRows = $totalPagesResult->fetch_assoc();
    $totalPages = ceil($totalRows["total_records"] / $recordsPerPage);
    $pagination = '<nav aria-label="Page navigation">
       <ul class="pagination pagination-sm justify-content-end">';
    if ($currentPage > 1) {
        $previous = $currentPage - 1;
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $previous . ')">Previous</a></li>';
    }

    $start = max(1, $currentPage - 2);
    $end = min($totalPages, $currentPage + 1);
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $currentPage) {
            $pagination .= '<li class="page-item active"><a class="page-link">' . $i . '</a></li>';
        } else {
            $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $i . ')">' . $i . '</a></li>';
        }
    }

    if ($currentPage < $totalPages) {
        $next = $currentPage + 1;
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $next . ')">Next</a></li>';
    }
    $pagination .= '</ul></nav>';

    // Concatenate the pagination links and the table
    $announcementTable =  $announcementTable . $pagination;

    echo $announcementTable;
}
