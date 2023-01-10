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

function showAllAccountRecord(){  //sidebar
    $.ajax({
        url:"./adminViews/accountRecord.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent').html(data);
        }
    });
}



function showAllAddAccount(){  //add account in Account records
    $.ajax({
        url:"/adminViews/AddAdminAccount.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.accountContent').html(data);
        }
    });
}

function addmessage(){
    $.ajax({
        url:"adminViews/mapdata.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent').html(data);
        }
    });
}

function displayData(){
    $.ajax({
        url:"adminViews/mapdata.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent').html(data);
        }
    })
}