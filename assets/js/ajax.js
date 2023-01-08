function showAllTransaction(){  //sidebar
    $.ajax({
        url:"./adminViews/allTransaction.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent').html(data);
        }
    });
}

function showAllAnnouncement(){  //sidebar
    $.ajax({
        url:"./adminViews/announcement.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent').html(data);
        }
    });
}

function showMap(){  //sidebar
    $.ajax({
        url:"./adminViews/map.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent').html(data);
        }
    });
}


  