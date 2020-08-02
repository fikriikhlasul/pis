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
$('.tombol-hapusanggotabelumaktif').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Yakin?',
        text: "Akan menghapus akun?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-hapusseluruh').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Yakin?',
        text: "Akan menghapus akun?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-hapusanggota').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Yakin?',
        text: "Akan menghapus akun anggota?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-hapusalumni').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Yakin?',
        text: "Akan menghapus akun alumni?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});
$('.tombol-hapusdosen').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Yakin?',
        text: "Akan menghapus akun dosen?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
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



