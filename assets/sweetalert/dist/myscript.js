const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal({
       
        text: flashData,
        type: 'success'
    });
}

$('.tombol-logout').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Yakin?',
        text: "Anda akan logout dari sistem",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Logout'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

$('.tombol-hapusmenu').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Are You Sure',
        text: "The Menu Will Be deleted",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-hapussub').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Are You Sure',
        text: "The Sub Menu Will Be deleted",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-hapusreq').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Are You Sure',
        text: "The Request Will Be deleted",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Are You Sure',
        text: "Your Request Will Be deleted",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-logout').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Are You Sure',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Logout'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-reject').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Are You Sure',
        text: "You Will Reject The Request",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Reject'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-sah').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Yakin?',
        text: "Anda akan memberikan barang",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oke'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-kembali').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Periksa kembali unit dan detail barang sebelum lanjut',
        text: "Sudah sesuai?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oke'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-hapusrole').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal({
        title: 'Are You Sure',
        text: "You Will Delete The Role",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
function hideLinks(className, ids) {
    var links = document.getElementsByTagName("a");
    var max   = links.length;

    for (var i=0; i<max; i++) {
         var link   = new RegExp("(\s*)"+ className +"(\s*)");
         var isLink = link.test(links[i].className);

         if (isLink) {
              for (var j=0; j<ids.length; j++) {
                   var regexp = new RegExp(ids[j] + "$");
                   var hasId  = regexp.test(links[i].href);

                   if (hasId) {
                        links[i].style.display = "none";
                   }
              }
         }
    }
    }

    window.onload = function() {
    hideLinks("link", []);
    }
    var btn = $('#buttontotop');

$(window).scroll(function() {
if ($(window).scrollTop() > 300) {
btn.addClass('show');
} else {
btn.removeClass('show');
}
});

btn.on('click', function(e) {
e.preventDefault();
$('html, body').animate({scrollTop:0}, '300');
});

