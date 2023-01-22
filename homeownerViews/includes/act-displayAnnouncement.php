<?php
include 'connection.php';

if (isset($_POST['announcementSend'])) {
    // Set the number of records to be displayed per page
    $records_per_page = 3;

    // Get the current page number
    $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1;

    // Calculate the start index for the current page
    $start_from = ($page - 1) * $records_per_page;

    $announcementTable = '';

    $sql = "SELECT * FROM announcement_tb ORDER BY announcement_no DESC LIMIT $start_from, $records_per_page";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['announcement_title'];
        $announcement_date = $row['announcement_date'];
        $announcement_description = substr($row['announcement_description'], 0, 30) . "...";

        $announcementTable .= '<button class="announcement-btn">
        <p>Date Posted <br>' . $announcement_date . '</p>
        <h5 style="text-align:center">' . $title . '</h5>
        <p>' .$announcement_description . '</p>
        </button>';

    }
    $announcementTable .= '</table>';
    $query = "SELECT COUNT(*) as total_records FROM announcement_tb";
$total_pages_result = mysqli_query($con, $query);
$total_rows = mysqli_fetch_array($total_pages_result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);
$pagination = '<nav aria-label="Page navigation">
       <ul class="pagination">';
if ($page > 1) {
    $previous = $page - 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $previous . ')"><i class="fa-solid fa-arrow-left"></i></a></li>';
}
if ($total_pages > 3) {
    if ($page == 1) {
        for ($i = 1; $i <= 1; $i++) {
            $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $i . ')">' . $i . '</a></li>';
        }
        $pagination .= '<li class="page-item">...</li>';
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $total_pages . ')">' . $total_pages . '</a></li>';
    } elseif ($page == $total_pages) {
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(1)">1</a></li>';
        $pagination .= '<li class="page-item">...</li>';
        for ($i = $total_pages - 2; $i <= $total_pages; $i++) {
            $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $i . ')">' . $i . '</a></li>';
        }
    } else {
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(1)">1</a></li>';
        $pagination .= '<li class="page-item">...</li>';
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . ($page - 1) . ')">' . ($page - 1) . '</a></li>';
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $page . ')">' . $page . '</a></li>';
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . ($page + 1) . ')">' . ($page + 1) . '</a></li>';
        $pagination .= '<li class="page-item">...</li>';
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $total_pages . ')">' . $total_pages . '</a></li>';
    }
    if ($page < $total_pages) {
        $next = $page + 1;
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $next . ')"><i class="fa-solid fa-arrow-right"></i></a></li>';
    }
    $pagination .= '</ul></nav>';

    

}
    // Concatenate the pagination links and the table
    $announcementTable =  $announcementTable . $pagination;

    echo $announcementTable;
} else {
    echo 'Data Not Found ';
}
