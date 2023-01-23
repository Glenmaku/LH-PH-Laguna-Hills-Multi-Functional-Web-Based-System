<?php
require 'connection.php';

if (isset($_POST['announcementSend'])) {
    $recordsPerPage = 4;
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
        $announcementDescription = substr($row['announcement_description'], 0, 30) . "...";

        $announcementTable .= '<div class="card text-center" >
        <div class="card-body">
          <p class="card-text">'.$title.'</p>
        </div>
        <div class="card-footer text-muted" style="font-size: 12px">
          '.$announcementDate.'
        </div>
      </div><br>';

    }

    $query = "SELECT COUNT(*) as total_records FROM announcement_tb";
$totalPagesResult = $con->query($query);
$totalRows = $totalPagesResult->fetch_assoc();
$totalPages = ceil($totalRows["total_records"] / $recordsPerPage);
$pagination = '<nav aria-label="Page navigation">
       <ul class="pagination">';
if ($currentPage > 1) {
    $previous = $currentPage - 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $previous . ')"><i class="fa-solid fa-arrow-left"></i></a></li>';
}
if ($totalPages > 3) {
    if ($currentPage == 1) {
        for ($i = 1; $i <= 1; $i++) {
            $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $i . ')">' . $i . '</a></li>';
        }
        $pagination .= '<li class="page-item">...</li>';
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $totalPages . ')">' . $totalPages . '</a></li>';
    } elseif ($currentPage == $totalPages) {
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(1)">1</a></li>';
        $pagination .= '<li class="page-item">...</li>';
        for ($i = $totalPages - 2; $i <= $totalPages; $i++) {
            $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $i . ')">' . $i . '</a></li>';
        }
    } else {
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(1)">1</a></li>';
        $pagination .= '<li class="page-item">...</li>';
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . ($currentPage - 1) . ')">' . ($currentPage - 1) . '</a></li>';
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $currentPage . ')">' . $currentPage . '</a></li>';
        $pagination .= '<li class="page-item">...</li>';
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $totalPages . ')">' . $totalPages . '</a></li>';
    }
}    else {
    for ($i = 1; $i <= $totalPages; $i++) {
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $i . ')">' . $i . '</a></li>';
    }
}
if ($currentPage < $totalPages) {
    $next = $currentPage + 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $next . ')"><i class="fa-solid fa-arrow-right"></i></a></li>';
}
$pagination .= '</ul></nav>';

// Concatenate the pagination links and the table
$announcementTable =  $announcementTable . $pagination;
       
echo $announcementTable;
}
?>

